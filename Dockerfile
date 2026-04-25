FROM php:7.4-apache

# Install mysqli and pdo_mysql extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Enable apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80
