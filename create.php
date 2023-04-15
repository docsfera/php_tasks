<?php

require_once './config/connect.php';

$users = mysqli_query($connect, "SELECT * FROM `Users`  ORDER BY `name`");
$users = mysqli_fetch_all($users);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./styles.css">

</head>
<body>
    <div class="create_task">
        <h2 class="create_task__title">Create task</h2>
        <form action="vendor/create_task.php" method="POST">
            <p class="create_task__paragraph">Name</p>
            <input class="users__select" type="text" name="name">
            <p class="create_task__paragraph">Description</p>
            <input class="users__select" type="text" name="desc">
            <p class="create_task__paragraph">Status</p>
            <select class="users__select" name="status">
                 <option value="0">Not completed</option>
                 <option value="1">Completed</option>
            </select>
            <p class="create_task__paragraph">User</p>
            <select class="users__select"  name="user_id">
            <?php
            
            foreach ($users as $user) {
                ?>
                    <option value='<?= $user[0] ?>'><?= $user[1] ?></option>
                <?php 
                }
            ?>
              
            </select>
            <button type="submit" class="button">Create</button>
        </form>
    </div>
   
</body>
</html>