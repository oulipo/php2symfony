<?php
// index.php
require_once 'model.php';

$posts = get_all_posts();

require 'templates/list.php';
?>

<!-- Solutions : 
    1. isoler "la présentation" : git checkout etape2 
    -> 2. isoler la logique applicative (domaine) : git checkout etape3
    3. isoler le layout : : git checkout etape4
    4. ajouter le page show : : git checkout etape5 
    5. mise en place d'un front-controller : git checkout etape6 
    6. ajouter symfony : git checkout symfony -->