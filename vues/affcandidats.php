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
        <h2>Liste de candidats</h2>
        
<?php
    require_once('./modele/classes/Affiche.class.php');
    require_once('./modele/classes/Liste.class.php');
    require_once('./modele/AfficheDAO.class.php');
    
?>
    <div class="col-sm-6">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th >Nom</th>
                <th >Prénom</th>
                <th >Courriel</th>
                <th >Cv</th>
              </tr>
            </thead>
            <tbody>
<?php   $dao = new CandidatDAO();
        $liste = $dao->findAll();;
    
        while($liste->next()){
            $a = $liste->current();
    
?>
              <tr>
                <td ><?php echo $a->getNom();?></td>
                <td ><?php echo $a->getPrenom();?></td>
                <td ><?php echo $a->getCourriel();?></td>
                <td><a href='#'>Visualiser</a></td>
              </tr>
              
 <?php
        }
 ?>
            </tbody>
        </table>  
    </div>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
<?php
    include_once('./vues/footer.php');
?>

</body>
</html>