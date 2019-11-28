<?php

class Warrior extends Character{
    
    public function __construct($name)
    {
        parent :: __construct($name);
    }
    public function spear($target){
        $cost = rand(0,25);
        $this->damage = $cost*2;  
        $target->setlifePoint($this->damage);    
        $status = "$this->name attaque $target->name . $target->name a perdu $this->damage  PV et il lui reste $target->lifePoint PV!";
        return $status;
    }

    public function setLifePoint($pain){
        $this->lifePoint -= $pain;
        if ($this->lifePoint<=0){
            $this->lifePoint = 0 ;
        }
        return;
    }
}





















    