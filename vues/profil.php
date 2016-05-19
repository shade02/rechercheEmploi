<?php
    if (!ISSET($_SESSION)) session_start();
?>
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
<?php
    if( isset($_SESSION['role'] ) && $_SESSION['role'] == 'employeur' ) {        
?>        
            <h1>Profil de l'employeur</h1>
            <form action="?action=sauvegarder" method="post">
                <div class="form-group">
                    <label for="nomEntreprise">Nom de l'entreprise : </label>
                    <input type="text"  class="form-control" name="nomEntreprise" value="<?php if(isset($_SESSION['nomEntreprise'])) echo $_SESSION['nomEntreprise']; ?>"/>
                    <label for="courriel">Courriel : </label>
                    <input type="text"  class="form-control" name="courriel" value="<?php if(isset($_SESSION['courriel'])) echo $_SESSION['courriel']; ?>"/>
                    <label for="telephone">Téléphone : </label>
                    <input type="text"  class="form-control" name="telephone" value="<?php if(isset($_SESSION['telephone'])) echo $_SESSION['telephone']; ?>"/>
                    <br />                    
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
            </form>
<?php
    } else if( isset( $_SESSION['role'] ) && $_SESSION['role'] == 'candidat' ) {
?>
            <h1>Profil du candidat</h1>
            <form action="?action=sauvegarder" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom : </label>
                    <input type="text"  class="form-control" name="nom" value="<?php if(isset($_SESSION['nom'])) echo $_SESSION['nom']; ?>"/>
                    <label for="prenom">Prénom : </label>
                    <input type="text"  class="form-control" name="prenom" value="<?php if(isset($_SESSION['prenom'])) echo $_SESSION['prenom']; ?>"/>
                    <label for="courriel">Courriel : </label>
                    <input type="text"  class="form-control" name="courriel" value="<?php if(isset($_SESSION['courriel'])) echo $_SESSION['courriel']; ?>"/>
                    <label for="cv">CV : </label>
                    <input type="file"  name="fileToUpload" id="fileToUpload"/>
                    <br />                    
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    <?php 
    if(isset($_REQUEST['messageFichier'])) {
?>        
                <div class="alert alert-info">
                    <strong>Attention!</strong><?php echo $_REQUEST['messageFichier'] ?>
                </div>
<?php
    }
?>            
                </div>
            </form>
<?php
    }
?>
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