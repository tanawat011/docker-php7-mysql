# FROM php:7-fpm-alpine
# # MAINTAINER Sathit Seethaphon <dixonsatit@gmail.com>
# RUN apk upgrade --update --no-cache add \
#     git autoconf file g++ gcc binutils-libs binutils isl libatomic libc-dev musl-dev make re2c libstdc++ libgcc libcurl libcurl4-gnutls-dev mpc1 mpfr3 gmp libgomp coreutils freetype-dev libjpeg-turbo-dev libltdl libmcrypt-dev libpng-dev openssl-dev libxml2-dev expat-dev icu-dev libmemcached-dev 
#     # && docker-php-ext-install mysqli pdo pdo_mysql gd \
#     # && docker-php-ext-configure --with-curl \
#     # && docker-php-ext-install mcrypt gd
#     # && docker-php-ext-configure mcrypt gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
#     # && docker-php-ext-install iconv mysqli pdo pdo_mysql curl mcrypt bcmath mbstring json xml zip bz2 opcache intl  \
#     # && docker-php-ext-install gd
# EXPOSE 9000
# CMD ["php-fpm"]
FROM php:7.2-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv mysqli pdo pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd