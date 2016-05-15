<?php
require_once('./controleur/Action.interface.php');

class DetailsAction implements Action {
    public function execute() {
        return "details";
    }
}