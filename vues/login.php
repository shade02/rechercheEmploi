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
    <?php
	if (ISSET($_REQUEST["global_message"]))
	   $msg="<span class=\"warningMessage\">".$_REQUEST["global_message"]."</span>";
	$u = "";
	if (ISSET($_REQUEST["username"]))
		$u = $_REQUEST["username"];
?>
        <div class="col-sm-offset-1 col-sm-5">    
            <form id="loginForm" class="form" role="form">
                <h2>Connexion</h2>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="employeur">Employeur
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="candidat">Chercheur d'emplois
                </label>
                
                <div class="form-group">
                    <label for="username">Nom d'utilisateur: </label>
                    <input type="text"  class="form-control" name="username" value="<?php echo $u?>"/>
                    <?php if (ISSET($_REQUEST["field_messages"]["username"])) 
				echo "<span class=\"warningMessage\">".$_REQUEST["field_messages"]["username"]."</span>";
                    ?>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe: </label>
                    <input type="password" class="form-control" name="password"/>
                    <?php if (ISSET($_REQUEST["field_messages"]["password"])) 
				echo "<span class=\"warningMessage\">".$_REQUEST["field_messages"]["password"]."</span>";
                    ?>
                </div>
                <input name="action" value="connecter" type="hidden" />
                <button type="submit" class="btn btn-default">Connexion</button>
            </form>
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