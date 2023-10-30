<?php
require_once('Club.php'); // Inclure la définition de la classe Club

// Création d'un objet Club
$club1 = new Club(1, "Club Robotique", "Test", "Esprit Ghazala", "Electromécanique");

// Affichage des informations du club
$club1->afficherClub();
?>