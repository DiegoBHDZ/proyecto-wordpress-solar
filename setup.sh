#!/bin/bash

echo "================================================"
echo "WordPress Blog Setup - Tema Personal"
echo "================================================"
echo ""

# Crear archivo .env si no existe
if [ ! -f ".env" ]; then
    echo "[1/4] Creando archivo .env..."
    cp .env.example .env
else
    echo "[1/4] Archivo .env encontrado"
fi

# Levantar Docker
echo "[2/4] Iniciando contenedores Docker..."
docker-compose up -d

# Esperar MySQL
echo "[3/4] Esperando a que MySQL esté listo (20 segundos)..."
sleep 20

# Importar base de datos
if [ -f "database.sql" ]; then
    echo "[4/4] Importando base de datos..."
    docker-compose exec -T db mysql -u admin -ppassword wordpress < database.sql
    echo ""
    echo "Base de datos importada correctamente"
else
    echo "[4/4] No se encontró database.sql (instalación limpia)"
fi

echo ""
echo "================================================"
echo "Setup completado"
echo "================================================"
echo "URL: http://localhost:8080"
echo ""
echo "Credenciales WordPress:"
echo "  Usuario: admin"
echo "  Contraseña: admin"
echo ""
