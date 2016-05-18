<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Affiche.class.php');
require_once('./modele/AfficheDAO.class.php');

class MAJAfficheAction implements Action{
    public function execute(){
        if (!ISSET($_SESSION)) session_start();
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
