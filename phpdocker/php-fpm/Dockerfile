FROM php:8.2-fpm
WORKDIR "/application"

# Instalar dependências
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    apt-utils \
    libonig-dev \
    libmagickwand-dev \
    libgmp-dev

# Instalar e habilitar a extensão BC Math
RUN docker-php-ext-configure bcmath --enable-bcmath \
    && docker-php-ext-install bcmath

# Instalar e habilitar a extensão GMP
RUN docker-php-ext-install gmp

# Instala a extensão Imagick
RUN pecl install imagick \
    && docker-php-ext-enable imagick

RUN docker-php-ext-install zip pdo_mysql mbstring exif
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd

# Instalação do Composer
RUN apt-get update && \
    apt-get install -y --no-install-recommends git unzip && \
    rm -rf /var/lib/apt/lists/* && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
