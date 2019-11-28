<?php

abstract class Character{
    //public $lifePoint = 100;
    //private $damage =15;
    public $name;
    protected $lifePoint = 100;
    protected $damage;//Passage en protected pour que les fille ai un acces au données//
    //protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isAlive(){
        if ($this->lifePoint > 0)
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function getLifePoint(){
        return $this->lifePoint;
    }

    public function getName(){
        return $this->name;
    }













}
