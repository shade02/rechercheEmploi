<?php

if (!ISSET($_SESSION)) session_start();
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <img src="./images/Uwork.png" />
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?action=">Accueil</a></li>
        <li><a href="?action=profil">Profil</a></li>
        <li><a href="#">À propos</a></li>
        <li><a href="?action=joindre">Nous joindre</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<?php
	
	if (ISSET($_SESSION["connecte"]))
	{
?>        
        <li><p class="navbar-text">Bonjour <?php echo $_SESSION["connecte"]?></p></li>
        <li><a href="?action=deconnecter"><span class="glyphicon glyphicon-log-out"></span>Déconnection</a></li>
<?php
        }else{
?>
        <li><a href="?action=inscrire"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li> 
        <li><a href="?action=connecter"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
<?php
        }
?>
      </ul>
    </div>
  </div>
</nav>