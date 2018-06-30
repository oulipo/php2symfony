<?php
// index.php

// charger et initialiser des libs globales
require_once 'model.php';
require_once 'controllers.php';

// router la requete
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ('/index.php' === $uri) {
    list_action();
} elseif ('/index.php/show' === $uri && isset($_GET['id'])) {
    show_action($_GET['id']);
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}
?>

<!-- Solutions : 
    1. isoler "la présentation" : git checkout etape2 
    2. isoler la logique applicative (domaine) : git checkout etape3
    3. isoler le layout : : git checkout etape4
    4. ajouter le page show : : git checkout etape5 
    -> 5. MISE EN PLACE D'UN FRONT-CONTROLLER : git checkout etape6
          c'est l'étape majeure car on va tout centraliser dans un seul fichier
    6. ajouter symfony : git checkout symfony -->

<!-- sans front controller
/index.php          => Blog post list page (index.php executed)
/show.php           => Blog post show page (show.php executed)

avec index.php comme front controller
/index.php          => Blog post list page (index.php executed)
/index.php/show     => Blog post show page (index.php executed) -->