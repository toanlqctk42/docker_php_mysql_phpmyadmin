FROM php:fpm

RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install mysqli
