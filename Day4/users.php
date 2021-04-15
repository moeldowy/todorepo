<?php
try{
    $connection= new PDO('mysql:host=localhost;dbname=todoappdb','root','');
                $query=$connection->prepare('SELECT * FROM users');
                $query->execute();
                $users=$query->fetchAll(PDO::FETCH_OBJ);?>
                <table border="2px">
                    <th>NAME</th>
                    <th>USER NAME</th>
                    <th>BirtH of DATE</th>
                    <th>Married</th>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->name; ?></td>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->birth_of_date; ?></td>
                            <td><?= $user->married; ?></td>
                        </tr>
                    <?php endforeach;?>
                </table>
<?php
}catch (PDOException $error){
    echo $error->getMessage();
}
