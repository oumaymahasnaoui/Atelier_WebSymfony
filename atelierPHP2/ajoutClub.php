<?php
require_once('Club.php'); // Inclure la définition de la classe Club

// Récupération des données du formulaire
$id = $_POST['id'];
$nom = $_POST['nom'];
$description = $_POST['description'];
$adresse = $_POST['adresse'];
$domaine = $_POST['domaine'];

// Création d'un objet Club à partir des données du formulaire
$club1 = new Club($id, $nom, $description, $adresse, $domaine);

// Affichage des informations du club avec var_dump()
var_dump($club1);
?>