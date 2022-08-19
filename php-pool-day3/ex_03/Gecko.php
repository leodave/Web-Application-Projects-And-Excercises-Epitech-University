<?php

class Gecko {
    private $name;

public function __construct($name){
    $this->name = $name;
    echo "Hello $this->name!\n"; 
    }
public function __destruct(){
    echo "Bye $this->name!\n";
    }
function getName(){
    return $this->name;
    }
}



