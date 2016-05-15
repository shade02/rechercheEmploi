<?php
include_once('./modele/classes/Database.class.php');
include_once('./modele/classes/Affiche.class.php');
include_once('./modele/classes/Liste.class.php');

class AfficheDAO{
    
    public function create($x){
        $request = "INSERT INTO affiche (DatePublication,TitrePoste,Description,Niveau,Experience,Salaire,Statut,Duree,Contact,Telephone,Courriel,NoEntreprise,UserName)".
                "VALUES (sysdate,'".$x->getTitrePoste()."','".$x->getDescription().
                "','".$x->getNiveau()."','".$x->getExp()."','".$x->getSalaire()."','".$x->getDuree()."','".$x->getStatut().
                "','".$x->getContact()."','".$x->getTel()."','".$x->getCourriel()."','".$x->getNoEntreprise()."','".$x->getNomUser()."')";
        try{
            $db = Database::getInstance();
            return $db->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    
    public function find($id){
        $db = Database::getInstance();
        $pstmt = $db->prepare("SELECT * FROM affiche WHERE NoAffiche = :x");
        $pstmt->execute(array(':x' => $id));
        
        $resultat = $pstmt->fetch(PDO::FETCH_OBJ);
        $a = new Affiche();
        
        if($resultat){
            $a->setNoAffiche($resultat->NoAffiche);
            $a->setDatePublication($resultat->DatePublication);
            $a->setTitrePoste($resultat->TitrePoste);
            $a->setDescription($resultat->Description);
            $a->setNiveau($resultat->Niveau);
            $a->setExp($resultat->Experience);
            $a->setSalaire($resultat->Salaire);
            $a->setSalaire($resultat->Statut);
            $a->setDuree($resultat->Duree);
            $a->setContact($resultat->Contact);
            $a->setTel($resultat->Telephone);
            $a->setCourriel($resultat->Courriel);
            $a->setNoEntreprise($resultat->NoEntreprise);
            $pstmt->closeCursor();
            return $a;
        }
        $pstmt->closeCursor();
        return NULL;   
    }
    
    public function findAll(){
        try{
            $liste = new Liste();
        
            $request = "SELECT * FROM affiche";
            $connect = Database::getInstance();
        
            $res = $connect->query('$request');
            foreach($res as $ligne){
                $a = new Affiche();
                $a->loadFromRecord($ligne);
                $liste->add($a);
            }
            $res->closeCursor();
            $connect = NULL;
            return $liste;
            
        } catch (Exception $ex) {
            return $liste;
        }    
    }
    
    
    public function update($x){
        $request = "UPDATE affiche SET DatePublication = '".$x->getDatePublication()."', TitrePoste = '".$x->getTitrePoste()."', Description = '".$x->getDescription()."', Niveau = '".$x->getNiveau()."', Experience = '".$x->getExp()."', Salaire = '".$x->getSalaire()."', Duree = '".$x->getDuree()."', Contact = '".$x->getContact()."', Telephone = '".$x->getTel()."', Courriel = '".$x->getCourriel().", NoEntreprise = '".$x->getNoEntreprise()."'".
                " WHERE NoAffiche = '".$x->getNoAffiche()."'";
        try{
            $db = Database::getInstance();
            return $db->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
        
    }
    
    public function delete($x){
        $request = "DELETE FROM Affiche WHERE NoAffiche = '".$x->getNoAffiche()."'";
        try{
            $db = Database::getInstance();
            return $db->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
?>