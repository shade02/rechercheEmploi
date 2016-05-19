<?php
require_once('./controleur/Action.interface.php');

class AProposAction implements Action{
    public function execute(){
        return "apropos";
    }
}

