# 📧 Configuración del Sistema de Correo Electrónico

Este documento explica cómo configurar el envío de correos electrónicos para el formulario de contacto de Strategal.

## 🎯 Funcionalidad Implementada

✅ **Formulario de contacto** completamente funcional
✅ **Validación** de campos en el servidor
✅ **Email HTML** diseñado con el branding de Strategal
✅ **Mensajes de éxito/error** para el usuario
✅ **Protección CSRF** incluida

---

## 📋 Configuración Paso a Paso

### Opción 1: Gmail (Recomendado para desarrollo)

1. **Edita el archivo `.env`** en la raíz del proyecto:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@gmail.com
MAIL_PASSWORD=tu-contraseña-de-aplicación
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=tu-email@gmail.com
MAIL_FROM_NAME="Strategal Servicios Legales"

# Email donde llegarán los mensajes del formulario
MAIL_TO_ADDRESS=contacto@strategalsl.com
```

2. **Genera una contraseña de aplicación de Gmail:**
   - Ve a tu cuenta de Google: https://myaccount.google.com/
   - Ve a **Seguridad** → **Verificación en 2 pasos** (actívala si no lo está)
   - Ve a **Contraseñas de aplicaciones**
   - Genera una nueva contraseña para "Mail"
   - Usa esa contraseña en `MAIL_PASSWORD`

---

### Opción 2: Mailtrap (Recomendado para testing)

Mailtrap es ideal para probar emails sin enviarlos realmente.

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=tu-username-mailtrap
MAIL_PASSWORD=tu-password-mailtrap
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contacto@strategalsl.com
MAIL_FROM_NAME="Strategal Servicios Legales"

MAIL_TO_ADDRESS=contacto@strategalsl.com
```

1. Crea una cuenta en https://mailtrap.io
2. Obtén las credenciales SMTP
3. Configura el `.env` con esos datos

---

### Opción 3: Servidor SMTP Propio

Si Strategal tiene su propio servidor de correo:

```env
MAIL_MAILER=smtp
MAIL_HOST=mail.strategalsl.com
MAIL_PORT=587
MAIL_USERNAME=contacto@strategalsl.com
MAIL_PASSWORD=contraseña-del-correo
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contacto@strategalsl.com
MAIL_FROM_NAME="Strategal Servicios Legales"

MAIL_TO_ADDRESS=contacto@strategalsl.com
```

---

### Opción 4: Amazon SES (Producción)

Para producción con alto volumen:

```env
MAIL_MAILER=ses
AWS_ACCESS_KEY_ID=tu-access-key
AWS_SECRET_ACCESS_KEY=tu-secret-key
AWS_DEFAULT_REGION=us-east-1
MAIL_FROM_ADDRESS=contacto@strategalsl.com
MAIL_FROM_NAME="Strategal Servicios Legales"

MAIL_TO_ADDRESS=contacto@strategalsl.com
```

---

## 🧪 Probar el Formulario

1. **Inicia los servidores:**
   ```bash
   pnpm run dev
   php artisan serve
   ```

2. **Accede a la página de contacto:**
   ```
   http://127.0.0.1:8000/contacto
   ```

3. **Completa y envía el formulario**

4. **Verifica:**
   - Deberías ver un mensaje de éxito en pantalla
   - El email debería llegar a `MAIL_TO_ADDRESS`

---

## 🔧 Comandos Útiles

### Limpiar caché de configuración:
```bash
php artisan config:clear
php artisan cache:clear
```

### Probar el envío de email:
```bash
php artisan tinker
```

Luego ejecuta:
```php
Mail::raw('Prueba de email', function($message) {
    $message->to('contacto@strategalsl.com')
            ->subject('Test Email');
});
```

---

## 📨 El Email que se Envía

El email incluye:
- ✅ Nombre del contacto
- ✅ Email (con reply-to automático)
- ✅ Teléfono
- ✅ Área de interés seleccionada
- ✅ Mensaje completo
- ✅ Diseño HTML profesional con el branding de Strategal

---

## 🐛 Solución de Problemas

### Error: "Connection refused"
- Verifica que `MAIL_HOST` y `MAIL_PORT` sean correctos
- Asegúrate de que el firewall no bloquee el puerto

### Error: "Authentication failed"
- Verifica `MAIL_USERNAME` y `MAIL_PASSWORD`
- Si usas Gmail, asegúrate de usar una contraseña de aplicación

### Email no llega
- Revisa la carpeta de spam
- Verifica `MAIL_TO_ADDRESS`
- Revisa los logs: `storage/logs/laravel.log`

### Ver logs de Laravel:
```bash
tail -f storage/logs/laravel.log
```

---

## 🔐 Seguridad

✅ **CSRF Protection** - Protección contra ataques CSRF
✅ **Validación Server-Side** - Todos los campos se validan
✅ **Rate Limiting** - Puedes agregar limitación de intentos
✅ **Sanitización** - Los datos se limpian antes de enviar

---

## 📝 Personalización

### Cambiar el destinatario del email:

Edita `.env`:
```env
MAIL_TO_ADDRESS=nuevo-email@strategalsl.com
```

### Modificar el template del email:

Edita el archivo:
```
resources/views/emails/contact.blade.php
```

### Cambiar mensajes de validación:

Edita el archivo:
```
app/Http/Requests/ContactRequest.php
```

---

## 🚀 Producción

Para producción, asegúrate de:

1. **Usar un servicio confiable** (Amazon SES, Mailgun, SendGrid)
2. **Configurar SPF y DKIM** para evitar spam
3. **Habilitar Queue** para envíos asíncronos:

```env
QUEUE_CONNECTION=database
```

Luego ejecuta:
```bash
php artisan queue:table
php artisan migrate
php artisan queue:work
```

---

## 📞 Soporte

Si tienes problemas con la configuración:
1. Revisa los logs: `storage/logs/laravel.log`
2. Verifica la configuración: `php artisan config:show mail`
3. Prueba la conexión SMTP con Telnet

---

**¡El formulario está listo para recibir mensajes!** 🎉
