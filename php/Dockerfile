# Set PHP version dynamically if provided
ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

# Update system packages and install required dependencies
RUN apk update && apk add --no-cache \
    libpng-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    oniguruma-dev \
    bash \
    git \
    curl \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory inside the container
WORKDIR /var/www/html

# Copy project files
COPY . .

# Run Composer install only if composer.json exists
RUN if [ -f "composer.json" ]; then composer install --no-dev --prefer-dist; fi

# Expose the necessary port
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]

# Create the qr_codes directory and set proper permissions
RUN mkdir -p /var/www/html/qr_codes && chown -R www-data:www-data /var/www/html/qr_codes && chmod -R 755 /var/www/html/qr_codes
