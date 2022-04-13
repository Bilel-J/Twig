<?php
echo "<p>Vient de la doc, c'est la version la plus basique de chargement : <a href='https://twig.symfony.com/doc/3.x/intro.html#installation' target='_blank'>https://twig.symfony.com/doc/3.x/intro.html#installation</a></p>";

// chargement de l'autoload de composer
require_once 'vendor/autoload.php';

// Instanciation de la classe Twig ArrayLoader (Où twig va chercher les template)
$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }}!',
    'suite' => '<br> Comment vas-tu?',
]);

// Création de l'environment Twig
$twig = new \Twig\Environment($loader);

// affichage "echo" d'une méthode "render" de l'instance de la classe Environment de Twig
echo $twig->render('index', ['name' => 'Michaël']);
echo $twig->render('suite',[]);