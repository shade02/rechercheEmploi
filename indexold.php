<html>
    <head>
        <title>Page index</title>
    </head>
    <body>
        <?php
        require_once('./modele/classes/Employeur.class.php');
        require_once('./modele/EmployeurDAO.class.php');
        require_once('./modele/classes/Candidat.class.php');
        require_once('./modele/CandidatDAO.class.php');
        ?>
        <h2>Liste</h2>
        <div>
        <table border="solid">
            <tr align=center bgcolor=lightgreen>
                <td>Numero</td>
                <td>Designation</td>
                <td>Prix</td>
                <td>Ajouter aux panier</td>
            </tr>
         <?php   
        $dao = new CandidatDAO();
        $liste = $dao->findAll();
        while($liste->next()){
            $e = $liste->current();
            /*$e=new Employeur();
            $e->setNomUser($emp->getNomUser());
            $e->setMotDePasse($empp->getMotDePasse());
            $e->setNomEntr($emp->getNomEntr());
            $e->setNoEntreprise($emp->getNomEntreprise());
            $e->setCourriel($emp->getCourriel());
            $e->setTelephone($emp->getTelephone());
        //$e->loadFromObject($eavoris);*/
                    
            echo "<tr>";
            echo "<td align=center>".$e->getNomUser()."</td>";
            echo "<td align=center>".$e->getMotDePasse()."</td>";
            echo "<td align=center>".$e->getNom()."</td>";
            echo "<td align=center>".$e->getPrenom()."</td>";
            echo "<td align=center>".$e->getCourriel()."</td>";
            echo "<td align=center>".$e->getCv()."</td>";                 
            echo "</tr>";
        } 
        
        ?>
        </table>
    </body>
</html>