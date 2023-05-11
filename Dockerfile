FROM php:8.1-fpm

ARG user
ARG uid

# Install system dependencies
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN composer install

COPY --chown=www-data:www-data . /var/www
WORKDIR /var/www


# CMD /bin/sh init.sh