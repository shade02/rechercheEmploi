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
  <div id="main" class="row content">
    <?php
        include_once('./vues/menu.php');
    ?>
    <div class="col-sm-8 text-left"> 
        <h1>À Propos de Uwork</h1><br/>
        <img src="./images/Uwork().png" />
        <p>Uwork est un site dédié a aider les gens à se trouver un emploi de façon simple et efficace. Les employeurs peuvent gratuitement et facilement offrir des postes d'emplois à ceux qui en cherche de facon sérieuse.</p>
        <br/>Uwork est la place pour se démarquer sans aucune complications ou de procédures!</p><br/>
        <p> Déuter votre carrières sans problèmes avec Uwork!</p>
      <hr>
      
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


