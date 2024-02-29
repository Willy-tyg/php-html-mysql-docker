
FROM mysql:latest

# Copier le fichier SQL dans le conteneur
COPY cloud.sql /docker-entrypoint-initdb.d/

# Définir le mot de passe vide pour l'utilisateur root
ENV MYSQL_ROOT_PASSWORD=""

# Définir le nom de la base de données à créer
ENV MYSQL_DATABASE="cloud"

# Exposer le port MySQL (par défaut 3306)
EXPOSE 3306

# Commande pour démarrer le serveur MySQL
CMD ["mysqld"]
