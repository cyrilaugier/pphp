<?php

$user = 'cyril';
$passwd = 'password';

try {
	$bdd = new PDO('mysql:host=localhost;dbname=articles_database;charset=utf8', $user, $passwd);
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

$response = $bdd->query('SELECT title, body FROM articles_table WHERE id=1');
$response = $response->fetch();

echo '<h1>' . $response['title'] . '</h1>';
echo '<div>' . $response['body'] . '</div>';
