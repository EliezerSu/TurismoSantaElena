FROM php:7.4.3-cli

RUN docker-php-ext-install mysqli

COPY . /var/www/html

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]