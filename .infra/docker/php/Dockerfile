################################################################################

FROM composer:2.7.6 AS composer

################################################################################

FROM php:8.3-fpm-bullseye AS base

RUN usermod -u 1000 www-data

WORKDIR "/app"

ADD . /app

RUN apt-get update \
 && apt-get -y --no-install-recommends install \
    g++ \
    libfreetype6-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    git \
    unzip \
    zlib1g-dev \
    openssh-client \
    openssl \
    libxslt1-dev \
  && apt-get clean

RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-configure intl
RUN docker-php-ext-install exif \
    gd \
    intl \
    mbstring \
    pdo \
    pdo_mysql \
    soap \
    zip \
    calendar \
    xsl
RUN pecl install \
    apcu-5.1.21
RUN docker-php-ext-enable \
    apcu \
    opcache

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY .infra/docker/php/php.ini /usr/local/etc/php/conf.d/php.ini

RUN chown -R www-data:www-data /app
USER 1000

################################################################################

FROM base AS api

CMD ["php-fpm"]

################################################################################

FROM base AS cli

################################################################################
