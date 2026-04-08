# Guía de Despliegue en Hostinger - Strategal

## Requisitos Previos
- Cuenta en Hostinger con hosting compatible con Laravel (PHP 8.2+)
- Acceso FTP o SSH
- Panel de control de Hostinger (hPanel)
- Cliente FTP como FileZilla o acceso SSH

## Paso 1: Preparar el Proyecto Local

### 1.1 Optimizar para Producción
```bash
# Limpiar caché
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Compilar assets para producción
npm run build
# o
pnpm run build
```

### 1.2 Crear archivo .env.production
Crea un archivo `.env.production` con la configuración de producción:

```env
APP_NAME=Strategal
APP_ENV=production
APP_KEY=base64:TU_APP_KEY_AQUI
APP_DEBUG=false
APP_URL=https://www.strategalsl.com

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MAIL_MAILER=smtp
MAIL_HOST=smtp.hostinger.com
MAIL_PORT=587
MAIL_USERNAME=contacto@strategalsl.com
MAIL_PASSWORD=tu_password_email
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contacto@strategalsl.com
MAIL_FROM_NAME="${APP_NAME}"
MAIL_TO_ADDRESS=contacto@strategalsl.com
```

**IMPORTANTE:**
- Genera un nuevo APP_KEY con: `php artisan key:generate --show`
- Copia el valor y úsalo en el servidor

## Paso 2: Configurar Base de Datos en Hostinger

### 2.1 Crear Base de Datos
1. Ingresa al panel de Hostinger (hPanel)
2. Ve a **Bases de Datos** > **MySQL Databases**
3. Crea una nueva base de datos
4. Crea un usuario y asigna todos los privilegios
5. Anota: nombre de BD, usuario y contraseña

### 2.2 Exportar Base de Datos Local (si tienes datos)
```bash
# Si estás usando MySQL localmente
php artisan db:seed  # Ejecuta seeders si los tienes
# Luego exporta con phpMyAdmin o:
mysqldump -u root -p strategal > strategal_backup.sql
```

### 2.3 Importar en Hostinger
1. Ve a **phpMyAdmin** en hPanel
2. Selecciona tu base de datos
3. Importa el archivo SQL o ejecuta las migraciones directamente en el servidor

## Paso 3: Subir Archivos al Servidor

### Opción A: Via FTP (FileZilla)

#### 3.1 Preparar Archivos
**EXCLUIR estos archivos/carpetas:**
- `/node_modules/`
- `/vendor/` (se reinstalará en el servidor)
- `.env` (usarás .env.production)
- `/storage/*.key`
- `/.git/`

#### 3.2 Configurar FileZilla
1. Abre FileZilla
2. Host: ftp.tu-sitio.com (lo encuentras en hPanel)
3. Usuario: tu usuario FTP
4. Contraseña: tu contraseña
5. Puerto: 21

#### 3.3 Estructura en Hostinger
```
public_html/
  ├── strategal/              (todo el proyecto Laravel)
  │   ├── app/
  │   ├── bootstrap/
  │   ├── config/
  │   ├── database/
  │   ├── public/             (contenido se mueve arriba)
  │   ├── resources/
  │   ├── routes/
  │   ├── storage/
  │   └── .env
  └── (archivos de public/ van aquí directamente)
```

**IMPORTANTE:** Los archivos de la carpeta `public/` deben estar en la raíz de `public_html/`

### Opción B: Via SSH (si tienes acceso)

```bash
# 1. Conectar via SSH
ssh tu_usuario@tu_dominio.com

# 2. Navegar al directorio
cd public_html

# 3. Clonar o subir archivos
# Si usas Git:
git clone tu-repositorio strategal
cd strategal

# 4. Instalar dependencias
composer install --optimize-autoloader --no-dev
npm install
npm run build
```

## Paso 4: Configurar el Servidor

### 4.1 Mover archivos public
```bash
# Mueve el contenido de public/ a public_html/
mv public/* ../
mv public/.htaccess ../
```

### 4.2 Actualizar index.php
Edita `public_html/index.php` y actualiza las rutas:

```php
// Cambia:
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

// Por:
require __DIR__.'/strategal/vendor/autoload.php';
$app = require_once __DIR__.'/strategal/bootstrap/app.php';
```

### 4.3 Configurar .htaccess
Crea/edita `public_html/.htaccess`:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Redirect to HTTPS
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

    # Laravel routes
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
```

### 4.4 Configurar Permisos
```bash
chmod -R 755 strategal/
chmod -R 775 strategal/storage
chmod -R 775 strategal/bootstrap/cache
```

### 4.5 Crear archivo .env
```bash
cd strategal
cp .env.production .env
# Edita con los datos correctos de tu hosting
nano .env
```

## Paso 5: Instalar Dependencias

### Via SSH:
```bash
cd ~/public_html/strategal
composer install --optimize-autoloader --no-dev
php artisan key:generate
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Via PHP Selector (si no tienes SSH):
1. En hPanel, ve a **Avanzado** > **Seleccionar versión de PHP**
2. Asegúrate de tener PHP 8.2+
3. Activa las extensiones necesarias:
   - mysqli
   - pdo_mysql
   - mbstring
   - tokenizer
   - xml
   - ctype
   - json
   - bcmath

## Paso 6: Ejecutar Migraciones

### Via SSH:
```bash
php artisan migrate --force
php artisan db:seed --force  # Si tienes seeders
```

### Via Terminal en hPanel:
Algunos planes de Hostinger tienen terminal web donde puedes ejecutar estos comandos.

## Paso 7: Configurar Email

### 7.1 Crear Cuenta de Email en Hostinger
1. Ve a **Emails** en hPanel
2. Crea: contacto@strategalsl.com
3. Anota la contraseña

### 7.2 Configurar SMTP en .env
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.hostinger.com
MAIL_PORT=587
MAIL_USERNAME=contacto@strategalsl.com
MAIL_PASSWORD=tu_contraseña
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contacto@strategalsl.com
MAIL_FROM_NAME="Strategal"
MAIL_TO_ADDRESS=contacto@strategalsl.com
```

## Paso 8: Verificación Final

### 8.1 Checklist
- [ ] Sitio carga correctamente en https://www.strategalsl.com
- [ ] No hay errores 500
- [ ] Todas las páginas funcionan (Inicio, Áreas, Sobre Nosotros, Contacto)
- [ ] Los estilos se cargan correctamente
- [ ] El formulario de contacto funciona
- [ ] Los emails se envían correctamente
- [ ] Dark mode funciona
- [ ] Responsive design funciona
- [ ] Todas las imágenes cargan

### 8.2 Comandos de Debug (si hay problemas)
```bash
# Ver logs
tail -f storage/logs/laravel.log

# Limpiar caché
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Recrear caché
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Problemas Comunes

### Error 500
1. Verifica permisos de storage y bootstrap/cache
2. Revisa APP_KEY en .env
3. Verifica logs en storage/logs/

### Assets no cargan
1. Verifica APP_URL en .env
2. Ejecuta `npm run build` antes de subir
3. Verifica rutas en index.php

### Base de datos no conecta
1. Verifica credenciales en .env
2. Usa 'localhost' como DB_HOST
3. Verifica que el usuario tenga permisos

### Emails no se envían
1. Verifica credenciales SMTP
2. Usa smtp.hostinger.com como host
3. Puerto 587 con TLS
4. Verifica que la cuenta de email exista

## Mantenimiento

### Actualizar el Sitio
```bash
# 1. Subir cambios via FTP/SSH
# 2. Ejecutar:
php artisan config:clear
php artisan cache:clear
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Backups
1. Backup de archivos via FTP
2. Backup de BD via phpMyAdmin
3. Recomendado: Backup semanal automático

## Soporte

- Documentación Laravel: https://laravel.com/docs
- Soporte Hostinger: https://support.hostinger.com
- Laravel en Hosting compartido: https://laravel.com/docs/11.x/deployment

---

**Nota:** Esta guía asume hosting compartido de Hostinger. Para VPS, el proceso puede variar.
