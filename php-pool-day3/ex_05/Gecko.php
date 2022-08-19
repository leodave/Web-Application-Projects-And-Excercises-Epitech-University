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
    function hello($string){
        if (is_numeric($string)) {
            for ($x = 0; $x < $string; $x++) {
                echo  "Hello I'am $this->name\n";}
            }
         elseif(is_string($string)){
            echo "Hello $string I'am $this->name\n";
        }
    }
}    
$a= new Gecko(null,5);
$a->hello("dave");

