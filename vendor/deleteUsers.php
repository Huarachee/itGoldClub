<!-- Удаление пользователя -->
<!-- Back-end часть -->

<?php

require_once '../vendor/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = '$id'");

header('Location: ../profile_user.php');