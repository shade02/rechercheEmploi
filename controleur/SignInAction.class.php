<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Employeur.class.php');
require_once('./modele/classes/Candidat.class.php');
require_once('./modele/EmployeurDAO.class.php');
require_once('./modele/CandidatDAO.class.php');

class SignInAction implements Action {
    public function execute() {
        if(isset($_REQUEST['username'])) {
            if(isset($_REQUEST['password'])) {
                if(strlen($_REQUEST['username']) < 5) {
                    $_REQUEST['messageErreurUsername'] = "Le nom d'utilisateur est trop court.";
                }
                if(strlen($_REQUEST['password']) < 8) {
                    $_REQUEST['messageErreurPassword'] = "Le mot de passe est trop court.";
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
                        $EmployeurDAO = new EmployeurDAO();
                        $EmployeurDAO->create($Employeur);
                    } else if($_REQUEST['optradio'] == 'candidat' ){
                        $Candidat = new Candidat();
                        $Candidat->setNomUser($_REQUEST['username']);
                        $Candidat->setMotDePasse($_REQUEST['password']);
                        $CandidatDAO = new CandidatDAO();
                        $CandidatDAO->create($Candidat);
                    }
                    if (!ISSET($_SESSION)) session_start();
                    $_SESSION["connecte"] = $_REQUEST["username"];
                    $_SESSION["role"] = $_REQUEST["optradio"];
                
                    return "default";
                }
            }
        }
        return "signin";
    }
}
