<?php
 class Liste{
     private $objets;
     private $current = -1;
     
     public function __construct() {
         $this->objets = array();
         $this->current = -1;
     }
     public function add($objet){
         array_push($this->objets, $objet);
     }
     
     public function next(){
         if($this->current<(count($this->objets)-1)){
             $this->current++;
             return true;
         }
         return false;
     }
     
     public function current(){
         if(isset($this->objets[$this->current])){
             return $this->objets[$this->current];
         }
         return null;
     }
     
     public function printCurrent(){
         if(isset($this->objets[$this->current]))
             echo $this->objets[$this->current];
     }
     
     public function reset(){
         $this->current = -1;
     }
 }

?>
