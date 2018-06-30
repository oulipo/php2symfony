<?php
// index.php
$connection = new PDO("mysql:host=localhost;dbname=blog_db", 'root', '');

$result = $connection->query('SELECT id, title FROM posts');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Liste des articles</title>
    </head>
    <body>
        <h1>Liste des articles</h1>
        <ul>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="/show.php?id=<?= $row['id'] ?>">
                    <?= $row['title'] ?>
                </a>
            </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>

<?php
$connection = null;
?>

<!-- 
    1. Pas de contrôle sur les erreurs : Que faire si la connexion à la bdd échoue ?
    2. Organisation faible: si l'application grossit, ce fichier seul va devenir de moins en moins maintenable. Où mettre son code pour la soumission d'un formulaire ? Où valider les données ? etc.
    3. Difficile de réutiliser ce code.
    4. La base de données est liée à MySQL. -->

<!-- Solutions : 
    1. isoler "la présentation" : git checkout etape2 
    2. isoler la logique applicative (domaine) : git checkout etape3
    3. isoler le layout : : git checkout etape4
    4. ajouter le page show : : git checkout etape5 
    5. mise en place d'un front-controller : git checkout etape6 
    6. ajouter symfony : git checkout symfony -->