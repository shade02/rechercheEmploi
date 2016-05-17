<?php
require_once('./controleur/Action.interface.php');

class ProfilAction implements Action {
    public function execute() {
        if (!ISSET($_SESSION)) session_start();
        if (!ISSET($_SESSION['connecte'])){
        return "login";
        }
        return "profil";
    }
}
