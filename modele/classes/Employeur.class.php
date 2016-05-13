<?php
require_once('./modele/classes/User.class.php');
class Employeur extends User{
    private $nomEntr;
    private $noEntreprise;
    private $telephone;
    
    public function getNomEntr() {
        return $this->nomEntr;
    }

    public function getNoEntreprise() {
        return $this->noEntreprise;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function setNomEntr($nomEntr) {
        $this->nomEntr = $nomEntr;
    }

    public function setNoEntreprise($noEntreprise) {
        $this->noEntreprise = $noEntreprise;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
    
    public function __toString(){
        return "Employeur[".$this->nomUser."]";
    }
    public function loadFromRecord($ligne){
        $this->nomUser = $ligne["UserName"];
        $this->motDePasse = $ligne["MotDePasse"];
        $this->nomEntr = $ligne["NomEntr"];
        $this->noEntreprise = $ligne["NoEntreprise"];
        $this->courriel = $ligne["Courriel"];
        $this->telephone = $ligne["Telephone"];
    }

    
}
?>