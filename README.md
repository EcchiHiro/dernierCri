# Test Dernier Cri

##Setup 

- Creer un virtual host pour le projet (dans mon cas dernierCri)
- Créer une database (utf8 general_ci), et mettre a jour le .env avec le nom / utilisateur et mot de passe de mysql
- Effectuer la commande : php artisan migrate
- Visiter l'url : http://dernierCri/news/fetch/nyTimes
- Ici le dernier paramètre correspond au site du fichier de configuration news.php

## Améliorations possibles de mon test 
- Sécurisation de la route de fetch (derrière un guard)
- Recuperation des images et stockage de celle-ci directement dans notre application
- Les API keys devraient être stockés dans le .env
- Une classe d'import pourrait être crée par type de news et pourrait implémenter une interface commune
- L'entité news pourrait utiliser le package astrotomic/laravel-translatable pour une traduction des attributs

