<?php

require 'bdd.php';

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
