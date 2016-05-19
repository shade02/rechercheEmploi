<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Employeur.class.php');
require_once('./modele/classes/Candidat.class.php');
require_once('./modele/EmployeurDAO.class.php');
require_once('./modele/CandidatDAO.class.php');

class SignInAction implements Action {
    public function execute() {
        $EmployeurDAO = new EmployeurDAO();
        $CandidatDAO = new CandidatDAO();
        if(isset($_REQUEST['username'])) {
            if(isset($_REQUEST['password'])) {
                if(strlen($_REQUEST['username']) < 5) {
                    $_REQUEST['messageErreurUsername'] = "Le nom d'utilisateur doit être d'au moins 5 caractères.";
                }
                if($EmployeurDAO->find($_REQUEST['username'])!=NULL){
                    $_REQUEST['messageErreurUsername'] = "Ce nom d'utilisateur est déjà utilisé.";
                }
                if($CandidatDAO->find($_REQUEST['username'])!=NULL){
                    $_REQUEST['messageErreurUsername'] = "Ce nom d'utilisateur est déjà utilisé.";
                }
                if(strlen($_REQUEST['password']) < 6) {
                    $_REQUEST['messageErreurPassword'] = "Le mot de passe doit être d'au moins 6 caractères.";
                } 
                if(empty($_REQUEST['courriel'])){
                    $_REQUEST['messageErreurMail'] = "Une adresse courriel est requise.";
                }else{
                    if(!filter_var($_REQUEST['courriel'],FILTER_VALIDATE_EMAIL)){
                        $_REQUEST['messageErreurMail'] = "Veuillez saisir une adresse courriel valide.";
                    }
                }
                if( !isset( $_REQUEST['optradio']) ) {
                    $_REQUEST['messageErreurChoix'] = "Veuillez cocher un choix.";
                }
                if(isset( $_REQUEST['messageErreurUsername'] ) || isset( $_REQUEST['messageErreurPassword']) || isset( $_REQUEST['messageErreurChoix'] ) ) {
                    return "signin";
                } else {
                    if( $_REQUEST['optradio'] == 'employeur' ) {
                        $Employeur = new Employeur();
                        $Employeur->setNomUser($_REQUEST['username']);
                        $Employeur->setMotDePasse($_REQUEST['password']);
                        $Employeur->setCourriel($_REQUEST['courriel']);
                        
                        $EmployeurDAO->create($Employeur);
                    } else if($_REQUEST['optradio'] == 'candidat' ){
                        $Candidat = new Candidat();
                        $Candidat->setNomUser($_REQUEST['username']);
                        $Candidat->setMotDePasse($_REQUEST['password']);
                        $Candidat->setCourriel($_REQUEST['courriel']);
                        
                        $CandidatDAO->create($Candidat);
                    }
                    if (!ISSET($_SESSION)) session_start();
                    $_SESSION["connecte"] = $_REQUEST["username"];
                    $_SESSION["role"] = $_REQUEST["optradio"];
                    $_SESSION["courriel"] = $_REQUEST["courriel"];
                
                    return "default";
                }
            }
        }
        return "signin";
    }
}
