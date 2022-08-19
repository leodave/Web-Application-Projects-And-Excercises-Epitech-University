<?php
$name= "platypus";
if (isset($_GET['name'])){
    $name= $_GET['name'];
}
    echo "hello " . $name;