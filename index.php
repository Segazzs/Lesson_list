<?php

require_once 'config/connect.php';

if (!$connect) {
    echo 'Error connect to database!';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <h1>Hello, world!</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Teacher</th>
            <th></th>
            <th></th>
        </tr>

        <tr>
            <?php 
                $lessons = mysqli_query($connect, "SELECT * FROM `lessons`");
                $lessons = mysqli_fetch_all($lessons);
                
                foreach ($lessons as $lesson) {

                    ?>

                    <tr>
                        <td><?= $lesson[0] ?></td>
                        <td><?= $lesson[1] ?></td>
                        <td><?= $lesson[2] ?></td>
                        <td><a href="update.php?id=<?= $lesson[0] ?>">Update</a></td>
                        <td><a style="color: red" href="vendor/delete.php?id=<?= $lesson[0] ?>">Delete</a></td>
                    </tr>

                    <?php
                }
            ?>
        </tr>
    </table>

    <h3>Add new lesson</h3>

    <form action="vendor/create.php" method="post">
        <p>Name</p>
        <input type="text" name="name">
        <p>Teacher</p>
        <input type="text" name="teacher"> <br> <br>
        <button type="submit">Add new lesson</button>
    </form>
</body>
</html>