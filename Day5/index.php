<?php
require_once "connection.php";
require_once "User.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Users management system</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <center><h2>Users management system</h2></center>
            <div class="col-4">
                <h4>Create new user</h4>
                <hr>
                <form class="row g-3" action="insert.php" method="post">
                    <div class="col-md-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-md-6">
                        <label for="username" class="form-label">UserName</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="col-6">
                        <label for="bod" class="form-label">Birth of Date</label>
                        <input type="date" class="form-control" id="bod" name="birth_of_date">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Married Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="married" id="yes" value="yes">
                            <label class="form-check-label" for="yes">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="married" id="no" value="no" checked>
                            <label class="form-check-label" for="no">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="save" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Birth of Date</th>
                        <th scope="col">Marrid</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    //query = prepare + excute;
                    $stmt=$connection->prepare ('SELECT * FROM users');
                    $stmt->execute();
                    //handel fetching mode [scoop operator]
                    $users=$stmt->fetchAll(PDO::FETCH_CLASS,'User');
                    ?>

                    <?php
                    foreach ($users as $user):?>
                        <tr>
                            <th scope="row"><?= $user->id;?></th>
                            <td><?= $user->name;?></td>
                            <td><?= $user->username;?></td>
                            <td><?= $user->password;?></td>
                            <td><?= $user->birth_of_date;?></td>
                            <td><?= $user->married;?></td>
                            <td>Edit Remove</td>
                        </tr>
                   <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>