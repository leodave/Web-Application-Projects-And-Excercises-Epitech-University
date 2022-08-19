<?php
Abstract class AWeapon{
   private $name;
   private $apcost;
   private $damage;
   private $melee=false;
   function getName(){
       return $this->name;
   }
function getApcost(){
       return$this->apcost;
   }
function getDamage(){
       return $this->damage;

    }
function isMelee(){
       return $this->melee;
    }
function __construct($name,$apcost,$damage){
    if((!is_string($name)) OR (!is_int($apcost)) OR (!is_int($damage))) 
        throw new Exception("Error in AWeapon constructor. Bad parameters.");
        $this->name=$name;
        $this->$apcost=$apcost;
        $this->damage=$damage;
    }
abstract function attack();
}
class PowerFist extends Aweapon{
    public function __construct(){
        parent::__construct("PoweFist", 50, 8 );
        $this->melee=true;
    }function attack(){
        echo "SBAM!!!\n";
        $this->melee=false;
    }
}
$PowerFist= new PowerFist();
$PowerFist->attack();