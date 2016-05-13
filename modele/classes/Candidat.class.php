<?php

class Candidat extends User{
    private $nom;
    private $prenom;
    private $cv;
    
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getCv() {
        return $this->cv;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setCv($cv) {
        $this->cv = $cv;
    }
    
    public function loadFromRecord($ligne){
        $this->nomUser = $ligne["UserName"];
        $this->motDePasse = $ligne["MotDePasse"];
        $this->nom = $ligne["Nom"];
        $this->prenom = $ligne["Prenom"];
        $this->courriel = $ligne["Courriel"];
        $this->cv = $ligne["CV"];
    }


}
?>

