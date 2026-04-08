# Strategal - Sitio Web de Servicios Legales

Sitio web completo para Strategal, firma de abogados especializada en servicios legales integrales para empresas.

## 🚀 Características

- ✅ **Diseño Responsive**: Totalmente adaptable a móviles, tablets y desktop
- ✅ **Tailwind CSS v4.1**: Utilizando las últimas características
- ✅ **Componentes Reutilizables**: Arquitectura basada en componentes Blade
- ✅ **Dark Mode**: Soporte para modo oscuro
- ✅ **SEO Optimizado**: Estructura semántica y meta tags
- ✅ **Rendimiento**: Optimizado con Vite para carga rápida
- ✅ **Accesibilidad**: Cumple con estándares de accesibilidad web

## 📁 Estructura del Proyecto

```
strategal/
├── resources/
│   ├── views/
│   │   ├── components/          # Componentes reutilizables
│   │   │   ├── button.blade.php
│   │   │   ├── section-heading.blade.php
│   │   │   ├── practice-area-card.blade.php
│   │   │   └── feature-card.blade.php
│   │   ├── layouts/             # Layouts principales
│   │   │   └── app.blade.php    # Layout principal con nav y footer
│   │   └── pages/               # Páginas del sitio
│   │       ├── home.blade.php
│   │       ├── practice-areas.blade.php
│   │       ├── about.blade.php
│   │       └── contact.blade.php
│   ├── css/
│   │   └── app.css              # Estilos de Tailwind
│   └── js/
│       └── app.js
├── routes/
│   └── web.php                  # Rutas de la aplicación
└── public/                      # Assets compilados
```

## 🎨 Páginas Implementadas

### 1. Inicio (`/`)
- Hero section con CTA
- Sección "Sobre Nosotros"
- Áreas de práctica (preview)
- Valor agregado
- Estadísticas
- Call to action final

### 2. Áreas de Práctica (`/areas-de-practica`)
- Derecho Administrativo
- Derecho Corporativo
- Derecho Laboral
- Derecho Fiscal
- Propiedad Intelectual
- Derecho Familiar, Civil y Mercantil

Cada área incluye:
- Descripción detallada
- Lista de servicios
- Imagen ilustrativa
- Navegación con anchors (#administrativo, #corporativo, etc.)

### 3. Sobre Nosotros (`/sobre-nosotros`)
- Historia de la firma
- Misión y visión
- Valores corporativos
- Por qué elegirnos
- Equipo de abogados

### 4. Contacto (`/contacto`)
- Formulario de contacto completo
- Información de contacto
- Redes sociales
- Horarios de atención
- Mapa de Google Maps

## 🧩 Componentes Blade

### `<x-button>`
Botón reutilizable con variantes:
```blade
<x-button href="/ruta" variant="primary">Texto</x-button>
<x-button variant="secondary">Texto</x-button>
<x-button variant="outline">Texto</x-button>
```

### `<x-section-heading>`
Encabezado de sección:
```blade
<x-section-heading
    subtitle="Subtítulo"
    title="Título Principal"
    :centered="true">
    Descripción opcional
</x-section-heading>
```

### `<x-practice-area-card>`
Tarjeta de área de práctica:
```blade
<x-practice-area-card
    icon="url-del-icono"
    title="Título"
    description="Descripción"
    href="#anchor" />
```

### `<x-feature-card>`
Tarjeta de características:
```blade
<x-feature-card
    title="Título"
    description="Descripción">
    <x-slot name="icon">
        <!-- SVG icon -->
    </x-slot>
</x-feature-card>
```

## 🎨 Paleta de Colores

```css
/* Principal */
--color-primary: #002B5C (Azul marino)
--color-primary-dark: #001a3a

/* Texto */
--color-text: #1b1b18
--color-text-light: #706f6c

/* Backgrounds */
--color-bg-light: #FDFDFC
--color-bg-dark: #0a0a0a
```

## 🚦 Rutas

| Ruta | Nombre | Vista | Descripción |
|------|--------|-------|-------------|
| `/` | `home` | `pages.home` | Página de inicio |
| `/areas-de-practica` | `practice-areas` | `pages.practice-areas` | Áreas de práctica |
| `/sobre-nosotros` | `about` | `pages.about` | Sobre nosotros |
| `/contacto` | `contact` | `pages.contact` | Contacto |

## 📱 Responsive Design

El sitio está optimizado para:
- **Mobile**: < 640px
- **Tablet**: 640px - 1024px
- **Desktop**: > 1024px

Breakpoints de Tailwind:
- `sm`: 640px
- `md`: 768px
- `lg`: 1024px
- `xl`: 1280px
- `2xl`: 1536px

## 🔧 Instalación y Uso

### Iniciar el servidor de desarrollo:
```bash
pnpm run dev
```

### Compilar para producción:
```bash
pnpm run build
```

### Servidor Laravel:
```bash
php artisan serve
```

## 🌐 Información de Contacto

**Strategal Servicios Legales**
- 📍 Puerto de Todos los Santos 162, Monumental, Guadalajara, Jalisco
- 📞 33 24 04 35 89
- 📧 contacto@strategalsl.com
- 🌐 www.strategalsl.com

### Redes Sociales
- YouTube: @StrategaServicioslegales
- Instagram: @Strategal_abogados
- Facebook: Strategalsl
- TikTok: @Strategal_abogados

## 🛠️ Tecnologías Utilizadas

- **Laravel**: Framework PHP
- **Tailwind CSS v4.1**: Framework CSS
- **Vite**: Build tool
- **Blade**: Motor de templates
- **pnpm**: Gestor de paquetes

## 📝 Mejores Prácticas Implementadas

1. **DRY (Don't Repeat Yourself)**
   - Componentes reutilizables para elementos comunes
   - Layout compartido entre todas las páginas
   - Estilos centralizados en Tailwind

2. **Componentización**
   - Componentes Blade para botones, tarjetas, encabezados
   - Separación clara de responsabilidades
   - Fácil mantenimiento y actualización

3. **Responsividad**
   - Mobile-first approach
   - Breakpoints bien definidos
   - Testing en múltiples dispositivos

4. **Accesibilidad**
   - Etiquetas semánticas HTML5
   - Contraste de colores adecuado
   - Navegación por teclado

5. **Performance**
   - Lazy loading de imágenes
   - CSS optimizado con Tailwind
   - Assets compilados con Vite

## 🔄 Próximas Mejoras Sugeridas

1. **Funcionalidad del Formulario**
   - Implementar backend para procesamiento de formularios
   - Validación de campos
   - Envío de emails

2. **Blog/Noticias**
   - Sección de artículos legales
   - Sistema de categorías

3. **Testimonios**
   - Sección de testimonios de clientes
   - Casos de éxito

4. **Multi-idioma**
   - Soporte para inglés

5. **SEO Avanzado**
   - Schema markup
   - Open Graph tags
   - Sitemap XML

## 📄 Licencia

Todos los derechos reservados © 2025 Strategal Servicios Legales
