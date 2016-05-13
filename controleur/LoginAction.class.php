<?php
require_once('./controleur/Action.interface.php');

class LoginAction implements Action{
    public function execute(){
        
            if (!ISSET($_REQUEST['username']))
                return "login";
            if (!$this->valide()){
                //$_REQUEST["global_message"] = "Le formulaire contient des erreurs. Veuillez les corriger.";	
                return "login";
            }

            require_once('./modele/EmployeurDAO.class.php');
            $edao = new EmployeurDAO();
            $emp = $edao->find($_REQUEST["username"]);
            if ($emp == null){
                $_REQUEST["field_messages"]["username"] = "Utilisateur inexistant.";	
                return "login";
            }
            else if ($emp->getMotDePasse() != $_REQUEST["password"]){
                $_REQUEST["field_messages"]["password"] = "Mot de passe incorrect.";	
                return "login";
            }
            if (!ISSET($_SESSION)) session_start();
                $_SESSION["connecte"] = $_REQUEST["username"];
                return "default";
        
       
    }
    
    public function valide(){
	$result = true;
	if ($_REQUEST['username'] == ""){
            $_REQUEST["field_messages"]["username"] = "Donnez votre nom d'utilisateur";
            $result = false;
	}	
	if ($_REQUEST['password'] == ""){
            $_REQUEST["field_messages"]["password"] = "Mot de passe obligatoire";
            $result = false;
	}	
	return $result;
    }
    
}