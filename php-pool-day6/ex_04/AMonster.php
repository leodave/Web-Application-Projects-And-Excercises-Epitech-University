<?php
interface IUnit{
    public function equip($equip);
    public function attack($attack);
    public function receiveDamage($damage);
    public function moveCloseTo($close);
    public function recoverAP();
}
abstract class AMonster implements IUnit{
 private $name;
 private $hp=0;
 private $ap=0;
 private $Damage=0;
 private $apcost=0;
 protected $attack;
 protected $melee=true;

   function getName(){
     return $this->name;
    }
   function getHp(){
    return $this->hp;
    } 
    function getAp(){
    return $this->ap;
    }
    function getDamage(){
        return $this->damage;
    }
    function __construct($name){
        $this->name=$name;
    }
    function equip($equip){
        $this->equip=$equip;
        echo "Monsters are proud and fight with their own bodies.\n";
    }
    public function attack($attack){
        $this->attack=$attack;
        if (!($attack instanceof IUnit)){
             throw new Exception("Error in AMonster. Parameter is not an IUnit.");
             }
    }
    public function moveCloseTo($close){
        if (!($close==$this->melee)){
            $this->close=$close;            ;
        echo "$this->name: is moving closer to $this->attack\n";
        }
        elseif (($close instanceof IUnit) AND ($this->close==$this->melee) AND ($this->ap>=$this->apcost)){
            return  $this->ap-$this->apcost;
            $this->receiveDamage($this->damage);
              echo "$this->name: attack's  $this->attack";
        }
    }
        function receiveDamage($damage){
            return $this->hp-$damage;
            if($this->hp<=0){
                $this->__destruct;//all method false;
            }
    }
        public function recoverAp(){
            if ($this->Ap<43){
            return $this->Ap= $this->Ap+7;
            }
        }
}
