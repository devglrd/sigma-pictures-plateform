
## About installation

Pour l'installation, faite un git clone du repo,
<br>
Copier coller le lien dans le btn 'clone or download';
<br>
Aller dans votre terminal, en ligne de commande aller dans votre fichier mamp>htdocs à l'aide des commande ``cd et ls``

<br>
Une fois dans votre htdocs, faite git clone https://github.com/glrd78/-sigma-pictures-plateform.git
<br>

Ensuite faite un cd -sigma-pitcures-plateform pour rentré dans le dossier, une fois dans le dossier faite la commande 
``cp .env.exemple .env``
<br>
Cette commande sert a copier coller le fichier ``.env.example``
<br>
Une fois fait ça faite une ``composer install``
<br> 
Ensuite rentré vos identifiants base de donnée, dans le ``.env``
<br>


Pour faire tourner votre serveur local faite la commande suivant dans le **dosier du projet** => ``php artisan serve``
