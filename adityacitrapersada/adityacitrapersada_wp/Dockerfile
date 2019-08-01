FROM wordpress:php7.0-fpm
COPY . /var/www/html

RUN apt-get update && apt-get install -y \
	vim \
	apt-utils \
        libfreetype6-dev \
        libmcrypt-dev \
        libpng-dev \
        libjpeg-dev \
        libxml2-dev

