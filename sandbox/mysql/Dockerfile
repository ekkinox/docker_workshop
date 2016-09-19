FROM php:5.6.26-fpm

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libmcrypt-dev \
        libxml2-dev \
        curl \
        zlib1g-dev \
        libncurses5-dev \
        libcurl4-openssl-dev \
    && docker-php-ext-install -j$(nproc) mcrypt  pdo_mysql mbstring

COPY . /usr/src/myscript

WORKDIR /usr/src/myscript

CMD [ "php", "./connect.php" ]