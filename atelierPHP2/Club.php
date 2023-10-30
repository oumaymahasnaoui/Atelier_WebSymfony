<?php
class Club {
    // Attributs privés
    private $id;
    private $nom;
    private $description;
    private $adresse;
    private $domaine;

    // Constructeur pour initialiser les attributs
    public function __construct($id, $nom, $description, $adresse, $domaine) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->adresse = $adresse;
        $this->domaine = $domaine;
    }

    // Méthode pour afficher les informations du club
    public function afficherClub() {
        echo "ID : " . $this->id . "<br>";
        echo "Nom : " . $this->nom . "<br>";
        echo "Description : " . $this->description . "<br>";
        echo "Adresse : " . $this->adresse . "<br>";
        echo "Domaine : " . $this->domaine . "<br>";
    }
}
?>