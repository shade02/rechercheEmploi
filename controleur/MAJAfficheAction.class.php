<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Affiche.class.php');
require_once('./modele/AfficheDAO.class.php');

class MAJAfficheAction implements Action{
    public function execute(){
        if (!ISSET($_SESSION)) session_start();
        if(isset($_REQUEST['titre'])){
            if(empty($_REQUEST['titre'])){
                $_REQUEST['messageErreurTitre'] = "Veuillez entrer un titre pour le poste.";
            }
            elseif(strlen($_REQUEST['titre']) < 4) {
                $_REQUEST['messageErreurTitre'] = "Veuillez entrez un titre d'au moins 4 caractères.";          
            }
        }
        if(isset($_REQUEST['salaire'])){
            if(empty($_REQUEST['salaire'])){
                $_REQUEST['messageErreurSalaire'] = "Veuillez saisir un salaire.";
            }
            elseif(!is_numeric ($_REQUEST['salaire'])) {
                $_REQUEST['messageErreurSalaire'] = "Veuillez saisir un salaire valide.";          
            }
        }
        /*if(isset($_REQUEST['telephone'])){
            if(empty($_REQUEST['telephone'])){
                $_REQUEST['messageErreurTelephone'] = "Un numéro de téléphone est requis."; 
            }
            elseif(!is_numeric ($_REQUEST['telephone'])) {
                $_REQUEST['messageErreurTelephone'] = "Veuillez saisir un numéro valide.";          
            }
        }*/
        if(isset($_REQUEST['courriel'])){
            if(empty($_REQUEST['courriel'])){
                $_REQUEST['messageErreurCourriel'] = "Une adresse courriel est requise."; 
            }
            elseif(!filter_var($_REQUEST['courriel'],FILTER_VALIDATE_EMAIL)) {
                $_REQUEST['messageErreurCourriel'] = "Veuillez saisir une adresse courriel valide.";          
            }
                
        }
        if(isset($_REQUEST['messageErreurTitre']) || isset($_REQUEST['messageErreurExperience']) || isset($_REQUEST['messageErreurStatut']) ||
                isset($_REQUEST['messageErreurDuree']) || isset($_REQUEST['messageErreurTelephone']) || isset($_REQUEST['messageErreurCourriel'])){
            return "modifieraff";
        }else{
        $Affiche = new Affiche();
        $Affiche->setTitrePoste($_REQUEST['titre']);
        $Affiche->setDescription($_REQUEST['description']);
        $Affiche->setNiveau($_REQUEST['niveau']);
        $Affiche->setExp($_REQUEST['experience']);
        $Affiche->setSalaire($_REQUEST['salaire']);
        $Affiche->setStatut($_REQUEST['statut']);
        $Affiche->setDuree($_REQUEST['duree']); 
        $Affiche->setContact($_REQUEST['contact']);
        $Affiche->setTel($_REQUEST['telephone']);
        $Affiche->setCourriel($_REQUEST['courriel']);
        $Affiche->setNomUser($_SESSION['connecte']);
        $AfficheDAO = new AfficheDAO();
        $AfficheDAO->update($Affiche);     
          
        return "afficherprive"; 
        }
    }
             
}
