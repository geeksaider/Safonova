FROM php:8.2-fpm-alpine
WORKDIR /var/www/public

COPY ./src /var/www/public
