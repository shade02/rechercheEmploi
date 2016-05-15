<?php
require_once('./controleur/DefaultAction.class.php');
require_once('./controleur/LoginAction.class.php');
require_once('./controleur/LogoutAction.class.php');
require_once './controleur/SignInAction.class.php';
require_once './controleur/ProfilAction.class.php';
require_once('./controleur/SauvegarderAction.class.php');
require_once('./controleur/CreerAction.class.php');
require_once('./controleur/PublierAction.class.php');
require_once('./controleur/AfficherToutAction.class.php');
require_once('./controleur/DetailsAction.class.php');
require_once('./controleur/AfficherCandidatsAction.class.php');
/*require_once('./controleur/AjouterAction.class.php');
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
                        case "creer" :
                            return new CreerAction();
                            break;
                        case "publier" :
                            return new PublierAction();
                            break;
			case "affichertout" :
				return new AfficherToutAction();
                            break; 
                        case "details" :
                            return new DetailsAction();
                            break;
                        case "affichercandidats" :
				return new AfficherCandidatsAction();
                            break; 
		/*	case "ajouter" :
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
