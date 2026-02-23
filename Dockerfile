FROM wordpress:php8.3-apache

# Enable Apache mod_rewrite (required for WordPress permalinks)
RUN a2enmod rewrite

# Allow .htaccess overrides in document root
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
