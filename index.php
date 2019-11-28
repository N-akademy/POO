<?php

spl_autoload_register(function ($class) {
    require 'classes/' .$class . '.php';
});
// auto chargement des pages class


$char = new Warrior("Fenrir");
$char2= new Magician("Ryouma");



while ($char->isAlive() && $char2->isAlive()){
    echo $char->spear($char2);
    if (!$char2->isAlive()){
        echo'<br>';
        echo $char->getName(). " a gagné.";
    } 
    echo'<br>';
    if($char2->isAlive()){
        echo $char2->spell($char); 
        echo'<br>';
        if (!$char->isAlive()){
            echo'<br>';
            echo $char2->GetName(). " a gagné.";
        echo'<br>';
        }
    }
}



















