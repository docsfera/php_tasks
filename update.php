<?php
	require_once './config/connect.php';
	$id = $_GET["id"];
	$task = mysqli_query($connect, "SELECT * FROM `Tasks` WHERE `id` = '$id'");
	$task = mysqli_fetch_assoc($task);
	$users = mysqli_query($connect, "SELECT * FROM `Users` ORDER BY `name`");
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
        <h2 class="create_task__title">Update task</h2>
        <form action="vendor/update_task.php?id=<?= $id ?>" method="POST">
            <p class="create_task__paragraph">Name</p>
            <input class="users__select" type="text" name="name" 
            value='<?= $task["name"] ?>'>
            <p class="create_task__paragraph">Description</p>
            <input class="users__select" type="text" name="desc"
            value='<?= $task["description"] ?>'>
            <p class="create_task__paragraph">Status</p>
            <select class="users__select" name="status">
            	<?php
		            if($task["status"] == 0){
		            ?>
		                <option selected value="0">Not completed</option>
		                <option value="1">Completed</option>
		            <?php
		            }else{ ?>
		                <option value="0">Not completed</option>
		                <option selected value="1">Completed</option>
		            <?php 
		            }
		        
		        ?>
            </select>
            <p class="create_task__paragraph">User</p>
            <!-- <p class="create_task__paragraph">User</p> -->
            <select class="users__select"  name="user_id">



            <?php
            
            foreach ($users as $user) {
            	if($user[0] == $task['user_id']){ 
            		?>
            		<option selected value='<?= $user[0] ?>'><?= $user[1] ?></option>
            	<?php }else{ ?>
            		<option value='<?= $user[0] ?>'><?= $user[1] ?></option>
            	<?php
            	}        
                }
            ?>
              
            </select>
            <div class="buttons">
                <button type="submit" class="button button-update">Update</button>
                <a class="button button-delete" href="vendor/delete_task.php?id=<?= $id ?>">Delete</a>
            </div>
            
        </form>
    </div>
   
</body>
</html>