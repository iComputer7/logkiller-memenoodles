FROM php:alpine

EXPOSE 80

COPY -r src/* /var/www/html/