<?php

$user = 'cyril';
$passwd = 'password';

try {
    $bdd = new PDO('mysql:host=localhost;dbname=articles_database;charset=utf8', $user, $passwd);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['title']) && isset($_POST['body'])) {
    $req = $bdd->prepare('INSERT INTO articles_table(title,body) VALUES(:title, :body)');
    $req->execute(
        array(
        'title' => $_POST['title'],
        'body' => $_POST['body']
        )
    );
}

header('Location: list.php');
exit;
