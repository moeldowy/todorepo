<?php
require_once 'connection.php';
if(isset($_POST["save"])&& !empty($_POST)){
    $stmt=$connection->prepare('INSERT INTO users (name,username,password,birth_of_date,married) VALUES (?,?,?,?,?)');
//place holder ? or :parameter
    $name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
    $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
    $birth_of_date=filter_input(INPUT_POST,'birth_of_date',FILTER_SANITIZE_STRING);
    $married=filter_input(INPUT_POST,'married');
    //$married=$_POST["married"];
//binding
    if( $stmt->execute(array($name,$username,$password,$birth_of_date,$married))){
       header('Location: index.php');
    }else{

    }

}else{
    echo "stop playing hamada";
}

