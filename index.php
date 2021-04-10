<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background:#e3e3e3;
            padding:2em;
            text-align:center;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <?php
            $city="Luxor";
            echo $city,"sad",1;
            print($city);

            //Scalar Datatypes
            $name="ali";$age=30;
            echo gettype($name)."<br>";
            echo gettype($age)."<br>";
            $militaryStatus=true;
            echo gettype($militaryStatus)."<br>";
            //Compound Datatypes
            $arr=array("ali","Luxor");
            print_r($arr);
            echo gettype($arr)."<br>";
            class Car{
                public $name="BMW Car";
            }
            $bmw = new Car();
            echo gettype($bmw)."<br>";
            //Special Datatypes
            $file= fopen("file.txt","r");
            echo gettype($file);
            $childes=NULL;
            echo gettype($childes)."<br>";
            ?>
        </h1>
    </header>
</body>
</html>