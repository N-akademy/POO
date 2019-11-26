<?php

class Character{
    //public $lifePoint = 100;
    //private $damage =15;
    //public $name;
    private $lifePoint = 100;
    private $damage =15;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function attack($target){
        $target->lifePoint -= $this->damage;
        if ($target->lifePoint<=0){
            $target->lifePoint = 0 ;
            return"$this->name attaque $target->name . $this->name a gagné !";
        }
        return"$this->name attaque $target->name . $target->name a perdu 15 points de vie et il lui reste $target->lifePoint point de vie !";
    }
    public function isAlive(){
        if ($this->lifePoint > 0)
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
