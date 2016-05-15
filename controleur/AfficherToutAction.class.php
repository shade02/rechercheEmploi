<?php
require_once('./controleur/Action.interface.php');

class AfficherToutAction implements Action{
    public function execute(){
        return "afficher";
    }
}
