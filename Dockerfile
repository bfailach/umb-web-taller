# Imagen base con PHP 8.2 + Apache
FROM php:8.2-apache

# Instalar extensiones necesarias (importante si usas PostgreSQL)
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql

# Copiar todos los archivos del proyecto al servidor Apache
COPY . /var/www/html

# Dar permisos (opcional pero recomendado)
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto para Render
EXPOSE 80
