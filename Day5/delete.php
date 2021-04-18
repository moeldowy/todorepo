<?php
require_once "connection.php";
$stmt=$connection->prepare('DELETE FROM users Where id=?');
$id=$_GET["id"];
$stmt->execute([$id]);
header('Location: index.php');