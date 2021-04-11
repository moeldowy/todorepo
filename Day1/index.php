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
        //            $city="Luxor";
        //            echo $city,"sad",1;
        //            print($city);
        //
        //            //Scalar Datatypes
        //            $name="ali";$age=34;
        //            echo gettype($name)."<br>";
        //            echo gettype($age)."<br>";
        //            $militaryStatus=true;
        //            echo gettype($militaryStatus)."<br>";
        //            //Compound Datatypes
        //            $arr=array("ali","Luxor");
        //            print_r($arr);
        //            echo gettype($arr)."<br>";
        //            class Car{
        //                public $name="BMW Car";
        //            }
        //            $bmw = new Car();
        //            echo gettype($bmw)."<br>";
        //            //Special Datatypes
        //            $file= fopen("file.txt","r");
        //            echo gettype($file);
        //            $childes=NULL;
        //            echo gettype($childes)."<br>";
        //            $x=3;
        //            $y=5;
        ////            $z= $x+$y;
        ////            echo gettype($x)."///<br>";
        ////            echo gettype($y)."****<br>";
        ////            settype($y,"string");
        ////            echo gettype($y);
        ////            echo $z;
        //            static $age=30;
        //            function calcAgeEveryYear(){
        //                $name="ali";
        //                    global $age;
        //                $age++;
        //                return $age;
        //            }
        //            echo calcAgeEveryYear();
        //            echo calcAgeEveryYear();
        //            echo calcAgeEveryYear();
        //            const NAME="Mohammed Salah";
        //            const NAME="dsfdsfdsfsd";
        //            echo NAME;
        //           $x=5;
        //           $y=&$x;
        //            echo $y."<br>";
        //            $x=6;
        //            unset($x);
        //            $x=7;
        //            echo $y;
        //            $name="ali";
        //            $$name=30;
        //            echo $akram;
        //            if($name=="ali"){
        //                echo"he is ali";
        //            }elseif($name=="mohamed"){
        //                echo"he is mohammed";
        //            }
        //            else{
        //                echo"he is not ali";
        //            }
        //            $age=35;
        //            switch($age){
        //                case 30:
        //                    echo "30 years old";
        //                    break;
        //                case 20:
        //                    echo "20 years old";
        //                     break;
        //                default:
        //                    echo "no";
        //            }
        //            for($i=0;$i<=5;$i++){
        //                echo ($i+1)." egypt<br>";
        //            }
        //            $x=0;
        //            while($x<=5){
        //                echo "Qena";
        //                $x++;
        //            }
        //check built-in functions
        /*
         *is_string().....etc
         * */
        $name=0;
        $age=30;
        //echo is_bool($name);
        echo isset($age);
        echo empty($name);
        ?>
    </h1>
</header>
</body>
</html>