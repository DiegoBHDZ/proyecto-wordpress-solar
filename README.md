# WordPress Blog - Tema Personal

WordPress blog con tema personalizado desarrollado desde cero.

## Características

- Tema personalizado "Tema Personal" con diseño profesional
- Sistema de blog completo con posts, categorías y tags
- Diseño responsive
- Widgets personalizados
- Docker Compose para desarrollo local

## Requisitos

- Docker
- Docker Compose
- Git

## Instalación Rápida

```bash
# Clonar repositorio
git clone <tu-repositorio-url>
cd mi_blog_prueba

# Ejecutar setup automático
./setup.sh
```

El script automáticamente:
1. Crea el archivo `.env` de configuración
2. Levanta los contenedores de Docker
3. Importa la base de datos con contenido demo
4. Configura WordPress

**Tiempo estimado: 2 minutos**

## Acceso

- **URL:** http://localhost:8080
- **Usuario:** admin
- **Contraseña:** admin

## Estructura del Proyecto

```
.
├── docker-compose.yml       # Configuración Docker
├── setup.sh                 # Script de instalación automática
├── database.sql             # Backup de base de datos
├── wp-content/
│   └── themes/
│       ├── tema-personal/   # Tema personalizado principal
│       └── solar-theme/     # Tema alternativo
└── .env                     # Variables de entorno (local)
```

## Tema Personal

El tema incluye:

- Homepage personalizada
- Template de blog con grid de 3 columnas
- Single post con sidebar
- Sistema de widgets
- Menús personalizables
- Soporte para imágenes destacadas
- Diseño responsive

**Documentación completa:** `wp-content/themes/tema-personal/README.md`

## Comandos Útiles

### Ver logs
```bash
docker-compose logs -f
```

### Detener contenedores
```bash
docker-compose down
```

### Reiniciar
```bash
docker-compose restart
```

### Exportar base de datos (después de hacer cambios)
```bash
./export.sh
```

## Desarrollo

### Modificar el tema
Los archivos del tema están en:
```
wp-content/themes/tema-personal/
```

Los cambios se reflejan automáticamente (refresca el navegador).

### Actualizar base de datos en GitHub

Después de agregar contenido al blog:

```bash
./export.sh
git add database.sql
git commit -m "Update blog content"
git push
```

## Troubleshooting

### Puerto 8080 en uso
Edita `docker-compose.yml` y cambia el puerto:
```yaml
ports:
  - "8081:80"  # Cambia 8080 por otro puerto
```

### MySQL no arranca
```bash
docker-compose down -v  # Elimina volúmenes
./setup.sh              # Vuelve a ejecutar setup
```

### Permisos de archivos
```bash
sudo chown -R $USER:$USER wp-content/
```

## Tecnologías

- WordPress 6.x
- MySQL 5.7
- Docker / Docker Compose
- PHP 8.x
- HTML5 / CSS3 / JavaScript

## Licencia

GPL v2 or later

## Autor

Diego - [Tu GitHub/Portfolio]
