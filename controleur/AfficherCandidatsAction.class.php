<?php
require_once('./controleur/Action.interface.php');

class AfficherCandidatsAction implements Action {
    public function execute() {
        return "affcandidats";
    }
}