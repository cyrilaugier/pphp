<?php

// TODO:
// 2. Récupérer les informations dans $_POST depuis create.php
// 3. Insérer les données dans la bdd
// 4. Rediriger vers list.php

$user = 'cyril';
$passwd = 'password';

try {
	$bdd = new PDO('mysql:host=localhost;dbname=articles_database;charset=utf8', $user, $passwd);
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}
