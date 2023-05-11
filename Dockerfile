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
RUN useradd -u $uid -G www-data,root -d /home/$user  $user
# ALL ABOVE SHOULD BE CACHED

RUN mkdir -p /var/www/personal-website
COPY --chown=www-data:www-data . /var/www/personal-website
RUN chown -R www-data:www-data /var/www/personal-website
RUN chmod -R 774 /var/www/personal-website

WORKDIR /var/www/personal-website

USER $user

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN composer install

# CMD /bin/sh init.sh