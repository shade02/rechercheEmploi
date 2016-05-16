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
    include_once('./vues/navigator.php');
?>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <?php
        include_once('./vues/menu.php');
    ?>
    <div class="col-sm-8 text-left"> 
        <h2>Détails du poste</h2>
        
<?php
    require_once('./modele/classes/Affiche.class.php');
    require_once('./modele/classes/Liste.class.php');
    require_once('./modele/AfficheDAO.class.php');
    
    $dao = new AfficheDAO();
    $a = $dao->find($_REQUEST['id']);
    
    
?>
        
    <div  id='details'>
        <h4><?php echo $a->getTitrePoste(); ?></h4>
        <br/>
        <p><label><strong>Description: </strong></label><br/><?php echo $a->getDescription(); ?></p><br/>
        <p><label><strong>Niveau de scolarité: </strong></label><br/><?php echo $a->getNiveau(); ?></p><br/>
        <p><label>Expérience demandée: </label></br><?php echo $a->getExp(); ?></p>
        <br>
        <p><label>Salaire: </label><br/><?php echo $a->getSalaire(); ?>$ /heure</p>
        <p><label>Statut: </label><br/><?php echo $a->getStatut(); ?></p>
        <p><label>Durée: </label><br/><?php echo $a->getExp(); ?></p>
        <p><label>Personne a contacter: </label><br/><?php echo $a->getContact(); ?></p>
        <p><label>Telephone: </label><br/><?php echo $a->getTel(); ?></p>
        <p><label>Courriel: </label><br/><?php echo $a->getCourriel(); ?></p>
        
        
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