<?php
try{
    $connection=new PDO('mysql:host=localhost;dbname=todoappdb','root','');

}
catch (PDOException $exp){
    echo $exp->getMessage();
}
