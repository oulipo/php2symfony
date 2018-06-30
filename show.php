<?php
// show.php
require_once 'model.php'; // pb : on doit inclure le modele dans tous les controleurs...

$post = get_post_by_id($_GET['id']);

require 'templates/show.php';