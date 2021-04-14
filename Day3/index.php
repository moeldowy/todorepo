<?php
session_start();
//Regular Expression
//validation & sanitization
//$phone="31235456855";
////Egy phone pattern
//$pattern="/^(01)[0-9]{9}$/";
////echo preg_match($pattern,$phone);
//$email="ali@g    oogle.com";
//echo filter_var($email,FILTER_SANITIZE_EMAIL);
//$valid_email=filter_var($email,FILTER_VALIDATE_EMAIL);
//if($valid_email==false){
//echo"falseeeee";
//}else{
//echo"good";
//}
//$married="no";
//echo filter_var($married,FILTER_VALIDATE_BOOLEAN);
/*$username="Mahmoud";
echo $username;
$GLOBALS
$_GET
$_POST
$_SESSION
$_COOKIES
$_SERVER
$_FILES
$_ENV*/
//var_dump($_GET);
//echo $_SERVER["PHP_SELF"];
?>
<!--<table>-->
<!--    <tr><td style="color:red;">Mohammed Osama</td></tr>-->
<!--    <tr><td>The eregi_replace() function operates exactly like ereg_replace(), except that the search for pattern in string is not case sensitive except that the search for pattern in string is not case sensitive except that the search for pattern in string is not case sensitive.</td></tr>-->
<!--    <tr><td style="color:blue;">-->
<!--            --><?php
//
//            if(isset($_POST["comment"])){
//                echo $_POST["comment"];
//            }
//            ?>
<!--        </td></tr>-->
<!--    <tr><td>-->
<!--            <form action="--><?php //echo $_SERVER["PHP_SELF"]?><!--" method="post">-->
<!--                <input type="text" name="comment">-->
<!--                <input type="submit" value="Send">-->
<!--            </form>-->
<!--        </td></tr>-->
<!--</table>-->
<?php
//var_dump($_SESSION);
    if(empty($_SESSION)):?>
    <h1>Login</h1>
    <form action="about.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
<?php else:echo"you r already loggedin";
endif;
?>

