FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

# Desabilitar MPMs conflitantes
RUN a2dismod mpm_event mpm_worker

# Habilitar módulos necessários
RUN a2enmod rewrite

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

EXPOSE 8080
