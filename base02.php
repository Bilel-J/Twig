<?php

// chargement de l'autoload de composer
require_once 'vendor/autoload.php';

// on donne le chemin d'un dossier où se trouveront nos vues (ici des fichiers en .twig)
$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader, [
    // on va désactiver le cache, il suffit de décommenter et de créer le dossier pour qu'une mise en cache automatique soit effective, on commente pour éviter des soucis d'actualisation (vider le cache)
    // 'cache' => '/path/to/compilation_cache',
]);
// création d'un tableau 2 niveaux
$tab = [
    "Prems"=>[
        "janvier",
        "Février",
        "Mars",
    ],
    "Deums"=>"coucou les amis"
];

// chargement de la vue et affichage, passage des variables dans un tableau associatif
echo $twig->render('base02View.html.twig', ['name' => 'Michaël','montab' => $tab]);

