FROM php:5.6.21-apache

RUN apt-get update && apt-get install -y libmemcached-dev \
    && apt-get install zlib1g-dev \
    && pecl install memcached \
    && docker-php-ext-configure mysqli --with-mysqli=mysqlnd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable memcached

