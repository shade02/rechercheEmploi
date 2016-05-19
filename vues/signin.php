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
        <div class="col-sm-offset-1 col-sm-5"> 
        <h2>Inscrivez-vous!</h2>
        <form action="?action=inscrire" method="post" class="form">
            <div class="form-group">
                <label for="username">Nom d'utilisateur: </label>
                <input type="text"  class="form-control" name="username"/>
<?php
    if(isset($_REQUEST['messageErreurUsername'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Erreur !  </strong><?php echo $_REQUEST['messageErreurUsername'] ?>
                </div>
<?php
    }
?>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe : </label>
                <input type="password"  class="form-control" name="password"/>
<?php 
    if(isset($_REQUEST['messageErreurPassword'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Erreur !  </strong><?php echo $_REQUEST['messageErreurPassword'] ?>
                </div>
<?php
    }
?>            
            </div>
            <div class="form-group">
                <label for="courriel">Courriel : </label>
                <input type="text"  class="form-control" name="courriel"/>
<?php 
    if(isset($_REQUEST['messageErreurMail'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Erreur !  </strong><?php echo $_REQUEST['messageErreurMail'] ?>
                </div>
<?php
    }
?>            
            </div>
            <label class="radio-inline">
                <input type="radio" name="optradio" value="employeur" checked="true">Employeur
            </label>
            <label class="radio-inline">
                <input type="radio" name="optradio" value="candidat">Chercheur d'emplois
            </label>
<?php 
    if(isset($_REQUEST['messageErreurChoix'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Danger !  </strong><?php echo $_REQUEST['messageErreurChoix'] ?>
                </div>
<?php
    }
?>              
            <br />
            <button type="submit" class="btn btn-default">S'inscrire</button>
        </form> 
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


