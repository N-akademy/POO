<?php
require "./classes/Character.php";




$character1 = new Character("Fenrir");
$character2= new Character("Ryouma");


echo $character1->attack($character2);
echo'<br>';
echo'<br>';
while ($character1->isAlive() && $character2->isAlive()){
    echo $character1->attack($character2);
    //echo"$character1->name attaque $character2->name .$character2->name a perdu 15 points de vie et il lui en reste $character2->lifePoint";
    echo'<br>';
    if($character2->isAlive()){
        echo $character2->attack($character1); 
        echo'<br>';
        echo'<br>';
    }
}

