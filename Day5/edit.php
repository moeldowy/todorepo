<?php
require_once "connection.php";
require_once "User.php";
$stmt = $connection->prepare('SELECT * FROM users Where id=?');
$id = $_GET["id"];
$stmt->execute([$id]);
$data=$stmt->fetchAll(PDO::FETCH_CLASS,'User');
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title>Users management system</title>
    </head>
<body>
<div class="container">
    <div class="row">
    <center><h2>Users management system</h2></center>
        <a href="index.php">Home</a>
    <div class="col-4">


    <?php foreach ($data as $user):?>
        <h4>Update user : <?= $user->name;?></h4>
        <hr>
    <form class="row g-3" action="update.php" method="post">
        <div class="col-md-12">
            <label for="name" class="form-label">Name</label>
            <input type="hidden" name="id" value="<?= $user->id?>">
            <input type="text" class="form-control" id="name" name="name" value="<?=$user->name;?>">
        </div>
        <div class="col-md-6">
            <label for="username" class="form-label">UserName</label>
            <input type="text" class="form-control" id="username" name="username"  value="<?=$user->username;?>">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password"  value="<?=$user->password;?>">
        </div>
        <div class="col-6">
            <label for="bod" class="form-label">Birth of Date</label>
            <input type="date" class="form-control" id="bod" name="birth_of_date"  value="<?=$user->birth_of_date;?>">
        </div>
        <div class="col-6">
            <label class="form-label">Married Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="married" id="yes" value="yes" <?= ($user->married=="yes")?'checked':''; ?>>
                <label class="form-check-label" for="yes">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="married" id="no" value="no" <?= ($user->married=="no")?'checked':''; ?>>
                <label class="form-check-label" for="no">
                    No
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </div>
    </form><?php endforeach;?>
    </div>
    </div>
</div>
</body>
</html>
