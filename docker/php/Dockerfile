FROM php:8.1-fpm-alpine

RUN apk add --update --no-cache \
    shadow \
    npm \
    g++ \
    acl \
    icu-dev \
    libxml2-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install intl
RUN docker-php-ext-install soap

COPY ./config.ini /usr/local/etc/php/conf.d/config.ini
RUN chmod 755 /usr/local/etc/php/conf.d/config.ini

WORKDIR /var/www/app


