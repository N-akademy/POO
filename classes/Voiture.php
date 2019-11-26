<?php

class Voiture{
    public $nbreRoues;
    private $couleur;
    private $distance;
    private $essence;

    public function __construct($couleur)
    {
    $this->nbreRoues=$nbreRoues;
    $this->couleur=$couleur;
    $this->distance=$distance;
    $this->essence=$essence;
    }
    public function couleur()
    {
    return $this -> $couleur;
    }



    public function essence($cible)
    {
        $this->essence -= 15;
        $cible ->essence += 15;

    }

    public function getDistance()
    {
        return $this->distance;
    }
    public function setDistance($dist){
        $this->distance += $dist;
    }

    

}
