<?php

class Affiche{
    private $noAffiche;
    private $datePublication;
    private $titrePoste;
    private $description;
    private $niveau;
    private $exp;
    private $salaire;
    private $statut;
    private $duree;
    private $contact;
    private $tel;
    private $courriel;
    private $noEntreprise;
    private $nomUser;
    
    public function getNoAffiche() {
        return $this->noAffiche;
    }

    public function getDatePublication() {
        return $this->datePublication;
    }

    public function getTitrePoste() {
        return $this->titrePoste;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getNiveau() {
        return $this->niveau;
    }

    public function getExp() {
        return $this->exp;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function getContact() {
        return $this->contact;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getCourriel() {
        return $this->courriel;
    }

    public function getNoEntreprise() { 
        return $this->noEntreprise;
    }
    
    public function getNomUser() {
        return $this->nomUser;
    }

    public function setNoAffiche($noAffiche) {
        $this->noAffiche = $noAffiche;
    }

    public function setDatePublication($datePublication) {
        $this->datePublication = $datePublication;
    }

    public function setTitrePoste($titrePoste) {
        $this->titrePoste = $titrePoste;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

    public function setExp($exp) {
        $this->exp = $exp;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function setContact($contact) {
        $this->contact = $contact;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function setCourriel($courriel) {
        $this->courriel = $courriel;
    }

    public function setNoEntreprise($noEntreprise) {
        $this->noEntreprise = $noEntreprise;
    }
    
    public function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
    }

    public function __toString(){
        return "Affiche[".$this->noAffiche.",".$this->titrePoste.",".$this->description.",".$this->niveau.",".$this->exp.",".$this->salaire.",".$this->duree.",".$this->contact.",".$this->tel.",".$this->courriel.",".$this->nomUser.",".$this->datePublication.",".$this->statut."]";
    }
    
    public function afficher(){
        echo $this->__toString();
    }
    
    public function loadFromRecord($ligne){
        $this->noAffiche = $ligne["NoAffiche"];
        $this->datePublication = $ligne["DatePublication"];
        $this->titrePoste = $ligne["TitrePoste"];
        $this->description = $ligne["Description"];
        $this->niveau = $ligne["Niveau"];
        $this->exp = $ligne["Experience"];
        $this->salaire = $ligne["Salaire"];
        $this->statut = $ligne["Statut"];
        $this->duree = $ligne["Duree"];
        $this->contact = $ligne["Contact"];
        $this->tel = $ligne["Telephone"];
        $this->courriel = $ligne["Courriel"];
        $this->noEntreprise = $ligne["NoEntreprise"];
        $this->nomUser = $ligne["UserName"];
    }
}
?>
