<?php
// index.php
require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$uri = $request->getPathInfo();
if ('/' === $uri) {
    $response = list_action();
} elseif ('/show' === $uri && $request->query->has('id')) {
    $response = show_action($request->query->get('id'));
} else {
    $html = '<html><body><h1>Page Not Found</h1></body></html>';
    $response = new Response($html, Response::HTTP_NOT_FOUND);
}

// echo the headers and send the response
$response->send();
?>

<!-- Solutions : 
    1. isoler "la présentation" : git checkout etape2 
    2. isoler la logique applicative (domaine) : git checkout etape3
    3. isoler le layout : : git checkout etape4
    4. ajouter le page show : : git checkout etape5 
    5. MISE EN PLACE D'UN FRONT-CONTROLLER : git checkout etape6
        c'est l'étape majeure car on va tout centraliser dans un seul fichier
    -> 6. ajouter symfony : git checkout symfony -->

<!-- $ composer install -->