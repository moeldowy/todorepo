<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Welcome to my website</h1>
    <ul>
        <?php
        $age=10;
        //echo ($age==30)?"correct":"false";
        if($age==20):?>
          <h2>True</h2>
        <?php else:?>
            <h2>false</h2>
        <?php endif;
        $color="red";
        echo"
            <table border='2px' style='background-color:{$color} '>
                    <tr><td>dfsfdsfsdfdsfsd</td></tr>
            </table>
        ";

        foreach($names as $name):?>
          <li><?= $name;?></li>
        <?php endforeach;
        ?>
        <?php
            for($i=0;$i<=5;$i++):?>
                <img src="demo-image1.png" width="50px">
        <?php endfor;?>
    </ul>
</body>
</html>