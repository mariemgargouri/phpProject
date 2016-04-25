<?php
class Personne
{
public $nom;
public $prenom;

public function __construct() {}
public function boire()
{
echo 'La personne boit<br/>';
}
public function afficher()
{
echo 'Bonjour'.$this->nom.' '.$this->nom;
}
}
?>