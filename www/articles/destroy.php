<?php

$user = 'cyril';
$passwd = 'password';

try {
    $bdd = new PDO('mysql:host=localhost;dbname=articles_database;charset=utf8', $user, $passwd);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$response = $bdd->query('DELETE FROM articles_table WHERE id=' . $_GET['id']);

header('Location: list.php');
exit;
