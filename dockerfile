FROM php:7.3-apache

#Install git and MySQL extensions for PHP

RUN apt-get update && apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

#Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=. --filename=composer
RUN mv composer /usr/local/bin/
RUN cd /var/www
RUN mkdir inc
RUN cd inc
RUN echo "<?php:
RUN define('DB_SERVER', '${MYSQL_DBHOST}');
RUN define('DB_USERNAME', '${MYSQL_DBUSER}');
RUN define('DB_PASSWORD', '${MYSQL_DBPASS}');
RUN define('DB_DATABASE', '${MYSQL_DBNAME}');
RUN ?>" > dbinfo.inc

COPY src /var/www/html/

EXPOSE 80/tcp
EXPOSE 443/tcp


 