<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$teacher = $_POST['teacher'];

mysqli_query($connect, "UPDATE `lessons` SET `name` = '$name', `teacher` = '$teacher' WHERE `lessons`.`id` = '$id'");

header('Location: /index.php');