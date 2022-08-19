<?php
    interface IUnit{
        public function equip($e);
        public function attack($a);
        public function receiveDamage($r);
        public function moveCloseTo($m);
        public function recoverAP();
}
 abstract class AMonsters{
     private $name;
     private $hp=0;
     private $ap=0;
     private $weapon;
     protected $melee=true;
     protected $a;
    
     function getname(){
         return $this->name;
        }
     function gethp(){
        return $this->name;
        }
    function getap(){
        return $this->name;
        }
    function getWeapon(){
        return $this->Weapon;
        }
    private $e;
    private $r;
    private $m;
    private $Ap;

    function equip($e=null){
        if (!($e instanceof Aweapon)){
            throw new Exception ("Error in AspaceMarine. Parameter is not an Aweapon");
        }
        elseif($e instanceof Aweapon){
            $this->weapon= $e;
            echo " $this->name has been equipped with a $e.";
        }
        elseif($e==null){
            echo " $this->name Hey, this is crazy. I’m not going to fight this empty handed.\n";
        }
    }
     function attaack($a){
        if (!($a instanceof IUnit)){
            throw new Exception("Error in ASpaceMine. Parameter is not an IUnit.");
        }else 
            { $this->a=$a;
        }
    }
    function moveCloseTo($m){ 
        if (!($m==$this->melee)){           
        echo "$this->name: I’m too far away from $this->a\n";
        } $this->m=$m;  
        if (($this->m==$this->melee) AND ($this->Ap>=$this->apcost)){
              echo "$this->name: attack's  $this->a with a $this ->weapon";
            $this->m->attack($this->a);
            $this->m->RecieveDamage($this->r);
        }
    }
        function receiveDamage($r){
            $this->r=$r;
            // if r is les than hp give r-hp .but else destruct monster. amd create a destruct function
             if ($this->r < $this->hp){
                 $this->r - $this->hp;
        } else {
            $this->r->__destruct();
        }
    }
    function recoverAp(){
        if ($this->Ap<43){
        $this->Ap= $this->Ap+9;
        }

    }
    function __destruct(){
        echo "terminated\n";
    }
}
class MArine extends AMonster{

     function __construct(){
             echo "$this->name on duty\n";
     }
     


}