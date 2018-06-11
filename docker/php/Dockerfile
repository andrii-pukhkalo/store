FROM php:7.1-fpm

ARG USER_ID=1000
ARG USER_NAME=web

ADD www_socket.conf /usr/local/etc/php-fpm.d/www_socket.conf
RUN groupadd -g $USER_ID $USER_NAME \
  && useradd -g $USER_NAME -u $USER_ID -m -s /bin/bash $USER_NAME \
  && sed -i "s/www-data/$USER_NAME/" /usr/local/etc/php-fpm.d/www_socket.conf \
  && mkdir -p /var/log/php \
  && apt-get update \
  && apt-get install -y git \
        zlib1g-dev \
        libjpeg-dev \
        libpng-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libicu-dev \
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
  && docker-php-ext-install -j$(nproc) gd \
  && docker-php-ext-install \
        zip \
        mysqli \
        pdo_mysql \
        iconv \
        mcrypt \
        intl \
  && rm -rf /var/lib/apt/lists/* \
  && curl -ksS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer \
  && /usr/local/bin/composer global require "fxp/composer-asset-plugin" \
  && php -r "readfile('https://s3.amazonaws.com/files.drush.org/drush.phar');" > /usr/local/bin/drush \
  && chmod +x /usr/local/bin/drush
  && curl -sL https://deb.nodesource.com/setup_8.x setup.sh
  && bash setup.sh
  && apt-get install -y nodejs
