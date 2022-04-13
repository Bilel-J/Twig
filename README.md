# Twig

On va utiliser WAMP avec PHP 8.013

depuis : 

https://wampserver.aviatechno.net/?lang=french

**Projet Twig:**

https://twig.symfony.com/

**Documentation:**

https://twig.symfony.com/doc/3.x/

## Installation

Utilisation de composer :

https://getcomposer.org/download/

À télécharger sur votre machine et à installer. S'il existe déjà utilisez la commande

    composer self-update

Quand composer est à jour, on va installer Twig:

    composer require "twig/twig:^3.0"

On rajoute le dossier `vendor` dans le `.gitignore`

Il faudra, en cas de chargement sur une autre machine, expliquer qu'il faut faire un

    composer install