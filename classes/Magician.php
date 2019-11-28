<?php
class Magician extends Character{
    private $magicPoint =100 ;
    private $shield = FALSE;
    private $fireball= false;

    public function __construct($name)
    {   
        parent :: __construct($name);
    }

    public function spell ($target){
        $action = rand(1,10);
        if ($action<=7){
            return $this->fireBall($target);
        }else if($action >=8){
            return $this->shield();
        }  
    }

    private function fireBall ($target){
        $cost = rand(0,25);
        if ($this->magicPoint >= $cost){
            $this->magicPoint -= $cost;
            $this->damage = $cost*2;  
            $target->setlifePoint($this->damage);
            $status = "$this->name ($this->magicPoint PM ) envoie une attaque FireBall sur $target->name . $target->name a perdu $this->damage PV et il lui reste $target->lifePoint PV !";
        }else{
            $status = "$this->name n'a pas assez de points de point de magie!";
        }
        return $status;
    }
        

    private function shield (){
        $this->shield =true;
        return"$this->name ($this->magicPoint PM ) a utilisé son Bouclier Magique .";
    }
        
    public function setLifePoint($pain){
        if($this->shield==true){
            $this->shield=false;
        }else if($this->shield==false){
            $this->lifePoint -= $pain;
        } 
        
        if ($this->lifePoint<=0){
            $this->lifePoint = 0 ;
            return;
        }
    }
}

    




