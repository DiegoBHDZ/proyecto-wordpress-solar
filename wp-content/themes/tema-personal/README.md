# Tema Personal Solar

Tema WordPress para empresas de energía solar, desarrollado con metodología tradicional de Page Templates.

## Descripción

Este tema utiliza el enfoque tradicional de WordPress con Page Templates PHP, proporcionando control total mediante código. Está basado en el template HTML "Solar Energy" de HTML Codex y ofrece máxima flexibilidad para desarrolladores.

## Características Principales

- Page Templates PHP personalizables
- Compatible con WordPress 5.0+
- Control total del código
- 7 plantillas de página predefinidas
- Sistema de blog completo con sidebar
- Responsive design con Bootstrap 4
- Header y Footer modulares

## Plantillas de Página

### Plantillas Disponibles

1. **Página de Inicio** (`front-page.php`)
   - Se aplica automáticamente a la página principal
   - Incluye todas las secciones: carousel, about, services, gallery, team, FAQs, testimonials, contact

2. **About Us** (`page-about.php`)
   - Sección sobre nosotros con imagen
   - Sección de equipo completa
   - Template Name: "About Us"

3. **Services** (`page-services.php`)
   - Grid de 6 servicios
   - Sección de FAQs integrada
   - Template Name: "Services"

4. **Contact** (`page-contact.php`)
   - Información de contacto (dirección, email, teléfono)
   - Formulario de contacto funcional
   - Mapa de Google Maps
   - Template Name: "Contact"

5. **Projects Gallery** (`page-projects.php`)
   - Galería filtrable por categorías
   - Integración con Lightbox
   - Template Name: "Projects Gallery"

6. **Página Genérica** (`page.php`)
   - Para cualquier página sin plantilla específica
   - Muestra título, imagen destacada y contenido

7. **Post Individual** (`single.php`)
   - Layout con sidebar
   - Metadata (fecha, autor, categorías, tags)
   - Navegación entre posts
   - Widgets: búsqueda, categorías, posts recientes

8. **Página 404** (`404.php`)
   - Diseño de error personalizado
   - Buscador integrado
   - Botón de regreso al inicio

## Cómo Usar

### Activar el Tema

1. Sube la carpeta `tema-personal` a `wp-content/themes/`
2. Ve a **Apariencia → Temas**
3. Activa "Tema Personal Solar"

### Crear Páginas con Plantillas

1. Ve a **Páginas → Añadir nueva**
2. Crea tu página y añade contenido
3. En el panel derecho, busca **"Atributos de página"**
4. En el desplegable **"Plantilla"**, selecciona:
   - About Us
   - Services
   - Contact
   - Projects Gallery
   - O deja "Plantilla por defecto" para usar `page.php`
5. Publica la página

### Configurar la Página de Inicio

1. Crea una página (ej: "Inicio" o "Home")
2. No selecciones ninguna plantilla (usará `front-page.php` automáticamente)
3. Ve a **Ajustes → Lectura**
4. Selecciona "Una página estática"
5. Elige tu página como "Página de inicio"
6. Guarda cambios

### Personalizar Contenido

Las plantillas usan `the_content()`, por lo que puedes:
- Añadir contenido con el editor de bloques
- Usar shortcodes
- Insertar imágenes y multimedia
- Aplicar formato al texto

## Estructura de Archivos

```
tema-personal/
├── style.css               # Metadata del tema
├── functions.php           # Configuración y enqueues
├── header.php              # Cabecera y navegación
├── footer.php              # Pie de página
├── index.php               # Template principal
├── front-page.php          # Página de inicio
├── page.php                # Páginas genéricas
├── page-about.php          # About Us template
├── page-services.php       # Services template
├── page-contact.php        # Contact template
├── page-projects.php       # Projects template
├── single.php              # Posts individuales
├── 404.php                 # Página de error
├── css/
│   ├── style.css          # Estilos principales
│   └── wordpress-custom.css # Estilos WordPress
├── js/
│   └── main.js            # JavaScript principal
├── img/                   # Imágenes del tema
├── lib/                   # Librerías externas
│   ├── owlcarousel/
│   ├── lightbox/
│   ├── isotope/
│   ├── easing/
│   └── waypoints/
└── mail/                  # Scripts de formulario
    ├── jqBootstrapValidation.min.js
    └── contact.js
```

## Tecnologías Utilizadas

- WordPress 5.0+
- PHP 7.4+
- Bootstrap 4.4.1
- jQuery 3.4.1
- Owl Carousel 2.3.4
- Lightbox 2.11.3
- Isotope 3.0.6
- Font Awesome 5.10.0
- Google Fonts (Montserrat, Roboto)

## Funciones Principales

### functions.php

El archivo `functions.php` incluye:

1. **Configuración del tema:**
   - Soporte para títulos
   - Imágenes destacadas
   - HTML5
   - Menús de navegación

2. **Enqueue de assets:**
   - Todos los estilos CSS
   - Todas las bibliotecas JavaScript
   - Scripts del tema

3. **Funciones personalizadas:**
   - Manejador de formulario de contacto
   - Clases de body personalizadas

### Enqueue de Estilos

Los estilos se cargan en este orden:
1. Google Fonts
2. Font Awesome
3. Owl Carousel CSS
4. Lightbox CSS
5. Estilos principales del tema
6. Estilos personalizados de WordPress

### Enqueue de Scripts

Los scripts se cargan en el footer:
1. jQuery (WordPress)
2. Bootstrap Bundle
3. Easing
4. Waypoints
5. Owl Carousel
6. Isotope
7. Lightbox
8. Validación de formulario
9. Manejador de formulario
10. Script principal del tema

## Ventajas del Enfoque Tradicional

**Para Desarrolladores:**
- Control total del código PHP
- Fácil de personalizar
- Debugging más simple
- Compatible con cualquier versión de WordPress 5.0+
- No depende de FSE

**Para Proyectos:**
- Ideal para funcionalidad compleja
- Mejor para integraciones personalizadas
- Más estable y predecible
- Compatible con más plugins

## Personalización

### Añadir Nueva Plantilla

1. Crea un archivo: `page-nombre.php`
2. Añade el comentario de Template Name:

```php
<?php
/**
 * Template Name: Mi Plantilla
 * Description: Descripción de la plantilla
 */

get_header();
?>

<!-- Tu contenido aquí -->

<?php get_footer(); ?>
```

3. La plantilla aparecerá en el selector de plantillas

### Cambiar Colores

Edita `css/style.css` y busca el color primario `#009CFF` para reemplazarlo.

O añade CSS personalizado en `css/wordpress-custom.css`.

### Modificar Header o Footer

Edita directamente:
- `header.php` - Para modificar la navegación y cabecera
- `footer.php` - Para modificar el pie de página

### Añadir Funcionalidad Custom

Añade tus funciones en `functions.php`:

```php
function mi_funcion_custom() {
    // Tu código aquí
}
add_action('wp_footer', 'mi_funcion_custom');
```

## Componentes Incluidos

### Carousel (Owl Carousel)

El carousel se inicializa automáticamente en `front-page.php` con soporte para:
- Múltiples slides
- Transiciones fade
- Controles de navegación
- Autoplay

### Galería (Lightbox)

Las galerías usan Lightbox para:
- Visualización de imágenes en modal
- Navegación entre imágenes
- Responsive

### Formulario de Contacto

El formulario incluye:
- Validación con jQuery
- Envío por Ajax
- Sanitización de datos en PHP
- Mensajes de éxito/error

## Requisitos

- WordPress 5.0 o superior
- PHP 7.4 o superior
- MySQL 5.6 o superior

## Compatibilidad

Compatible con navegadores:
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Opera 76+

## Soporte

Para problemas o preguntas sobre este tema, consulta la documentación principal del proyecto o abre un issue en GitHub.

## Migración desde FSE

Si vienes del tema FSE `solar-theme`:
1. Desactiva `solar-theme`
2. Activa `tema-personal`
3. Crea páginas nuevas y asigna las plantillas
4. Configura la página de inicio en Ajustes → Lectura

Las páginas del FSE no se transfieren automáticamente, pero el diseño es idéntico.

## Créditos

- Template HTML original: HTML Codex
- Desarrollo del tema: Diego
- Bootstrap: Twitter
- Owl Carousel: David Deutsch
- Lightbox: Lokesh Dhakar

## Licencia

GPL v2 o posterior
