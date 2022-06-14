# Test Dernier Cri

## Setup 

- Creer un virtual host pour le projet (dans mon cas dernierCri)
- Créer une database (utf8 general_ci), et mettre a jour le .env avec le nom / utilisateur et mot de passe de mysql
- Effectuer la commande composer install / npm install (non necessaire)
- Effectuer la commande : php artisan migrate
- Visiter l'url : http://dernierCri/news/fetch/nyTimes OU utiliser le menu
- Ici le dernier paramètre correspond au site du fichier de configuration news.php

## TODO 
- Une classe d'import pourrait être crée par type de news (NYNews) et pourrait implémenter une interface commune
- Sécurisation de la route de fetch (derrière un guard) + limitation des requêtes
- Recuperation des images et stockage de celle-ci directement dans notre application
- Les API keys devraient être stockés dans le .env
- L'entité news pourrait utiliser le package astrotomic/laravel-translatable pour une traduction des attributs
- Faire du vrai CSS (pour aller vite j'ai utiliser du bootstrap)
- Balises meta title / description en fonction de l'article
- ...

## Merci de prendre le temps de regarder mon test!
Bonne journée! 

