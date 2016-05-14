<?php
require_once('./controleur/DefaultAction.class.php');
require_once('./controleur/LoginAction.class.php');
require_once('./controleur/LogoutAction.class.php');
require_once './controleur/SignInAction.class.php';
require_once './controleur/ProfilAction.class.php';
require_once('./controleur/SauvegarderAction.class.php');
/*require_once('./controleur/AfficherAction.class.php');
require_once('./controleur/AjouterAction.class.php');
require_once('./controleur/SupprimerAction.class.php');*/
class ActionBuilder{
	public static function getAction($nom){
		switch ($nom)
		{
			case "connecter" :
                            return new LoginAction();
                            break; 
			case "deconnecter" :
                            return new LogoutAction();
                            break; 
                        case "inscrire" :
                            return new SigninAction();
                            break;
                        case "profil" :
                            return new ProfilAction();
                            break;
                        case "sauvegarder" :
                            return new SauvegarderAction();
                            break;
		/*	case "afficher" :
				return new AfficherAction();
			break; 
			case "ajouter" :
				return new AjouterAction();
			break; 
			case "supprimer" :
				return new SupprimerAction();
			break; */
			default :
                            return new DefaultAction();
		}
	}
}
?>
