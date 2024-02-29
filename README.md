# php-html-mysql-docker

ici nous avons une simple application en php, html, javascript et mysql separé en 3: 

    backend en php
  
    frontend en html, css et javascript
  
    base de donnée mysql
  
le backend est séparé du frontend pour nous permettre de pouvoir conteunariser chaque partie dans un container


clonez le projet, deposez les 3 dossiers dans votre dossier de travail, modifiez les fichiers du backend et ceux du frontend pourchanger l'adresse ip et mettre celle de votre machine.

ensuite creér les images en entrant dans chaque dossier et tapant la commande "docker build -t nom_image ."
lancez le docker compose en vous placant dans votre dossier de travail et executant la commande : "docker compose up"
après ceci, entrez dans le conteneur de la base de donnée, créez l'utilisateur "willy" avec pour m2p "root" 

vous pouvez desormais acceder à l'application a travers l'adresse : http://votre_adresse_ip
