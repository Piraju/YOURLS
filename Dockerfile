FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]
