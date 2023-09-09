<?php
    require_once 'config/connect.php';
    
    $lesson_id = $_GET['id'];
    $lesson = mysqli_query($connect, "SELECT * FROM `lessons` WHERE `id` = '$lesson_id'");
    $lesson = mysqli_fetch_assoc($lesson);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Update new lesson</h3>

    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $lesson['id']?>">
        <p>Name</p>
        <input type="text" name="name" value="<?= $lesson['name']?>">
        <p>Teacher</p>
        <input type="text" name="teacher" value="<?= $lesson['teacher']?>"> <br><br>
        <button type="submit">Update lesson</button>
    </form>

</body>
</html>