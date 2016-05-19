<?php
if (!ISSET($_SESSION)) session_start();
 if (ISSET($_SESSION['connecte']) && ISSET($_SESSION["role"]) && $_SESSION["role"]=="employeur"){
?>
    <div class="col-sm-2 sidenav">
        <p><a href="?action=creer">Créer une offre d'emploi</a></p>
        <p><a href="?action=afficherprive">Mes offres d'emploi</a></p>
        <p><a href="?action=affichertout">Listes des offres d'emploi</a></p>
        <p><a href="?action=affichercandidats">Rechercher des candidats</a></p>
    </div>
<?php
 }else {
?>

<div class="col-sm-2 sidenav">
    <p><a href="?action=affichertout">Consulter les offres</a></p>
</div>
<?php
 }
 ?>