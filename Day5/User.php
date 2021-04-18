<?php
class User{
    public $name;
    public $username;
    public $password;
    public $birth_of_date;
    public $married;
    public $age;

    public function __construct()
    {
       $this->age= "this {$this->name} age is:20";
    }

}