<?php
require_once('./controleur/Action.interface.php');

class LoginAction implements Action{
    public function execute(){
        unset($_REQUEST['field_message']['role']);
        unset($_REQUEST['field_message']['username']);
        unset($_REQUEST['field_message']['password']);
        $_REQUEST['EmployeurState'] = FALSE;
        $_REQUEST['CandidatState'] = FALSE;
        $vue = "login";
        if(!isset($_REQUEST['optradio'])) {
            $_REQUEST["field_messages"]["role"] = "Veuillez cocher un choix.";	
            $vue = "login";
        }else{
            if (ISSET($_REQUEST['optradio']) && $_REQUEST['optradio']=="employeur" ){
                unset($_REQUEST['field_message']['role']);
                $_REQUEST['EmployeurState'] = true;
                if (!ISSET($_REQUEST['username']))
                    $vue = "login";
                if (!$this->valide()){	
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
                    }else{     
                        if (!ISSET($_SESSION)) session_start();
                        $_SESSION["connecte"] = $_REQUEST["username"];
                        $_SESSION["role"] = "employeur";
                        $_SESSION['nomEntreprise'] = $emp->getNomEntr();
                        $_SESSION['courriel'] = $emp->getCourriel();
                        $_SESSION['telephone'] = $emp->getTelephone();
                        $vue = "default";
                    }
                }
            }
            elseif (ISSET($_REQUEST['optradio']) && $_REQUEST['optradio']=="candidat" ) {
                $_REQUEST['CandidatState'] = true;
                 if (!ISSET($_REQUEST['username']))
                    $vue = "login";
                if (!$this->valide()){
                    //$_REQUEST["global_message"] = "Le formulaire contient des erreurs. Veuillez les corriger.";	
                    $vue = "login";
                }

                require_once('./modele/CandidatDAO.class.php');
                $cdao = new CandidatDAO();
                $cand = $cdao->find($_REQUEST["username"]);
                if ($cand == null){
                    $_REQUEST["field_messages"]["username"] = "Utilisateur inexistant.";	
                    $vue = "login";
                }
                else {
                    if($cand->getMotDePasse() != $_REQUEST["password"]){
                        $_REQUEST["field_messages"]["password"] = "Mot de passe incorrect.";	
                        $vue = "login";
                    }else{     
                        if (!ISSET($_SESSION)) session_start();
                        $_SESSION["connecte"] = $_REQUEST["username"];
                        $_SESSION["role"] = "candidat";
                        $_SESSION['nom'] = $cand->getNom();
                        $_SESSION['prenom'] = $cand->getPrenom();
                        $_SESSION['courriel'] = $cand->getCourriel();
                        $vue = "default";
                    }
                }
            
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