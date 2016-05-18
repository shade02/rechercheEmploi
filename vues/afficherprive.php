<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site de recherche d'emploi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/style.css" type="text/css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

 
    
</head>
<body>
<?php
if (!ISSET($_SESSION)) {
    session_start();
}
?>
<?php
    include_once('./vues/navigator.php');
?>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <?php
        include_once('./vues/menu.php');
    ?>
    <div class="col-sm-8 text-left"> 
        <h2>Mes offres d'emplois</h2>
        
<?php
    require_once('./modele/classes/Affiche.class.php');
    require_once('./modele/classes/Liste.class.php');
    require_once('./modele/AfficheDAO.class.php');
    
?>
    <div class="col-sm-6">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th >Date</th>
                <th > Poste</th>
              </tr>
            </thead>
            <tbody>
<?php   $dao = new AfficheDAO();
        $liste = $dao->findAll();
    
        while($liste->next()){
            $a = $liste->current();
            
            if($a->getNomUser()== $_SESSION['connecte']){
?>
              <tr>
                <td ><?php echo $a->getDatePublication();?></td>
                <td ><?php echo $a->getTitrePoste();?></td><td><a href='?action=details&id=<?php echo $a->getNoAffiche();?>'>Détails</a></td>
                <td><a href='?action=modifierAff&numMod=<?php echo $a->getNoAffiche();?>' title='Modifier'><span class='glyphicon glyphicon-edit'></span></a></td>
                <td><a href='?action=supprimer&numSupp=<?php echo $a->getNoAffiche();?>' title='Supprimer'><span class='glyphicon glyphicon-trash'></span></a></td>
              </tr>
              
 <?php
            }
        }
 ?>
            </tbody>
        </table>  
    </div>
    </div>
    <?php
    include_once('./vues/sidenav.php');
    ?>
  </div>
</div>
<?php
    include_once('./vues/footer.php');
?>

</body>
</html>