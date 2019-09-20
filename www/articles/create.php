<?php

// TODO:
// 3. Insérer les données dans la bdd
// 4. Rediriger vers list.php

$user = 'cyril';
$passwd = 'password';

try {
	$bdd = new PDO('mysql:host=localhost;dbname=articles_database;charset=utf8', $user, $passwd);
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['title']) && isset($_POST['body'])) {
	$bdd->exec('INSERT INTO articles_database.articles_table(title,body) VALUEs(\'titre\', \'corps\')');
}
