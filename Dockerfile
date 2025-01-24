# Utiliser une image officielle PHP avec Apache
FROM php:8.1-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

# Copier les fichiers de l'application dans le conteneur
COPY . /var/www/html

# Configurer les permissions pour Apache
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80 pour Apache
EXPOSE 8101

# Commande pour démarrer Apache
CMD ["php", "-S", "0.0.0.0:8101", "-t", "/var/www/html"]
