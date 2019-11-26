<?php
require "./classes/Voiture.php";




$voiture1 = new Voiture("rouge");
$voiture2 = new Voiture("jaune");

echo  $voiture->getDistance();
echo   $voiture->couleur();

$voiture2 -> essence ($voiture1);
$voiture->setDistance(50);
var_dump($voiture1);
echo'<br>';
var_dump($voiture2);