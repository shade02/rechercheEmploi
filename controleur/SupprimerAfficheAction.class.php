<?php
require_once('./controleur/Action.interface.php');

class SupprimerAfficheAction implements Action{
    public function execute(){
        if(!isset($_SESSION)){
                session_start();
        }
        if(!isset($_SESSION['connecte']))
            return 'login';
        if(isset($_REQUEST['numSupp'])){
            $dao = new AfficheDAO();
            $a = $dao->find($_REQUEST['numSupp']);
            $dao->delete($a);
        }
        return "supprimer";
	
    }
}
