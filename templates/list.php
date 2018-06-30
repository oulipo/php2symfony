<!DOCTYPE html>
<html>
    <head>
        <title>Liste des articles</title>
    </head>
    <body>
        <h1>Liste des articles</h1>
        <ul>
            <?php foreach ($posts as $post): ?>
            <li>
                <a href="/show.php?id=<?= $post['id'] ?>">
                    <?= $post['title'] ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>