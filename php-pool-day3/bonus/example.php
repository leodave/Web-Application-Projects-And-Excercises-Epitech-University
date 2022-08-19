<?php

class geckos {

    public $name;
    public $age;
    public $energy=100;

    public function __construct(){
    
        
        
        }
    public function get_Name(){
        return $this->name;
    }
    public function get_Age(){
       return $this->age;
    }
    public function set_Age(){
       return $this->age;
    }

    function status(){
    
    switch ($this->age){
        case 0:
        echo "unborn gecko\n";
        break;

        case 1:
        case 2:
        echo "baby gecko\n";
        break;
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:        
        echo "adult gecko\n";
        break;
        case 11:
        case 12:
        case 13:
        echo "old gecko\n";
        case 14:
        echo "impossible geckos";
        break;
    
    }
    }
    public function hello($string) {
        if (is_numeric($string)) {
            for ($x = 0; $x < $string; $x++) {
                echo $x . "\n";}
            }
        
        else {
            $this->string = $string;
            
            echo "hello $string i am $this->name \n";
        }
    }
        

    public function eat($string){
        if ($string == "meat"){
            echo "yummy\n";
        } elseif ($string == "vegetable"){
            echo "ERK\n";
        } else {
             echo "i cant eat this\n";
        }
    }
    public function getenergy(){
        return $this->energy;

    }
    public function setenergy($string){
            if ($string == "meat"){
                echo $this->energy + 10 . "\n";
         }
            elseif ($string == "vegetable"){
                echo $this->energy - 10 . "\n";
         }
            else {
                echo $this->enegy;

         }
    }
    public function work($energy = null){
           if ($energy >= 25){
               echo "I am working T.T " . $energy - 9 ;
        }   else {
            echo "hey... i am too sleepy, better take a nap!" . $energy + 50;
        }
           

           
    }
    public function fraternize($happy){
           if (is_object($happy)){
              echo " i am going to drink with $this->name\n" . $energy -30 ;
        }  elseif ($energy < 25 ) {
            echo "sorry $this->name," . "i am too tired for going out tonight\n"; 
            


            } 
        }
        


    }
}

$a = new geckos("marco");
$a-> fraternize("dawit");









