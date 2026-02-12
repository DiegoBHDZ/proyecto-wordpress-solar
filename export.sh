#!/bin/bash

echo "Exportando base de datos..."

docker-compose exec -T db mysqldump -u admin -ppassword wordpress > database.sql

if [ $? -eq 0 ]; then
    echo "Base de datos exportada: database.sql"
    echo "Tamaño: $(du -h database.sql | cut -f1)"
    echo ""
    echo "Para subir a GitHub:"
    echo "  git add database.sql"
    echo "  git commit -m 'Update database backup'"
else
    echo "Error al exportar la base de datos"
    exit 1
fi
