FROM php:7.2-fpm

COPY config/php.ini /usr/local/lib/

COPY composer.lock composer.json /var/www/

COPY package-lock.json package.json /var/www/

RUN apt-get update && apt-get install -y libmcrypt-dev procps libldap2-dev \ 
    && apt-get install -y default-libmysqlclient-dev \    
    && pecl install mcrypt-1.0.1 \
    && docker-php-ext-enable mcrypt \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install exif


# Install gd image
RUN apt-get install -y \
    libwebp-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxpm-dev \
    libgmp-dev \
    libfreetype6-dev
 # configure gd    
RUN docker-php-ext-configure gd \
    --with-gd \
    --with-webp-dir \
    --with-jpeg-dir \
    --with-png-dir \
    --with-zlib-dir \
    --with-xpm-dir \
    --with-freetype-dir  

RUN docker-php-ext-install gd


# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get install -y curl \
  && curl -sL https://deb.nodesource.com/setup_11.x | bash - \
  && apt-get install -y nodejs \
  && curl -L https://www.npmjs.com/install.sh | sh

WORKDIR /var/www
