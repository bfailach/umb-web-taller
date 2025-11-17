# Imagen base con PHP 8.2 + Apache
FROM php:8.2-apache

# Instalar dependencias necesarias para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev

# Instalar extensiones de PDO y PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# Copiar todo el proyecto al servidor Apache
COPY . /var/www/html

# Dar permisos recomendados
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto que Render usa
EXPOSE 80
