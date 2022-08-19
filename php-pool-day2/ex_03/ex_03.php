<?php
$member_id = "admin";
$password = "12345";

//Key to decrypt
$key = "boomshakalaka"; 

//Comparing with our hashed data
if(md5(md5($member_id . $password) . $key)=='21232f297a57a5a743894a0e4a801fc3');
  echo "member_name:".$member_id."password:".$password;