<?php

require 'bdd.php';

$response = $bdd->query('SELECT title, body FROM articles_table WHERE id=' . $_GET['id']);
$response = $response->fetch();

echo '<h1>' . $response['title'] . '</h1>';
echo '<div>' . $response['body'] . '</div>';
