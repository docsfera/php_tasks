<?php

require_once './config/connect.php';

$users = mysqli_query($connect, "SELECT * FROM `Users` ORDER BY `name` ");
$users = mysqli_fetch_all($users);

if(!$users){
    header('Location: /auth.php');
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./styles.css">

</head>
<body>

    <div class="tasks">

        <?php 
        $user_id = $_GET['111'];
        $tasks = mysqli_query($connect, "SELECT * FROM `Tasks` WHERE `user_id` = '$user_id' ORDER BY `id` DESC");
        $tasks = mysqli_fetch_all($tasks);
        
        foreach ($tasks as $task) {
            ?>
            <div class="task">

                <a class="task__settings" href="update.php?id= <?= $task[0] ?>">
                    <div class="oval"></div>
                    <div class="oval"></div>
                    <div class="oval"></div>
                </a>

                <p class="task__item">Name</p>
                <p class="task__name"><?= $task[1] ?> </p>
                <p class="task__item">Description</p>
                <p class="task__name"><?= $task[2] ?> </p>
                <p class="task__item">Status</p>

                <?php
                    if($task[3] == 0){ ?>
                        <p class="task__name">Not completed</p>    
                    <?php }else{ ?>
                        <p class="task__name">Completed</p>
                    <?php } ?>
            </div>
            <?php
        }
        ?>

        
        
    </div>

    <div class="users">
        <h2 class="users__title">Users</h2>
        <form class="users__form" action="" method="GET">
        <select class="users__select" name="111">
        <?php
        
        foreach ($users as $user) {
            if($_GET['111'] == $user[0]){
            ?>
                <option selected value='<?= $user[0] ?>'><?= $user[1] ?></option>
            <?php
            }else{ ?>
                <option value='<?= $user[0] ?>'><?= $user[1] ?></option>
            <?php 
            }
        }
        ?>
          
        </select>
        <input class="users__input" type="submit" value="Update">
        </form>

        <a class="create__link" href="create.php">Create task</a>
        <a class="create__link" href="auth.php">Create user</a>
    </div>


    

</body>
</html>