<?php
require_once('./controleur/Action.interface.php');

class ProfilAction implements Action {
    public function execute() {
        return "profil";
    }
}
