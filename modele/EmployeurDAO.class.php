<?php
include_once('./modele/classes/Database.class.php');
include_once('./modele/classes/Employeur.class.php');
include_once('./modele/classes/Liste.class.php');

class EmployeurDAO{
    public function create($x){
        $request = "INSERT INTO employeur (UserName,MotDePasse,NomEntr,NoEntreprise,Courriel,Telephone)".
                "VALUES ('".$x->getNomUser()."','".$x->getMotDePasse()."','".$x->getNomEntr().
                "','".$x->getNoEntreprise()."','".$x->getCourriel()."','".$x->getTelephone()."')";
        try{
            $db = Database::getInstance();
            return $db->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    
    public function find($id){
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM employeur WHERE UserName = :x");
        $pstmt->execute(array(':x' => $id));
        
        $resultat = $pstmt->fetch(PDO::FETCH_OBJ);
        $e = new Employeur();
        
        if($resultat){
            $e->setNomUser($resultat->UserName);
            $e->setMotDePasse($resultat->MotDePasse);
            $e->setNomEntr($resultat->NomEntr);
            $e->setNoEntreprise($resultat->NoEntreprise);
            $e->setCourriel($resultat->Courriel);
            $e->setTelephone($resultat->Telephone);
            $pstmt->closeCursor();
            return $e;
        }
        $pstmt->closeCursor();
        return NULL;     
    }
    
    public function findAll(){
        try{
            $liste = new Liste();
        
            $request = "SELECT * FROM employeur";
            $connect = Database::getInstance();
        
            $res = $connect->query($request);
            foreach($res as $ligne){
                $e = new Employeur();
                $e->loadFromRecord($ligne);
                $liste->add($e);
            }
            $res->closeCursor();
            $connect = NULL;
            return $liste;
            
        } catch (Exception $ex) {
            return $liste;
        }    
    }
    
    public function update($x){
        $request = "UPDATE employeur SET UserName = '".$x->getNomUser()."', MotDePasse = '".$x->getMotDePasse()."', NomEntr = '".$x->getNomEntr()."', NoEntr = '".$x->getNoEntrprise()."', Courriel = '".$x->getCourriel()."', Telephone = '".$x->getTelephone()."'".
                " WHERE  = '".$x->getNomUser()."'";
        try{
            $db = Database::getInstance();
            return $db->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }   
    }
    
    public function delete($x){
        $request = "DELETE FROM employeur WHERE UserName = '".$x->getNomUser()."'";
        try{
            $db = Database::getInstance();
            return $db->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
?>
