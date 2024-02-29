FROM php:7.4-apache

# Copiez les fichiers du backend dans le conteneur
COPY * /var/www/html/

# Exposez le port approprié pour votre application backend
EXPOSE 80

RUN apt-get update \
    && docker-php-ext-install pdo_mysql
# Commande pour exécuter le backend, par exemple :
CMD ["apache2-foreground"]
