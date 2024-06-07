FROM php:8.3-fpm

RUN apt-get update && apt-get install -y bash

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get purge

ARG UNAME=testuser
ARG UID=1000
ARG GID=1000
RUN groupadd -g $GID -o $UNAME && useradd -m -u $UID -g $GID -o -s /bin/bash $UNAME
USER $UNAME

RUN echo "alias pint='./vendor/bin/pint'" >> ~/.bashrc
