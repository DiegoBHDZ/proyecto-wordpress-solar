# Solar Theme - Full Site Editing

Tema WordPress moderno para empresas de energía solar, desarrollado con Full Site Editing (FSE).

## Descripción

Este tema utiliza la arquitectura moderna de WordPress con Full Site Editing, permitiendo edición visual completa del sitio sin necesidad de código. Está basado en el template HTML "Solar Energy" de HTML Codex.

## Características Principales

- Full Site Editing (FSE) - Requiere WordPress 6.0+
- Configuración centralizada en theme.json
- Templates HTML editables visualmente
- 8 Block Patterns predefinidos
- Template Parts reutilizables (Header/Footer)
- Edición de estilos globales desde el editor
- Responsive design con Bootstrap 4

## Archivos Principales

### Configuración
- `theme.json` - Configuración de colores, tipografías y estilos
- `style.css` - Metadata del tema
- `functions.php` - Funciones PHP y enqueue de assets

### Templates
- `templates/home.html` - Página de inicio
- `templates/page.html` - Páginas estándar
- `templates/single.html` - Posts individuales
- `templates/404.html` - Página de error
- `templates/page-full-width.html` - Página sin sidebar

### Template Parts
- `parts/header.html` - Cabecera del sitio
- `parts/footer.html` - Pie de página

### Block Patterns
- `patterns/hero-carousel.php` - Carousel principal
- `patterns/about-section.php` - Sección sobre nosotros
- `patterns/services-grid.php` - Grid de servicios
- `patterns/project-gallery.php` - Galería de proyectos
- `patterns/team-section.php` - Equipo
- `patterns/faqs-section.php` - Preguntas frecuentes
- `patterns/testimonials.php` - Testimonios
- `patterns/contact-form.php` - Formulario de contacto

## Cómo Usar

### Activar el Tema

1. Sube la carpeta `solar-theme` a `wp-content/themes/`
2. Ve a **Apariencia → Temas**
3. Activa "Solar Energy"

### Editar con el Editor de Sitio

1. Ve a **Apariencia → Editor**
2. Explora las opciones:
   - **Templates**: Edita las plantillas de página
   - **Template Parts**: Edita header y footer
   - **Estilos**: Personaliza colores y tipografías

### Usar Block Patterns

1. En el editor de páginas, haz clic en el botón "+"
2. Ve a la pestaña **"Patterns"**
3. Busca la categoría **"Solar Theme"**
4. Inserta los patrones que necesites

### Personalizar Colores y Tipografías

1. Ve a **Apariencia → Editor**
2. Haz clic en el icono de estilos (paleta de colores)
3. Modifica:
   - Paleta de colores
   - Tipografías
   - Espaciados
4. Los cambios se aplican a todo el sitio

## Estructura de Archivos

```
solar-theme/
├── theme.json              # Configuración FSE
├── style.css               # Metadata del tema
├── functions.php           # Funciones y enqueues
├── front-page.php          # Fallback para homepage
├── templates/              # Plantillas HTML
│   ├── home.html
│   ├── index.html
│   ├── page.html
│   ├── single.html
│   ├── 404.html
│   └── page-full-width.html
├── parts/                  # Partes del sitio
│   ├── header.html
│   └── footer.html
├── patterns/               # Patrones de bloques
│   ├── hero-carousel.php
│   ├── about-section.php
│   ├── services-grid.php
│   ├── project-gallery.php
│   ├── team-section.php
│   ├── faqs-section.php
│   ├── testimonials.php
│   └── contact-form.php
├── assets/                 # CSS adicionales
│   └── css/
├── css/                    # Estilos del template
│   └── style.css
├── js/                     # JavaScript
│   └── main.js
├── img/                    # Imágenes del tema
├── lib/                    # Librerías (Owl, Lightbox, etc.)
└── mail/                   # Scripts de formulario
```

## Tecnologías Utilizadas

- WordPress 6.0+ (Full Site Editing)
- theme.json (configuración centralizada)
- Bootstrap 4.4.1
- Owl Carousel 2.3.4
- Lightbox 2.11.3
- Font Awesome 5.10.0
- Google Fonts (Montserrat, Roboto)

## Ventajas de FSE

**Para Editores:**
- Edición visual completa sin tocar código
- Preview en tiempo real
- Patrones prediseñados reutilizables
- Estilos globales desde la interfaz

**Para Desarrolladores:**
- Código más limpio y mantenible
- Configuración centralizada en theme.json
- No necesita Page Builders externos
- Compatible con el futuro de WordPress

## Limitaciones Conocidas

### Carousel en Templates FSE

El carousel puede no renderizarse correctamente en templates HTML. Soluciones alternativas:

1. Usar el archivo `front-page.php` para la página de inicio
2. Usar el shortcode `[solar_hero_carousel]` en páginas
3. Considerar el tema hermano "tema-personal" para componentes JavaScript complejos

## Personalización

### Cambiar Colores

Edita `theme.json`:

```json
"settings": {
  "color": {
    "palette": [
      {
        "slug": "primary",
        "color": "#009CFF",
        "name": "Primary"
      }
    ]
  }
}
```

### Cambiar Tipografías

Edita `theme.json`:

```json
"settings": {
  "typography": {
    "fontFamilies": [
      {
        "slug": "montserrat",
        "fontFamily": "Montserrat, sans-serif",
        "name": "Montserrat"
      }
    ]
  }
}
```

### Crear Nuevos Templates

1. Crea un archivo en `templates/`: `mi-template.html`
2. Añade el contenido usando bloques de WordPress
3. El template aparecerá automáticamente en el editor

## Requisitos

- WordPress 6.0 o superior (requerido para FSE)
- PHP 7.4 o superior
- MySQL 5.6 o superior

## Soporte

Para problemas o preguntas sobre este tema, consulta la documentación principal del proyecto o abre un issue en GitHub.

## Créditos

- Template HTML original: HTML Codex
- Desarrollo del tema: Diego
- WordPress FSE: WordPress.org

## Licencia

GPL v2 o posterior
