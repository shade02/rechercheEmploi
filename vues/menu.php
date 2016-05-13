<?php
if (!ISSET($_SESSION)) session_start();
 if (ISSET($_SESSION["role"]) && $_SESSION["role"]=="employeur"){
?>
    <div class="col-sm-2 sidenav">
        <p><a href="#">Créer une offre d'emploi</a></p>
        <p><a href="#">Mes offres d'emploi</a></p>
        <p><a href="#">Listes des offres d'emploi</a></p>
        <p><a href="#">Rechercher des candidats</a></p>
    </div>
<?php
 }else {
?>

<div class="col-sm-2 sidenav">
    <p><a href="#">Consulter les offres</a></p>
</div>
<?php
 }
 ?>