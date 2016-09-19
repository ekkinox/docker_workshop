FROM php:5.6-fpm

MAINTAINER Jonathan VUILLEMIN <ekkinox@gmail.com>

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libmcrypt-dev \
        libxml2-dev \
        curl \
        zlib1g-dev \
        libncurses5-dev \
        libcurl4-openssl-dev \
    && docker-php-ext-install -j$(nproc) mcrypt  pdo_mysql mbstring

COPY timezone.ini /usr/local/etc/php/conf.d/

RUN usermod -u 1000 www-data
