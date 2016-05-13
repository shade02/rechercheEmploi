<?php
// -- Contrôleur frontal --
require_once('./controleur/ActionBuilder.class.php');
if (ISSET($_REQUEST["action"]))
	{
		$vue = ActionBuilder::getAction(strtolower($_REQUEST["action"]))->execute();
		/*
		Ou :
		$action = ActionBuilder::getAction(strtolower($_REQUEST["action"]));
		$vue = $action->execute();
		*/
	}
else	
	{
		$action = ActionBuilder::getAction("");
		$vue = $action->execute();
	}
// On affiche la page (vue)
include_once('vues/'.$vue.'.php');
?>
