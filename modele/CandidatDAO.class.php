<?php
include_once('./modele/classes/Database.class.php');
include_once('./modele/classes/Candidat.class.php');
include_once('./modele/classes/Liste.class.php');

class CandidatDAO{
    public function create($x){
        $request = "INSERT INTO candidat (UserName,MotDePasse,Nom,Prenom,Courriel,CV)".
                "VALUES ('".$x->getNomUser()."','".$x->getMotDePasse()."','".$x->getNom().
                "','".$x->getprenom()."','".$x->getCourriel()."','".$x->getCv()."')";
        try{
            $db = Database::getInstance();
            return $db->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    
    public function find($id){
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM candidat WHERE UserName = :x");
        $pstmt->execute(array(':x' => $id));
        
        $resultat = $pstmt->fetch(PDO::FETCH_OBJ);
        $c = new Candidat();
        
        if($resultat){
            $c->setNomUser($resultat->UserName);
            $c->setMotDePasse($resultat->MotDePasse);
            $c->setNom($resultat->Nom);
            $c->setPrenom($resultat->Prenom);
            $c->setCourriel($resultat->Courriel);
            $c->setCv($resultat->CV);
            $pstmt->closeCursor();
            return $c;
        }
        $pstmt->closeCursor();
        return NULL;   
    }
    
    public function findAll(){
        try{
            $liste = new Liste();
        
            $request = "SELECT * FROM candidat";
            $connect = Database::getInstance();
        
            $res = $connect->query($request);
            foreach($res as $ligne){
                $c = new Candidat();
                $c->loadFromRecord($ligne);
                $liste->add($c);
            }
            $res->closeCursor();
            $connect = NULL;
            return $liste;
            
        } catch (Exception $ex) {
            return $liste;
        }    
    }
    
    public function update($x){
        $request = "UPDATE candidat SET UserName = '".$x->getNomUser()."', MotDePasse = '".$x->getMotDePasse()."', Nom = '".$x->getNom()."', Prenom = '".$x->getPrenom()."', Courriel = '".$x->getCourriel()."', CV = '".$x->getCv()."'".
                " WHERE  = '".$x->getNomUser()."'";
        try{
            $db = Database::getInstance();
            return $db->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
        
    }
    
    public function delete($x){
        $request = "DELETE FROM Candidat WHERE UserName = '".$x->getNomUser()."'";
        try{
            $db = Database::getInstance();
            return $db->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
?>