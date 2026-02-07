# WordPress Blog - Tema Solar Energy

Proyecto de WordPress con tema personalizado para empresas de energía solar y renovable. Incluye configuración Docker para desarrollo local y contenido demo para pruebas.

## Descripción del Proyecto

Este proyecto contiene:
- **Tema Custom**: `tema-solar` - Tema moderno y responsive para empresas de energía solar
- **Setup Docker**: Ambiente de desarrollo completo con WordPress y MySQL
- **Contenido Demo**: Base de datos de ejemplo con páginas y configuración de prueba

### Características del Tema Solar Energy

-  Diseño responsive (mobile-first)
-  Secciones modulares reutilizables
-  Carrusel de hero con animaciones
-  Galería de proyectos con Lightbox
-  Formulario de contacto funcional
-  Testimonios de clientes
-  Sección de equipo
-  FAQs acordeón
-  Integración con Bootstrap 4.4.1
-  Font Awesome 5.10.0
-  Owl Carousel 2.3.4
-  Optimizado para SEO

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalado:

- [Docker](https://docs.docker.com/get-docker/) (v20.10 o superior)
- [Docker Compose](https://docs.docker.com/compose/install/) (v1.29 o superior)
- Git

## Instalación

### 1. Clonar el repositorio

```bash
git clone <url-del-repositorio>
cd mi_blog_prueba
```

### 2. Configurar variables de entorno

Copia el archivo de ejemplo y edita las credenciales:

```bash
cp .env.example .env
```

Edita el archivo `.env` con tus credenciales preferidas:

```env
DB_NAME=mi_blog_db
DB_USER=usuario_dev
DB_PASSWORD=tu_password_seguro
DB_HOST=db
DB_ROOT_PASSWORD=tu_root_password
WORDPRESS_PORT=8080
```

>  **Importante**: El archivo `.env` contiene credenciales sensibles y está excluido del repositorio por seguridad.

### 3. Levantar los contenedores Docker

```bash
docker-compose up -d
```

Esto iniciará dos contenedores:
- **WordPress** en `http://localhost:8080`
- **MySQL 5.7** (base de datos)

### 4. Acceder a WordPress

Abre tu navegador en: `http://localhost:8080`

#### Primera vez (instalación limpia):
1. Selecciona el idioma
2. Completa el formulario de instalación
3. Crea tu usuario administrador

#### Con contenido demo:
Continúa al paso 5 para importar el contenido de prueba.

### 5. Importar contenido demo (Opcional)

El proyecto incluye `demo-content.xml` con páginas y configuración de ejemplo.

1. Inicia sesión en WordPress admin: `http://localhost:8080/wp-admin`
2. Ve a **Herramientas** → **Importar**
3. Instala el importador de WordPress si no está instalado
4. Haz clic en **Ejecutar importador**
5. Selecciona el archivo `demo-content.xml` de la raíz del proyecto
6. Asigna los contenidos a un usuario existente o crea uno nuevo
7. Marca la casilla **"Descargar e importar archivos adjuntos"**
8. Haz clic en **Enviar**

### 6. Activar el tema Solar Energy

1. Ve a **Apariencia** → **Temas**
2. Activa el tema **"Tema Solar Energy"**
3. Ve a **Páginas** y busca la página "Home" o "Inicio"
4. Asigna el template **"Home Solar"** a la página de inicio
5. Ve a **Ajustes** → **Lectura**
6. Selecciona "Una página estática" como página de inicio
7. Elige la página "Home" o "Inicio"
8. Guarda los cambios

¡Listo! Tu sitio debería estar funcionando con el tema Solar Energy.

## Estructura del Proyecto

```
mi_blog_prueba/
├── .env                      # Credenciales (NO en Git)
├── .env.example              # Plantilla de credenciales
├── .gitignore                # Archivos excluidos de Git
├── docker-compose.yml        # Configuración Docker
├── demo-content.xml          # Contenido de prueba
├── README.md                 # Este archivo
│
└── wp-content/               # Contenido WordPress
    ├── themes/
    │   └── tema-solar/       #  TEMA CUSTOM
    │       ├── assets/       # CSS, JS, librerías
    │       ├── template-parts/
    │       │   └── sections/ # Secciones modulares
    │       ├── page-templates/
    │       ├── patterns/     # Patrones de bloques
    │       ├── functions.php
    │       ├── header.php
    │       ├── footer.php
    │       ├── index.php
    │       ├── style.css
    │       ├── theme.json
    │       └── readme.txt
    │
    ├── plugins/              # (Vacío - instalar desde WP)
    └── uploads/              # (Excluido de Git)
```

## Desarrollo Local

### Comandos útiles de Docker

```bash
# Iniciar contenedores
docker-compose up -d

# Ver logs
docker-compose logs -f

# Detener contenedores
docker-compose down

# Detener y eliminar volúmenes ( borra la BD)
docker-compose down -v

# Reiniciar WordPress
docker-compose restart wordpress

# Acceder a contenedor de WordPress
docker-compose exec wordpress bash

# Acceder a MySQL
docker-compose exec db mysql -u${DB_USER} -p${DB_PASSWORD} ${DB_NAME}
```

### Editar el tema

Los archivos del tema están en:
```
wp-content/themes/tema-solar/
```

Los cambios se reflejan automáticamente gracias al volumen montado en Docker.

### Estructura del tema

- **`functions.php`**: Configuración del tema, registros, hooks
- **`header.php`**: Cabecera HTML y navegación
- **`footer.php`**: Pie de página
- **`index.php`**: Template principal
- **`page-templates/`**: Templates de página custom
- **`template-parts/sections/`**: Secciones modulares reutilizables
  - `hero-carousel.php`
  - `services.php`
  - `about.php`
  - `gallery.php`
  - `team.php`
  - `testimonials.php`
  - `faqs.php`
  - `contact.php`
- **`assets/`**: CSS, JS, imágenes, librerías
- **`patterns/`**: Patrones de bloques Gutenberg
- **`theme.json`**: Configuración de tema (colores, fuentes, etc.)

## Plugins Recomendados

Para funcionalidad completa, instala estos plugins desde WordPress:

- **Elementor** (opcional): Constructor de páginas visual
- **Akismet**: Anti-spam para comentarios
- **Contact Form 7**: Formularios avanzados (alternativa)

## Notas Importantes

### ⚠️ Archivos NO incluidos en el repositorio

Por buenas prácticas y seguridad, estos archivos están excluidos:

- `.env` - Credenciales sensibles
- `wp-content/uploads/` - Archivos subidos por usuarios
- `wp-content/plugins/` - Plugins de terceros (instalar vía WP)
- Temas de terceros (solo se incluye `tema-solar`)

### 🔒 Seguridad

- Nunca subas archivos `.env` a Git
- Cambia las credenciales por defecto en producción
- Usa contraseñas seguras para la base de datos
- Mantén WordPress y plugins actualizados

### 🎨 Personalización del tema

El tema utiliza variables CSS definidas en `theme.json`:

```json
{
  "colors": {
    "primary": "#FEA116",
    "dark": "#0E2E50",
    "light": "#F1F8FF"
  }
}
```

Puedes personalizar colores, fuentes y espaciados editando este archivo.

## Solución de Problemas

### El sitio no carga
```bash
# Verifica que los contenedores estén corriendo
docker-compose ps

# Revisa los logs
docker-compose logs wordpress
```

### Error de conexión a base de datos
- Verifica que las credenciales en `.env` sean correctas
- Asegúrate de que el contenedor `db` esté corriendo
- Espera unos segundos a que MySQL termine de inicializar

### Los cambios no se reflejan
- Limpia la caché del navegador (Ctrl+Shift+R)
- Verifica que el volumen esté montado correctamente
- Reinicia el contenedor: `docker-compose restart wordpress`

### Permiso denegado en archivos
```bash
# Desde la raíz del proyecto
sudo chown -R $USER:$USER wp-content/
```

## Feedback y Revisión

### Enfoque de revisión: Tema `tema-solar`

Este proyecto fue creado para revisión del tema personalizado `tema-solar`. Al revisar, por favor enfócate en:

 **Estructura del código PHP**
- Uso correcto de funciones de WordPress
- Seguimiento de estándares de codificación
- Organización modular del código

**Mejores prácticas de WordPress**
- Enqueueing de scripts y estilos
- Uso de hooks y filters
- Sanitización y validación de datos
- Seguridad y escape de salida

 **Responsive Design**
- Compatibilidad móvil
- Uso apropiado de Bootstrap

**Rendimiento**
- Optimización de assets
- Carga condicional de recursos

 **Compatibilidad**
- Estándares de temas de WordPress
- Compatibilidad con plugins comunes



---


