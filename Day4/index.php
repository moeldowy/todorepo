<?php
class User{
    public $name;
    public $username;
    public $password;
    public $birth_of_date;
    public $married;
    public function divorce(){
        $this->married="no";
    }
}
if(isset($_REQUEST)){
    var_dump($_POST);
    echo $_POST["name"];
    $user= new User();
    $user->name=$_POST["name"];
    $user->username=$_POST["username"];
    $user->password=$_POST["password"];
    $user->birth_of_date=$_POST["birth_of_date"];
    $user->married=$_POST["married"];
   var_dump($user);
   $user->divorce();
    var_dump($user);
}
?>
<h3>Creat new User</h3>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <label>Name</label>
    <input type="text" name="name"><br><br>
    <label>Username</label>
    <input type="text" name="username"><br><br>
    <label>Password</label>
    <input type="password" name="password"><br><br>
    <label>Birth of Date</label>
    <input type="date" name="birth_of_date"><br><br>
    <label>Married</label>
    <input type="radio" name="married" value="yes">Yes
    <input type="radio" name="married" value="No">No<br><br>
    <input type="submit" value="Save">
</form>
