FROM mcr.microsoft.com/devcontainers/php:8.4

RUN apt update \
    && apt install sqlite3 \
    && docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-install \
    pcntl
