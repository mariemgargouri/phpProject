<?php
session_start();
$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$_SESSION['nom']=$nom;
$_SESSION['prenom']=$prenom;

echo "Bonjour ".$_SESSION['nom']." :)" ;

?>
<a href="testsession.php">ici</a>