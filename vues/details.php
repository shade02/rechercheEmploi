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
        
        $dao = new AfficheDAO();
        $a = $dao->find($_REQUEST['id']);
    ?>
    <div class="col-sm-8 text-left"> 
        <p><label><strong>Offre d'emploi no. </strong><?php echo $a->getNoAffiche()?></p>
        <h2>Détails du poste</h2>
        
<?php
    require_once('./modele/classes/Affiche.class.php');
    require_once('./modele/classes/Liste.class.php');
    require_once('./modele/AfficheDAO.class.php');
    
    
    
    
?>
        
    <div  id='details'>
        <h4><?php echo $a->getTitrePoste(); ?></h4>
        <br/>
        <p><label><strong>Description: </strong></label><br/><?php echo $a->getDescription(); ?></p><br/>
        <p><label><strong>Niveau de scolarité: </strong></label><br/><?php echo $a->getNiveau(); ?></p><br/>
        <p><label>Expérience demandée: </label></br><?php echo $a->getExp(); ?></p><br>
        <p><label>Salaire: </label><br/><?php echo $a->getSalaire(); ?>$ /heure</p><br/>
        <p><label>Statut: </label><br/><?php echo $a->getStatut(); ?></p><br/>
        <p><label>Durée: </label><br/><?php echo $a->getExp(); ?></p><br/>
        <p><label>Personne a contacter: </label><br/><?php echo $a->getContact(); ?></p><br/>
        <p><label>Telephone: </label><br/><?php echo $a->getTel(); ?></p><br/>
        <p><label>Courriel: </label><br/><?php echo $a->getCourriel(); ?></p><br/>
        
    <?php
        if (!ISSET($_SESSION)) session_start();
        if (ISSET($_SESSION["connecte"]) && $a->getNomUser()==$_SESSION['connecte']){
    ?>
            <button type="submit" class="btn btn-default"><a href="?action='modifieraff&numMod=<?php echo $a->getNoAffiche();?>">Modifier</a></button>
            <button type="submit" class="btn btn-default"><a href="?action='afficherprive">Retour</a></button>
    <?php
        }
    ?>
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