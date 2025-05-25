FROM php:8.2-fpm-alpine

# Csomagok
RUN apk add --no-cache \
    curl \
    unzip \
    git \
    postgresql-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Munka könyvtár
WORKDIR /var/www/html

ARG UID=1000
ARG GID=1000
# Csoport létrehozása, ha még nem létezik
RUN addgroup -g ${GID} appgroup

# Felhasználó létrehozása az UID/GID alapján
RUN adduser -D -u ${UID} -G appgroup -s /bin/bash appuser

# Váltás a nem-root userre
USER appuser

# PHP-FPM konfiguráció (ha kell, opcionális)
# COPY ./php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
