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
      
      <h2>Bienvenue sur le site de recherche d'emploi Uwork!</h2><br/>
      <p>Le site d'emploi proffessionnels! <br/><br/>Inscrivez vous dès maintenant pour débuter la recherche vers votre carrière!</p>
      <hr>
      <h3>Actualités</h3>
      <p>À venir...</p>
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


