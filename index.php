<?php
// index.php
$connection = new PDO("mysql:host=localhost;dbname=blog_db", 'root', '');

$result = $connection->query('SELECT id, title FROM posts');

$posts = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
}

$connection = null;

// on inclue le code HTML de présentation
require 'templates/list.php';
?>

<!-- Solutions : 
    -> 1. isoler "la présentation" : git checkout etape2 
    2. isoler la logique applicative (domaine) : git checkout etape3
    3. isoler le layout : : git checkout etape4
    4. ajouter le page show : : git checkout etape5 
    5. mise en place d'un front-controller : git checkout etape6 
    6. ajouter symfony : git checkout symfony -->