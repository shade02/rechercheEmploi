<?php

class User{
    protected $nomUser;
    protected $motDePasse;
    protected $courriel;
    
    public function getNomUser() {
        return $this->nomUser;
    }

    public function getMotDePasse() {
        return $this->motDePasse;
    }

    public function getCourriel() {
        return $this->courriel;
    }

    public function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
    }

    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }

   public function setCourriel($courriel) {
        $this->courriel = $courriel;
    }


}
?>

