<?php

$user = 'cyril';
$passwd = 'password';

try {
	$bdd = new PDO('mysql:host=localhost;dbname=articles_database;charset=utf8', $user, $passwd);
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM articles_table WHERE id=' . $_GET['id']);
$req->execute();

// while($value = $response->fetch()) {
// 	echo '<article>';
// 	echo '<h2><a href="article.php?id=' . $value['id'] . '">' . $value['title'] . '</a></h2>';
// 	echo '<div>' . $value['body'] . '</div>';
// 	echo '</article>';
// }

$value = $req->fetch(PDO::FETCH_ASSOC);
var_dump($value);


	echo '<article>';
	echo '<h2><a href="article.php?id=' . $value['id'] . '">' . $value['title'] . '</a></h2>';
	echo '<div>' . $value['body'] . '</div>';
	echo '</article>';
