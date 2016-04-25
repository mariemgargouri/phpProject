<?php
//include("Personne.php");
$_n = $_GET["nom"];
$_p = $_GET["prenom"];

if($_n=="admin" && $_p==123)
{
echo 'ok';
}
else
{
echo 'erreur';
}
/*
$p = new Personne();
$p->nom = $_n;
$p->prenom = $_p;
$p->afficher();*/
?>