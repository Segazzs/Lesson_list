<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$teacher = $_POST['teacher'];

mysqli_query($connect, "INSERT INTO `lessons` (`id`, `name`, `teacher`) VALUES (NULL, '$name', '$teacher')");

header('Location: /index.php');