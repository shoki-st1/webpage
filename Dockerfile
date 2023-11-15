FROM php:apache

COPY ./src/ /var/www/html/

WORKDIR /var/www/html/

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli
RUN a2enconf apache
