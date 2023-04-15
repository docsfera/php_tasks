<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./styles.css">

</head>
<body>
    <div class="create_task">
        <h2 class="create_task__title">Registration</h2>
        <form action="vendor/registration.php" method="POST">
            <p class="create_task__paragraph">Name</p>
            <input class="users__select" type="text" name="name">
            <p class="create_task__paragraph">Email</p>
            <input class="users__select" type="text" name="email">
            <p class="create_task__paragraph">Age</p>
            <input class="users__select" type="number" name="age">
            <p class="create_task__paragraph">Password</p>
            <input class="users__select" type="password" name="pass">
        
            <button type="submit" class="button">Create</button>
        </form>
    </div>
</body>
</html>