<?php

$user = 'cyril';
$passwd = 'password';

try {
	$bdd = new PDO('mysql:host=localhost;dbname=articles_database;charset=utf8', $user, $passwd);
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

$response = $bdd->query('SELECT * FROM articles_table ORDER by id');

// TODO:
// 1. Ajouter un bouton qui redirige vers new.php

while($value = $response->fetch()) {
	echo '<article>';
	echo '<h2><a href="show.php?id=' . $value['id'] . '">' . $value['title'] . '</a></h2>';
	echo '<div>' . $value['body'] . '</div>';
	echo '</article>';
	echo '<a href="destroy.php?id=' . $value['id'] . '"><button>Supprimer l\'article</button></a>';
}
