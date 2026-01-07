FROM wordpress:php8.3-apache

# Install additional PHP extensions if needed
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set recommended PHP.ini settings
RUN { \
    echo 'memory_limit=512M'; \
    echo 'upload_max_filesize=64M'; \
    echo 'post_max_size=64M'; \
    echo 'max_execution_time=300'; \
} > /usr/local/etc/php/conf.d/uploads.ini

# Enable Apache mod_rewrite for WordPress permalinks
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy the WordPress files from current directory to the container
# Adjusted from ./public_html/ to . since files are in root
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

# Expose port 80
EXPOSE 80
