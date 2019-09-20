<?php

require 'bdd.php';

$response = $bdd->query('DELETE FROM articles_table WHERE id=' . $_GET['id']);

header('Location: list.php');
exit;
