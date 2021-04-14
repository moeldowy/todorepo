<?php
//Regular Expression
//validation & sanitization
$phone="31235456855";
//Egy phone pattern
$pattern="/^(01)[0-9]{9}$/";
//echo preg_match($pattern,$phone);
$email="ali@g    oogle.com";
echo filter_var($email,FILTER_SANITIZE_EMAIL);
//$valid_email=filter_var($email,FILTER_VALIDATE_EMAIL);
//if($valid_email==false){
//echo"falseeeee";
//}else{
//echo"good";
//}
$married="no";
echo filter_var($married,FILTER_VALIDATE_BOOLEAN);


