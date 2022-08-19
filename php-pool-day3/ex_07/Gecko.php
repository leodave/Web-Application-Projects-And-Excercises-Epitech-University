<?php

class geckos {
    private $Age;
    private $name;
    private $energy =100;

    public function __construct($name,$Age){
        $this->name = $name;
        $this->Age=$Age;
        echo "Hello $this->name!\n"; 
        }
    public function __destruct(){
        echo "Bye $this->name!\n";
        }
    function getName(){
        return $this->name; 
    }
    function getAge(){
       return $this->Age;
    }
    function setAge($age){
       $this->Age = $age;
    }
    function status(){
        switch ($this->Age){
        case 0:
        echo "Unborn Gecko\n";
        break;

        case 1:
        case 2:
        echo "Baby Gecko\n";
        break;
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:        
        echo "Adult Gecko\n";
        break;
        case 11:
        case 12:
        case 13:
        echo "Old Gecko\n";
        default:
        echo "Impossible Geckos";
        }   
    }
    public function hello($string) {
        if (is_numeric($string)) {
            for ($x = 0; $x < $string; $x++) {
                echo  "Hello I'am $this->name\n";}
            }
        
        elseif(is_string($string) AND $this->name=""){
            echo "Hello $string\n";
        }
    }
    function eat($str){
        if ($str == "Meat" AND $str<90){
            echo "Yummy!\n";
            $this->energy+10;
        } elseif ($str == "Vegetable" AND $str>10){
            echo "Erk!\n";
            $this->energy-10;
        } else {
             echo "I cant eat this.\n";
        }
    }
    function getEnergy(){
        return $this->energy;

    }
    public function setEnergy($energy){
            $this->energy=$energy;
    }
    public function work(){
           if ($this->energy >= 25){
               echo "I am working T.T\n";
                $this->energy-9;
        }   else{
            echo "hey... i am too sleepy, better take a nap!\n";
              $$this->energy + 50;
        }
    }
}









