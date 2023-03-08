FROM ubuntu

ARG DEBIAN_FRONTEND=noninteractive
# File Author / Maintainer
MAINTAINER rmuktader

# Update the repository sources list
RUN apt-get update

# Install and run apache
RUN apt-get install -y apache2 && apt-get clean && a2dissite 000-default.conf


#ENTRYPOINT ["/usr/sbin/apache2", "-k", "start"]


#ENV APACHE_RUN_USER www-data
#ENV APACHE_RUN_GROUP www-data
#ENV APACHE_LOG_DIR /var/log/apache2

#EXPOSE 80
#CMD apachectl -D FOREGROUND

#//////////////////////////////////////////////

RUN apt-get -y update && apt-get install -y \
    php \
    curl \
    git \
    unzip \
    libapache2-mod-php \
    php-mbstring \
    php-cli \
    php-bcmath \
    php-json \
    php-xml \
    php-zip \
    php-pdo \
    php-common \
    php-tokenizer \
    php-mysql \
    php-pear \
    php-fpm \
    php-dev \
    php-curl \
    php-xmlrpc \
    php-gd
#WORKDIR /var/www/html/code
#////////////////////////////////////////////

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar  /usr/local/bin/composer
RUN chmod +x   /usr/local/bin/composer

#COPY source_code/. /var/www/html/
RUN mkdir -p /var/www/html/laravelapp
WORKDIR /var/www/html
COPY source_code/. /var/www/html/laravelapp/
COPY .env /var/www/html/laravelapp/

#RUN composer create-project laravel/laravel laravelapp
RUN chmod -R o+rw /var/www/html/laravelapp/storage
RUN chmod -R o+rw /var/www/html/laravelapp/bootstrap
RUN chmod -R o+rw /var/www/html/laravelapp/public
COPY laravel.conf /etc/apache2/sites-available/
RUN a2ensite laravel.conf
RUN a2enmod rewrite
RUN service apache2 stop
RUN service apache2 start
CMD ["apachectl", "-D", "FOREGROUND"]
EXPOSE 80
