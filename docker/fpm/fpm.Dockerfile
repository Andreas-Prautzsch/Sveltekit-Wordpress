FROM php:7.4-fpm

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
  install-php-extensions exif gd mysqli opcache zip imagick

WORKDIR /var/www/html

RUN curl \
    -fsSL "https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar" \
    -o /usr/local/bin/wp && \
  chmod 0755 /usr/local/bin/wp

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer