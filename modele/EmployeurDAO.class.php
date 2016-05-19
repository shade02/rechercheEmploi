<?php
include_once('./modele/classes/Database.class.php');
include_once('./modele/classes/Employeur.class.php');
include_once('./modele/classes/Liste.class.php');

class EmployeurDAO{
    public function create($x){
        $db = Database::getInstance();
        $request = "INSERT INTO employeur (UserName,MotDePasse,NomEntr,NoEntreprise,Courriel,Telephone)".
                "VALUES ('".$x->getNomUser()."','".$x->getMotDePasse()."','".$x->getNomEntr().
                "','".$x->getNoEntreprise()."','".$x->getCourriel()."','".$x->getTelephone()."')";
        try{
            $pstmt = $db->prepare("INSERT INTO employeur (UserName,MotDePasse,NomEntr,NoEntreprise,Courriel,Telephone)"
                    . "VALUES (:username,:motdepasse,:nomentr,:noentreprise,:courriel,:telephone)");
            $pstmt->execute(array(':username' => $x->getNomUser(),
                                  ':motdepasse' => $x->getMotDePasse(),
                                  ':nomentr' => $x->getNomEntr(),
                                  ':noentreprise' => $x->getNoEntreprise(),
                                  ':courriel' => $x->getCourriel(),
                                  ':telephone' => $x->getTelephone()))or die (print_r($pstmt->errorInfo(), true));
            //$db = Database::getInstance();
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
           // return $db->exec($request);
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
        $db = Database::getInstance();
        /*$request = "UPDATE employeur SET NomEntr = '".$x->getNomEntr()."', NoEntreprise = '".$x->getNoEntreprise()."', Courriel = '".$x->getCourriel()."', Telephone = '".$x->getTelephone()."'".
                " WHERE UserName = '".$x->getNomUser()."'";*/
        try{
            $pstmt = $db->prepare("UPDATE employeur SET NomEntr=:nomentr, NoEntreprise=:noentreprise, Courriel=:courriel, Telephone=:telephone "
                    . "WHERE UserName=:username");
            $pstmt->execute(array(':username' => $x->getNomUser(),
                                  ':nomentr' => $x->getNomEntr(),
                                  ':noentreprise' => $x->getNoEntreprise(),
                                  ':courriel' => $x->getCourriel(),
                                  ':telephone' => $x->getTelephone()))or die (print_r($pstmt->errorInfo(), true));
           // $db = Database::getInstance();
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
            //return $db->exec($request);
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
