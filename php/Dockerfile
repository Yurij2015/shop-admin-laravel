FROM php:7.4-apache
RUN docker-php-ext-install mysqli
RUN pecl install xdebug-2.9.6
RUN docker-php-ext-enable xdebug
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/php.ini
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN echo "extension=pdo_mysql" >> /usr/local/etc/php/php.ini
