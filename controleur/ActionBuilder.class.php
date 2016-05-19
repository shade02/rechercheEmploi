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
require_once('./controleur/AfficherPriveAction.class.php');
require_once('./controleur/SupprimerAfficheAction.class.php');
require_once('./controleur/ModifierAfficheAction.class.php');
require_once('./controleur/MAJAfficheAction.class.php');
require_once('./controleur/JoindreAction.class.php');
require_once('./controleur/AProposAction.class.php');


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
                        
                        case "afficherprive" :
                            return new AfficherPriveAction();
                            break;
                        
			case "supprimer" :
                            return new SupprimerAfficheAction();
                            break; 
                        
                        case "modifieraff" :
                            return new ModifierAfficheAction();
                            break;
                        
			case "majaffiche" :
                            return new MAJAfficheAction();
                            break;
                        
                        case "joindre" :
                            return new JoindreAction();
                            break;
                        case "apropos" :
                            return new AProposAction();
                            break;
                        
                        default :
                            return new DefaultAction();
		}
	}
}
?>
