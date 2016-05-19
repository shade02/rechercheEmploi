<!DOCTYPE html>
<?php
    if (!ISSET($_SESSION)) session_start();
?>
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
        
        $dao = new AfficheDAO();
        $a = $dao->find($_REQUEST['numMod']);
    ?>
        <form action="?action=majaffiche" method="post">
           <h1>Modifier l'offre d'emploi</h1>
            <div class="alert alert-warning">
                <p><strong>Attention!</strong> Assurez-vous que les champs pour l'expérience, le statut et la durée sont bien séléctionnés.</p>
            </div>
            <div class="form-group">
                <label for="titre">Titre du poste: </label>
                <input type="text"  class="form-control" name="titre" value="<?php echo $a->getTitrePoste(); ?>"/>
<?php
    if(isset($_REQUEST['messageErreurTitre'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Erreur !  </strong><?php echo $_REQUEST['messageErreurTitre'] ?>
                </div>
<?php
    }
?>
            </div>
            <div class="form-group">
               
                <label for="description">Description : </label>
                <textarea class="form-control" name="description" rows="8"><?php echo $a->getDescription(); ?></textarea>
         
            </div>
            <div class="form-group">
                <label for="niveau">Niveau de scolarité : </label>
                <select class="form-control" name="niveau" value="<?php echo $a->getNiveau(); ?>">
                    <option>Secondaire</option>
                    <option>Collégial</option>
                    <option>Universitaire</option>
                </select>    
            </div>
            <div class="form-group">
                <label for="experience">Années d'expérience : </label>
                <select class="form-control" name="experience" value="<?php echo $a->getExp(); ?>">
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
                <input type="text" class="form-control" name="salaire" value="<?php echo $a->getSalaire(); ?>"/>
<?php 
    if(isset($_REQUEST['messageErreurSalaire'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Erreur !  </strong><?php echo $_REQUEST['messageErreurSalaire'] ?>
                </div>
<?php
    }
?>            
            </div>
            <div class="form-group">
                <label for="statut">Statut: </label>
                <select class="form-control" name="statut" value="<?php echo $a->getStatut(); ?>">
                    <option>Temps plein</option>
                    <option>Temps partiel</option>
                    
                </select> 
   
            </div>
            <div class="form-group">
                <label for="duree">Durée : </label>
                <select class="form-control" name="duree" value="<?php echo $a->getDuree(); ?>">
                    <option>Indéterminé</option>
                    <option>Moins de 1 an</option>
                    <option>1 an</option>
                    <option>2 ans</option>
                    <option>3 ans et +</option>
                </select> 
  
            </div>
            <div class="form-group">
                <label for="contact">Personne à contacter: </label>
                <input type="text"  class="form-control" name="contact" value="<?php echo $a->getContact(); ?>"/>
            </div>
            
            <div class="form-group">
                <label for="telephone">Telephone: </label>
                <input type="text"  class="form-control" name="telephone" value="<?php echo $a->getTel(); ?>"/>
<?php
    if(isset($_REQUEST['messageErreurTelephone'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Erreur !  </strong><?php echo $_REQUEST['messageErreurTelephone'] ?>
                </div>
<?php
    }
?>
            </div>
            <div class="form-group">
                <label for="courriel">Courriel: </label>
                <input type="text"  class="form-control" name="courriel" value="<?php echo $a->getCourriel(); ?>"/>
<?php
    if(isset($_REQUEST['messageErreurCourriel'])) {
?>        
                <div class="alert alert-danger">
                    <strong>Erreur !  </strong><?php echo $_REQUEST['messageErreurCourriel'] ?>
                </div>
<?php
    }
?>
            </div>
            <br />
            <input name="action" value="majaffiche" type="hidden" />
            <button type="submit" class="btn btn-default">Mettre à jour</button>
            <button type="submit" class="btn btn-default"><a href="?action='afficherprive">Annuler</a></button>
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


