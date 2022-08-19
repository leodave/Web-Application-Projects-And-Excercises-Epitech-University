<?php

class Gecko {

    private $Age;
    private $name;
    
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
       return $this->age;
    }
    function set_Age(){
       return $this->age;
    }
    function status(){
        switch ($this->Age){
        case 0:
        echo "unborn Gecko\n";
        break;

        case 1:
        case 2:
        echo "baby Gecko\n";
        break;
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:        
        echo "adult Gecko\n";
        break;
        case 11:
        case 12:
        case 13:
        echo "old Gecko\n";
        case null:
        echo "impossible Geckos";
        break;
        }   
    }
}
