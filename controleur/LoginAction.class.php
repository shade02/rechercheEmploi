<?php
require_once('./controleur/Action.interface.php');

class LoginAction implements Action{
    public function execute(){
        $vue = "login";
        if (ISSET($_REQUEST['optradio']) && $_REQUEST['optradio']=="employeur" ){
            
            if (!ISSET($_REQUEST['username']))
                $vue = "login";
            if (!$this->valide()){
                //$_REQUEST["global_message"] = "Le formulaire contient des erreurs. Veuillez les corriger.";	
                $vue = "login";
            }

            require_once('./modele/EmployeurDAO.class.php');
            $edao = new EmployeurDAO();
            $emp = $edao->find($_REQUEST["username"]);
            if ($emp == null){
                $_REQUEST["field_messages"]["username"] = "Utilisateur inexistant.";	
                $vue = "login";
            }
            else {
                if($emp->getMotDePasse() != $_REQUEST["password"]){
                    $_REQUEST["field_messages"]["password"] = "Mot de passe incorrect.";	
                    $vue = "login";
                }     
                if (!ISSET($_SESSION)) session_start();
                $_SESSION["connecte"] = $_REQUEST["username"];
                $vue = "default";
            }
        }

        return $vue;    
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