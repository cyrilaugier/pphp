<?php

$user   = 'cyril';
$passwd = 'password';
$host   = 'localhost'; // 127.0.0.1
$dbName = 'articles_database';

try {
    $bdd = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset=utf8', $user, $passwd);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
