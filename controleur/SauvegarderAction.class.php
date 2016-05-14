<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Candidat.class.php');
require_once('./modele/classes/Employeur.class.php');
require_once('./modele/CandidatDAO.class.php');
require_once('./modele/EmployeurDAO.class.php');

class SauvegarderAction implements Action {
    public function execute() {

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_REQUEST['role']) && $_REQUEST['role'] == 'employeur') {
            $Employeur = new Employeur();
            $Employeur->setNomUser($_SESSION['connecte']);
            $Employeur->setNomEntr($_REQUEST['nomEntreprise']);
            $Employeur->setCourriel($_REQUEST['courriel']);
            $Employeur->setTelephone($_REQUEST['telephone']);
            $EmployeurDAO = new EmployeurDAO();
            $EmployeurDAO->update($Employeur);
        } else {
            $Candidat = new Candidat();
            $Candidat->setNomUser($_SESSION['connecte']);
            $Candidat->setNom($_REQUEST['nom']);
            $Candidat->setPrenom($_REQUEST['prenom']);
            $Candidat->setCourriel($_REQUEST['courriel']);
            $CandidatDAO = new CandidatDAO();
            $CandidatDAO->update($Candidat);
        }
        return "profil";
    }
}
