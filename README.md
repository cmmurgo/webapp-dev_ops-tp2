# Proyecto WebApp - webapp-dev_ops-tp2

Este repositorio contiene una aplicación web en PHP conectada a MySQL, preparada para correr con Docker.

## Requisitos

- Docker
- Docker Compose

## Comando para correr el proyecto

docker-compose up --build

# Puerto utilizado
# La aplicación web estará disponible en: http://localhost:8080

# Servicios
PHP + Apache (puerto 8080)

MySQL (puerto 3306, usuario testuser, contraseña testpass)

# Estructura del proyecto:

webapp-dev_ops-tp2/
│
├── docker-compose.yml
├── Dockerfile
└── index.php