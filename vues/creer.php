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
        <form action="?action=publier" method="post">
           <h1>Création d'une offre d'emploi</h1>
            <p>Veuillez remplir le formulaire: </p>
            <div class="form-group">
                <label for="titre">Titre du poste: </label>
                <input type="text"  class="form-control" name="titre"/>
<?php
    if(isset($_REQUEST['messageErreurTitre'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Danger !  </strong><?php echo $_REQUEST['messageErreurTitre'] ?>
                </div>
<?php
    }
?>
            </div>
            <div class="form-group">
                <label for="description">Description : </label>
                <textarea class="form-control" name="description"></textarea>
<?php 
    if(isset($_REQUEST['messageErreurDescription'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Danger !  </strong><?php echo $_REQUEST['messageErreurDescription'] ?>
                </div>
<?php
    }
?>            
            </div>
            <div class="form-group">
                <label for="niveau">Niveau de scolarité : </label>
                <select class="form-control" name="niveau">
                    <option>Secondaire</option>
                    <option>Collégial</option>
                    <option>Universitaire</option>
                </select>    
            </div>
            <div class="form-group">
                <label for="experience">Années d'expérience : </label>
                <select class="form-control" name="experience">
                    <option>Moins de 1 an</option>
                    <option>1 à 2 ans</option>
                    <option>2 à 3 ans</option>
                    <option>3 à 4 ans</option>
                    <option>4 à 5 ans</option>
                    <option>Plus de 5 ans</option>
                </select>     
            </div>
            <div class="form-group">
                <label for="salaire">Salaire(horaire) : </label>
                <input type="text"  class="form-control" name="salaire"/>
<?php 
    if(isset($_REQUEST['messageErreurSalaire'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Danger !  </strong><?php echo $_REQUEST['messageErreurDescription'] ?>
                </div>
<?php
    }
?>            
            </div>
            <div class="form-group">
                <label for="statut">Statut: </label>
                <select class="form-control" name="statut">
                    <option>Temps plein</option>
                    <option>Temps partiel</option>
                    
                </select> 
<?php 
    if(isset($_REQUEST['messageErreurStatut'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Danger !  </strong><?php echo $_REQUEST['messageErreurStatut'] ?>
                </div>
<?php
    }
?>      
            </div>
            <div class="form-group">
                <label for="duree">Durée : </label>
                <select class="form-control" name="duree">
                    <option>Indéterminé</option>
                    <option>Moins de 1 an</option>
                    <option>1 an</option>
                    <option>2 ans</option>
                    <option>3 ans et +</option>
                </select> 
<?php 
    if(isset($_REQUEST['messageErreurDuree'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Danger !  </strong><?php echo $_REQUEST['messageErreurDuree'] ?>
                </div>
<?php
    }
?>      
            </div>
            <div class="form-group">
                <label for="contact">Personne à contacter: </label>
                <input type="text"  class="form-control" name="contact"/>
            </div>
            
            <div class="form-group">
                <label for="telephone">Telephone: </label>
                <input type="text"  class="form-control" name="telephone"/>
<?php
    if(isset($_REQUEST['messageErreurTelephone'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Danger !  </strong><?php echo $_REQUEST['messageErreurTelephone'] ?>
                </div>
<?php
    }
?>
            </div>
            <div class="form-group">
                <label for="courriel">Courriel: </label>
                <input type="text"  class="form-control" name="courriel"/>
<?php
    if(isset($_REQUEST['messageErreurCourriel'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Danger !  </strong><?php echo $_REQUEST['messageErreurCourriel'] ?>
                </div>
<?php
    }
?>
            </div>
            <br />
            <input name="action" value="publier" type="hidden" />
            <button type="submit" class="btn btn-default">Publier</button>
        </form>        
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


