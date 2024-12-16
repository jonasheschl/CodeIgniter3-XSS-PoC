FROM php:apache

WORKDIR /var/www/html

# Install dependencies
RUN apt-get update
RUN apt-get install -y git zip 
RUN apt-get clean
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set server to production mode
RUN echo 'SetEnv CI_ENV production' >> /etc/apache2/sites-available/000-default.conf

# Copy source files to server
COPY . .

# Install
RUN composer install
RUN chown -R www-data:www-data application/cache || true

CMD ["apache2-foreground"]
