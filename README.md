# Test Dernier Cri

##Setup 

- Creer un virtual host pour le projet (dans mon cas dernierCri)
- Créer une database (utf8 general_ci), et mettre a jour le .env avec le nom / utilisateur et mot de passe de mysql
- Effectuer la commande : php artisan migrate
- Visiter l'url : http://dernierCri/importNews

## Améliorations possibles 
- Securisation de la route de fetch (derrière un guard)
- Les API keys devraient être stockés dans le .env

