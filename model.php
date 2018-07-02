<?php

// model.php
function open_database_connection()
{
    $connection = new PDO("mysql:host=127.0.0.1;dbname=blog_db", 'blog_db', 'blog_db');

    return $connection;
}

function close_database_connection(&$connection)
{
    $connection = null;
}

function get_all_posts()
{
    $connection = open_database_connection();

    $result = $connection->query('SELECT id, title FROM posts');

    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    close_database_connection($connection);

    return $posts;
}