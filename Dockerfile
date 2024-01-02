FROM php:7.0-apache

WORKDIR /var/www/html

COPY src/* /var/www/html/


CMD ["php", "-S" , "0.0.0.0:80"]
