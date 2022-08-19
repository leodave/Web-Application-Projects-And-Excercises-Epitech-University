<?php
//session_destroy();
setcookie("name", "50");
function update_cookie($name,$value){
    if (isset($_COOKIE['name'])) {
        unset($_COOKIE['name']); 
        setcookie($name,$value, time()+3600, '/'); 
        echo "true";
    } 
    else {
        echo "no";
    }
}
update_cookie('dave','hello');