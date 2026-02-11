# WordPress Solar Energy Project

Proyecto completo de WordPress con dos implementaciones del mismo diseño: una usando Full Site Editing (FSE) y otra usando metodología tradicional de Page Templates.

## Descripción del Proyecto

Este proyecto contiene una instalación completa de WordPress en Docker con dos temas personalizados basados en el template HTML "Solar Energy":

1. **solar-theme**: Implementación moderna usando Full Site Editing (FSE)
2. **tema-personal**: Implementación tradicional usando Page Templates PHP

Ambos temas reproducen fielmente el diseño original del template HTML, pero usando diferentes enfoques de desarrollo de WordPress.

## Requisitos del Sistema

- Docker 20.10 o superior
- Docker Compose 1.29 o superior
- Git
- 2GB de RAM disponible
- 5GB de espacio en disco

## Estructura del Proyecto

```
mi_blog_prueba/
├── docker-compose.yml          # Configuración de Docker
├── README.md                   # Este archivo
├── wp-admin/                   # WordPress Admin
├── wp-content/
│   ├── themes/
│   │   ├── solar-theme/       # Tema FSE (Full Site Editing)
│   │   └── tema-personal/     # Tema tradicional (Page Templates)
│   ├── plugins/
│   └── uploads/
├── wp-includes/
└── [otros archivos de WordPress]
```

## Instalación y Configuración

### 1. Clonar el Repositorio

```bash
git clone <url-del-repositorio>
cd mi_blog_prueba
```

### 2. Configurar Docker

Asegúrate de que Docker y Docker Compose estén instalados:

```bash
docker --version
docker-compose --version
```

### 3. Crear archivo docker-compose.yml

Si no existe, crea el archivo `docker-compose.yml` en la raíz del proyecto:

```yaml
version: '3.8'

services:
  wordpress:
    image: wordpress:latest
    container_name: mi_blog_prueba_wordpress
    ports:
      - "8080:80"
    environment:
      WORDPRESS_DB_HOST: db:3306
      WORDPRESS_DB_USER: wordpress
      WORDPRESS_DB_PASSWORD: wordpress_password
      WORDPRESS_DB_NAME: wordpress_db
    volumes:
      - ./:/var/www/html
    depends_on:
      - db
    networks:
      - wordpress_network

  db:
    image: mysql:5.7
    container_name: mi_blog_prueba_db
    environment:
      MYSQL_DATABASE: wordpress_db
      MYSQL_USER: wordpress
      MYSQL_PASSWORD: wordpress_password
      MYSQL_ROOT_PASSWORD: root_password
    volumes:
      - db_data:/var/lib/mysql
    networks:
      - wordpress_network

volumes:
  db_data:

networks:
  wordpress_network:
```

### 4. Iniciar los Contenedores

```bash
docker-compose up -d
```

### 5. Acceder a WordPress

- URL del sitio: http://localhost:8080
- URL del admin: http://localhost:8080/wp-admin

### 6. Configuración Inicial de WordPress

Si es la primera instalación:

1. Completa el asistente de instalación
2. Crea un usuario administrador
3. Configura el título del sitio

### 7. Activar un Tema

Ve a **Apariencia → Temas** y activa el tema que desees probar:
- **Solar Energy** (FSE)
- **Tema Personal Solar** (Tradicional)

## Temas Incluidos

### solar-theme (Full Site Editing)

**Características:**
- Desarrollado con Full Site Editing (FSE)
- Requiere WordPress 6.0 o superior
- Usa theme.json para configuración centralizada
- Templates en formato HTML
- Block Patterns predefinidos
- Edición visual completa del sitio

**Archivos principales:**
- `theme.json` - Configuración de colores, tipografías, etc.
- `templates/*.html` - Templates del sitio
- `parts/*.html` - Header y Footer
- `patterns/*.php` - Patrones de bloques reutilizables

**Cuándo usar:**
- Si prefieres edición visual sin código
- Para proyectos modernos de WordPress
- Si quieres aprovechar las últimas características de WordPress

### tema-personal (Page Templates Tradicional)

**Características:**
- Metodología tradicional de WordPress
- Page Templates PHP personalizables
- Compatible con WordPress 5.0+
- Control total mediante código PHP
- 7 plantillas de página diferentes
- Sistema de blog completo con sidebar

**Plantillas incluidas:**
- `front-page.php` - Página de inicio automática
- `page-about.php` - Template About Us
- `page-services.php` - Template Services
- `page-contact.php` - Template Contact
- `page-projects.php` - Template Projects Gallery
- `single.php` - Posts individuales con sidebar
- `404.php` - Página de error personalizada

**Cuándo usar:**
- Si prefieres control total mediante código
- Para proyectos que requieren personalización avanzada
- Si trabajas con desarrolladores PHP tradicionales
- Para sitios que necesitan funcionalidad custom compleja

## Comparación de Temas

| Aspecto | solar-theme (FSE) | tema-personal (Tradicional) |
|---------|-------------------|---------------------------|
| **Enfoque** | Visual, sin código | Código PHP |
| **WordPress** | 6.0+ requerido | 5.0+ compatible |
| **Edición** | Editor de sitio completo | Editor de contenido únicamente |
| **Templates** | HTML con bloques | PHP tradicional |
| **Flexibilidad** | Alta para editores | Alta para desarrolladores |
| **Personalización** | theme.json + bloques | functions.php + PHP |
| **Curva de aprendizaje** | Empinada (FSE) | Moderada (PHP/WP) |
| **Mantenimiento** | Requiere conocer FSE | Requiere conocer PHP |

## Tecnologías Utilizadas

### Backend
- **WordPress** 6.4+
- **PHP** 7.4+
- **MySQL** 5.7

### Frontend
- **Bootstrap** 4.4.1
- **jQuery** 3.4.1
- **Font Awesome** 5.10.0
- **Owl Carousel** 2.3.4
- **Lightbox** 2.11.3
- **Isotope** 3.0.6

### Infraestructura
- **Docker** para contenedorización
- **Docker Compose** para orquestación

## Comandos Útiles de Docker

### Iniciar contenedores
```bash
docker-compose up -d
```

### Detener contenedores
```bash
docker-compose down
```

### Ver logs
```bash
docker-compose logs -f wordpress
```

### Reiniciar contenedores
```bash
docker-compose restart
```

### Acceder al contenedor de WordPress
```bash
docker exec -it mi_blog_prueba_wordpress bash
```

### Acceder al contenedor de MySQL
```bash
docker exec -it mi_blog_prueba_db mysql -u wordpress -p
```

### Hacer backup de la base de datos
```bash
docker exec mi_blog_prueba_db mysqldump -u wordpress -pwordpress_password wordpress_db > backup.sql
```

### Restaurar base de datos
```bash
docker exec -i mi_blog_prueba_db mysql -u wordpress -pwordpress_password wordpress_db < backup.sql
```

## Configuración de Páginas

### Para tema-personal (Tradicional)

1. **Crear Página de Inicio:**
   - Ve a Páginas → Añadir nueva
   - Título: "Home" o "Inicio"
   - No selecciones plantilla (usará front-page.php automáticamente)
   - Publica

2. **Crear Página About:**
   - Ve a Páginas → Añadir nueva
   - Título: "About Us"
   - Atributos de página → Plantilla → "About Us"
   - Añade tu contenido
   - Publica

3. **Crear Página Services:**
   - Ve a Páginas → Añadir nueva
   - Título: "Services"
   - Atributos de página → Plantilla → "Services"
   - Añade tu contenido
   - Publica

4. **Crear Página Contact:**
   - Ve a Páginas → Añadir nueva
   - Título: "Contact"
   - Atributos de página → Plantilla → "Contact"
   - Añade tu contenido
   - Publica

5. **Crear Página Projects:**
   - Ve a Páginas → Añadir nueva
   - Título: "Projects"
   - Atributos de página → Plantilla → "Projects Gallery"
   - Añade tu contenido
   - Publica

6. **Configurar Página de Inicio:**
   - Ve a Ajustes → Lectura
   - Selecciona "Una página estática"
   - Página de inicio: Selecciona "Home"
   - Página de entradas: Crea y selecciona una página "Blog"
   - Guarda cambios

### Para solar-theme (FSE)

1. **Editar con Editor de Sitio:**
   - Ve a Apariencia → Editor
   - Selecciona el template "Home"
   - Usa los Block Patterns disponibles en la categoría "Solar Theme"
   - Guarda cambios

2. **Personalizar Estilos:**
   - Ve a Apariencia → Editor → Estilos
   - Modifica colores, tipografías y espaciados
   - Los cambios se aplican a todo el sitio

## Personalización

### Cambiar Colores

**tema-personal:**
Edita `wp-content/themes/tema-personal/css/style.css` y busca el color primario `#009CFF`

**solar-theme:**
Edita `wp-content/themes/solar-theme/theme.json` en la sección `settings.color.palette`

### Cambiar Tipografías

**tema-personal:**
Edita `wp-content/themes/tema-personal/functions.php` en la función `tema_personal_enqueue_scripts()`

**solar-theme:**
Edita `wp-content/themes/solar-theme/theme.json` en la sección `settings.typography.fontFamilies`

### Añadir Páginas Personalizadas

**tema-personal:**
1. Crea un nuevo archivo en el tema: `page-nombre.php`
2. Añade el comentario de Template Name:
```php
<?php
/**
 * Template Name: Nombre de la Plantilla
 */
get_header();
// Tu código aquí
get_footer();
?>
```

**solar-theme:**
1. Crea un nuevo archivo en `templates/`: `nombre.html`
2. Usa bloques de WordPress para el contenido
3. La plantilla aparecerá automáticamente en el editor

## Solución de Problemas

### El sitio no carga

1. Verifica que los contenedores estén corriendo:
```bash
docker-compose ps
```

2. Revisa los logs:
```bash
docker-compose logs wordpress
```

### Error de conexión a base de datos

1. Verifica que el contenedor de MySQL esté corriendo
2. Revisa las credenciales en `docker-compose.yml`
3. Intenta reiniciar los contenedores:
```bash
docker-compose down
docker-compose up -d
```

### Los temas no aparecen

1. Verifica que las carpetas de temas tengan los permisos correctos:
```bash
sudo chmod -R 755 wp-content/themes/
```

2. Verifica que cada tema tenga un archivo `style.css` con el header correcto

### El carousel no funciona en solar-theme

Este es un problema conocido con FSE. Soluciones:

1. Usa el `front-page.php` en lugar del template FSE
2. Usa el shortcode `[solar_hero_carousel]` en una página
3. Considera usar tema-personal para mejor compatibilidad con componentes JavaScript complejos

### Problemas de permisos

```bash
sudo chown -R www-data:www-data wp-content/
sudo chmod -R 755 wp-content/
```

## Seguridad

### Recomendaciones para Producción

1. **Cambiar credenciales de base de datos** en `docker-compose.yml`
2. **Configurar HTTPS** con certificado SSL
3. **Actualizar WordPress** y plugins regularmente
4. **Usar contraseñas fuertes** para usuarios admin
5. **Configurar backups automáticos** de base de datos y archivos
6. **Instalar plugin de seguridad** (ej: Wordfence)
7. **Limitar intentos de login**
8. **Ocultar versión de WordPress**

### Archivos a excluir de Git

Añade a `.gitignore`:
```
wp-config.php
.env
*.log
wp-content/uploads/
wp-content/cache/
wp-content/backup/
```

## Contribuir

### Para contribuir a este proyecto:

1. Fork el repositorio
2. Crea una rama para tu feature:
```bash
git checkout -b feature/nueva-funcionalidad
```

3. Realiza tus cambios y commit:
```bash
git commit -m "Añade nueva funcionalidad"
```

4. Push a tu fork:
```bash
git push origin feature/nueva-funcionalidad
```

5. Abre un Pull Request

### Guía de Estilo

- Usa indentación de 4 espacios
- Comenta el código complejo
- Sigue los estándares de codificación de WordPress
- Prueba tus cambios en ambos temas

## Testing

### Checklist de Pruebas

- Tema se activa correctamente
- Página de inicio se muestra correctamente
- Todas las plantillas funcionan
- Formulario de contacto envía emails
- Carousel funciona correctamente
- Galerías con lightbox funcionan
- Responsive en móvil, tablet y desktop
- Compatible con navegadores principales
- No hay errores en consola JavaScript
- No hay errores PHP en debug mode

### Navegadores Soportados

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Opera 76+

## Estructura de Archivos de los Temas

### tema-personal (Tradicional)

```
tema-personal/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page.php
├── page-about.php
├── page-services.php
├── page-contact.php
├── page-projects.php
├── single.php
├── 404.php
├── css/
│   ├── style.css
│   └── wordpress-custom.css
├── js/
│   └── main.js
├── img/
├── lib/
└── mail/
```

### solar-theme (FSE)

```
solar-theme/
├── theme.json
├── style.css
├── functions.php
├── front-page.php
├── templates/
│   ├── index.html
│   ├── home.html
│   ├── page.html
│   ├── single.html
│   ├── 404.html
│   └── page-full-width.html
├── parts/
│   ├── header.html
│   └── footer.html
├── patterns/
│   ├── hero-carousel.php
│   ├── about-section.php
│   ├── services-grid.php
│   ├── project-gallery.php
│   ├── team-section.php
│   ├── faqs-section.php
│   ├── testimonials.php
│   └── contact-form.php
├── assets/
│   └── css/
├── css/
├── js/
├── img/
└── lib/
```


