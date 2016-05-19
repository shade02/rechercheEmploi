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
        
        if (!ISSET($_SESSION)) session_start();
        if (ISSET($_SESSION["role"]) && $_SESSION["role"]=="employeur" && ISSET($_SESSION['connecte'])){
    ?>
        <div class="col-sm-8 text-left"> 
      
            <h2>Bonjour! <?php echo $_SESSION['connecte']?></h2><br/>
            <p>N'oubliez pas de faire la mise à jour de votre profil.</p>
            <hr>
            <h3>Actualités</h3>
            <p>À venir...</p>
        </div>
    <?php        
        }elseif(ISSET($_SESSION["role"]) && $_SESSION["role"]=="candidat" && ISSET($_SESSION['connecte'])){
    ?>
        <div class="col-sm-8 text-left"> 
            
            <h2>Bonjour! <?php echo $_SESSION['connecte']?></h2><br/>
            <p>N'oubliez pas de faire la mise à jour de votre profil.</p><br/>
            <p>Ajouter un CV peut augmenter vos chances d'être contacté pas un employeur!
            <hr>
            <h3>Actualités</h3>
            <p>À venir...</p>
        </div>
    <?php        
        }else{
    ?>
    <div class="col-sm-8 text-left"> 
      
      <h2>Bienvenue sur le site de recherche d'emploi Uwork!</h2><br/>
      <p>Le site d'emploi proffessionnels! <br/><br/>Inscrivez vous dès maintenant pour débuter la recherche vers votre carrière!</p>
      <hr>
      <h3>Actualités</h3>
      <p>À venir...</p>
    </div>
    <?php
        }
    include_once('./vues/sidenav.php');
    ?>
  </div>
</div>
<?php
    include_once('./vues/footer.php');
?>

</body>
</html>


