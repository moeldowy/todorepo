<?php
require_once "connection.php";
$stmt=$connection->prepare('UPDATE users SET name= ?,username=?,password=?,birth_of_date=?,married=? Where id=?');
$id=$_POST["id"];
$name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
$username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
$password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
$birth_of_date=filter_input(INPUT_POST,'birth_of_date',FILTER_SANITIZE_STRING);
$married=filter_input(INPUT_POST,'married');
$stmt->execute([$name,$username,$password,$birth_of_date,$married,$id]);
header('Location: index.php');