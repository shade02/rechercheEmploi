<?php
require_once('./controleur/Action.interface.php');

class AfficherPriveAction implements Action{
    public function execute(){
        return "afficherprive";
    }
}
