FROM php:8.1.8-fpm-alpine
WORKDIR /app
COPY index.php .
CMD ["php-fpm"]