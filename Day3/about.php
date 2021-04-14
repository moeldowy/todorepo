<?php
$user=$_POST['username'];
$pass=$_POST['password'];

if($user=="eslam"&$pass==123456){
    echo "Welcome, $user";
}else{
    echo "Wronge username or password";
}
?>
<!--<a href="index.php">Home Page</a>-->
<!--<a href="about.php">About Page</a>-->
