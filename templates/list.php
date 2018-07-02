<!-- templates/list.php -->
<?php $title = 'Liste des articles' ?>

<?php ob_start() ?>
    <h1>Liste des articles</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
        <li>
            <a href="/index.php/show?id=<?= $post['id'] ?>">
                <?= $post['title'] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>