<?php

require 'bdd.php';

$response = $bdd->query('SELECT * FROM articles_table ORDER by id');

echo '<a href="new.php"><button>Insérer un nouvel article</button></a>';

while ($value = $response->fetch()) {
    echo '<article>';
    echo '<h2><a href="show.php?id=' . $value['id'] . '">' . $value['title'] . '</a></h2>';
    echo '<div>' . $value['body'] . '</div>';
    echo '</article>';
    echo '<a href="destroy.php?id=' . $value['id'] . '"><button>Supprimer l\'article</button></a>';
}
