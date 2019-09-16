<?php

$user = 'cyril';
$passwd = 'password';

try {
	$bdd = new PDO('mysql:host=localhost;dbname=articles_database;charset=utf8', $user, $passwd);
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

$response = $bdd->query('SELECT title, body FROM articles_table ORDER by id');

while($value = $response->fetch()) {
	echo '<article>';
	echo '<h2>' . $value['title'] . '</h2>';
	echo '<div>' . $value['body'] . '</div>';
	echo '</article>';
}
