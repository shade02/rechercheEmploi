<?php
require_once('./controleur/Action.interface.php');

class ModifierAfficheAction implements Action{
    public function execute(){
        if(!isset($_SESSION)) session_start();
        if(!isset($_SESSION['connecte']))
            return 'login';
        
        return "modifieraff";
	
    }
}
