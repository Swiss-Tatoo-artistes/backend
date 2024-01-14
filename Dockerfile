# Use this docker container to build from
FROM php:8.3-apache-bullseye

# set our application folder as an environment variable
ENV APP_HOME /var/www/html
ENV PATH vendor/bin:$PATH

# install all the system dependencies and enable PHP modules
RUN apt-get update && apt-get install -y \
  libicu-dev \
  libpq-dev \
  libpng-dev \
  libmcrypt-dev \
  libonig-dev \
  libzip-dev \
  git \
  zip \
  unzip \
  && rm -r /var/lib/apt/lists/* \
  && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
  && docker-php-ext-install \
  intl \
  mbstring \
  pcntl \
  zip \
  gd \
  opcache \
  pdo_mysql \
  mysqli


# install composer
# Composer
COPY --from=composer/composer:2-bin /composer /usr/bin/composer

COPY ./composer.json composer.json
RUN composer install

# Virtual Host
COPY ./apacheConfig.conf /etc/apache2/sites-available/000-default.conf

# PHP ini
# COPY ./php /usr/local/etc/php/conf.d/


# mod_rewrite for URL rewrite and mod_headers for .htaccess extra headers like Access-Control-Allow-Origin-
RUN a2enmod rewrite headers

# copy source files
COPY ./app/ /var/www/html/app/
COPY ./bootstrap/ /var/www/html/bootstrap/
COPY ./config/ /var/www/html/config/
COPY ./database/ /var/www/html/database/
COPY ./public/ /var/www/html/public/
COPY ./resources/ /var/www/html/resources/
COPY ./routes/ /var/www/html/routes/
COPY ./storage/ /var/www/html/storage/
COPY ./artisan /var/www/html/artisan

RUN chmod 777 -R storage
