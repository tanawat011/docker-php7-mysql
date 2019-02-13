FROM php:7-apache

RUN apt-get update \
    # && docker-php-ext-install curl \
    && pecl install memcached \
    && docker-php-ext-enable memcached \
    && docker-php-ext-install mysqli mysqlnd pdo pdo_mysql zip
# RUN apk upgrade --update && apk --no-cache add \
#     git autoconf file g++ gcc binutils isl libatomic libc-dev musl-dev make re2c libstdc++ libgcc libcurl binutils-libs mpc1 mpfr3 gmp libgomp coreutils freetype-dev libjpeg-turbo-dev libltdl libmcrypt-dev libpng-dev openssl-dev libxml2-dev expat-dev icu-dev libmemcached-dev \
#     && docker-php-ext-install iconv mysqli pdo pdo_mysql curl bcmath mcrypt mbstring json xml zip bz2 opcache intl  \
#     && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
#     && docker-php-ext-install gd

EXPOSE 9000

CMD ["php-fpm"]

# FROM php:7-fpm-alpine
# MAINTAINER Sathit Seethaphon <dixonsatit@gmail.com>
# RUN apk upgrade --update && apk add --no-cache \
#     git autoconf file g++ gcc binutils libzip zlib-dev bzip2-dev libtool libbz2 libzip-dev isl libatomic libc-dev musl-dev make re2c libstdc++ libgcc libcurl binutils mpc1 mpfr3 gmp libgomp coreutils freetype-dev libjpeg-turbo-dev libltdl libmcrypt-dev libpng-dev openssl-dev libxml2-dev expat-dev icu-dev libmemcached-dev \
#     && docker-php-ext-install iconv mysqli pdo pdo_mysql bcmath  mbstring json xml zip bz2 opcache intl  \
#     && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ zip --with-libzip \
#     && docker-php-ext-install gd
# EXPOSE 9000
# CMD ["php-fpm"]