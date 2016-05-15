<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Affiche.class.php');
require_once('./modele/AfficheDAO.class.php');

class PublierAction implements Action{
    public function execute(){
        if (!ISSET($_SESSION)) session_start();
        $AfficheDAO = new AfficheDAO();
        $Affiche = new Affiche();
        
        if(isset($_REQUEST['titre'])){
            $Affiche->setTitrePoste($_REQUEST['titre']);
        } 
        if(isset($_REQUEST['description'])){
            $Affiche->setDescription($_REQUEST['description']);
        }
        if(isset($_REQUEST['niveau'])){
            $Affiche->setNiveau($_REQUEST['niveau']);
        }
        if(isset($_REQUEST['experience'])){
            $Affiche->setExp($_REQUEST['experience']);
        }
        if(isset($_REQUEST['salaire'])){
            $Affiche->setSalaire($_REQUEST['salaire']);
        }
        if(isset($_REQUEST['statut'])){
            $Affiche->setStatut($_REQUEST['statut']);
        }
        if(isset($_REQUEST['duree'])){
            $Affiche->setDuree($_REQUEST['duree']); 
        }
        if(isset($_REQUEST['contact'])){
            $Affiche->setContact($_REQUEST['contact']);
        }
        if(isset($_REQUEST['telephone'])){
            $Affiche->setTel($_REQUEST['telephone']);
        }
        if(isset($_REQUEST['courriel'])){
            $Affiche->setCourriel($_REQUEST['courriel']);
        }
        
        $Affiche->setNomUser($_SESSION['connecte']);
        $AfficheDAO->create($Affiche);     
        
           
        return "default"; 
    }
             
}
