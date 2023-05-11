FROM php:8.1-fpm

ARG user
ARG uid

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

COPY --chown=www-data:www-data . /var/www
WORKDIR /var/www

# Install system dependencies
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    # NEWLY ADDED
    php8.1 \
    php8.1-fpm \
    php8.1-common \
    php8.1-pdo \
    php8.1-pdo_mysql \
    php8.1-mysqli \
    php8.1-mcrypt \
    php8.1-mbstring \
    php8.1-xml \
    php8.1-openssl \
    php8.1-json \
    php8.1-phar \
    php8.1-zip \
    php8.1-gd \
    php8.1-dom \
    php8.1-session \
    php8.1-zlib

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd
RUN docker-php-ext-enable pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

USER $user

CMD /bin/sh init.sh