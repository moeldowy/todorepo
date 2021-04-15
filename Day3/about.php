<?php
session_start();

$user=$_POST['username'];
$pass=$_POST['password'];
$users=[
        0=>["username"=>"ali","password"=>123456],
        1=>["username"=>"ashraf","password"=>123456],
        2=>["username"=>"mohammed","password"=>456789]
];

for($i=0,$count=count($users);$i<$count;$i++){
    if(in_array($user,$users[$i])&&
        in_array($pass,$users[$i])){
        $_SESSION["username"]="ashraf";
        Header('Location: index.php');
    }else{
        echo "no";

    }
}
//var_dump($users);
//if($user=="eslam"&$pass==123456){
//    $_SESSION["username"]=$user;
//    //echo "Welcome, $user";
//}else{
//    //echo "Wronge username or password";
//}
?>
<a href="logout.php">Logout</a>
<!--<a href="index.php">Home Page</a>-->
<!--<a href="about.php">About Page</a>-->
