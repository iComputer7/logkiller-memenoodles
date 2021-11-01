FROM php:apache

EXPOSE 80

RUN rm -rf /var/www/html
COPY src /var/www/html