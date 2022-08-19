<?php
$name= "platypus";
if (isset($_GET['name'])){
    $name= $_GET['name'];
}
    echo "hello " . $name;
    setcookie('name1', $name, time() + (86400 * 30), "/");
    if(!isset($_COOKIE['name1'])) {
        echo "Cookie named " . 'name1' . " is not set!";
      } else {
        echo "Cookie '" . 'name1' . "' is set!<br>";
        echo "Value is: " . $_COOKIE['name1'];
      }