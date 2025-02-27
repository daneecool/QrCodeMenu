ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

RUN apk update; \
    apk upgrade; \
    apk add --no-cache tzdata; \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime; \
    echo "Asia/Tokyo" > /etc/timezone; \
    docker-php-ext-install mysqli

# Set the PHP timezone
RUN echo "date.timezone = Asia/Tokyo" >> /usr/local/etc/php/conf.d/timezone.ini