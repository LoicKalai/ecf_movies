<?php
// Réaliser une requête qui permet de récupérer tous les titres des films
require_once('../connect.php');

$recup_film = "SELECT title FROM `infos_movies` ";

var_dump($recup_film);
?>

