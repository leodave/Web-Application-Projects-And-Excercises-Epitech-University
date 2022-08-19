<?php
//session_destroy();
setcookie("name", "50");
function remove_cookie($cookie){
    if (isset($_COOKIE[$cookie])) {
        unset($_COOKIE[$cookie]); 
        setcookie($cookie, null, -1, '/'); 
        echo "true";
    } 
}
remove_cookie('name');