<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($check_user) > 0) { // Если нам возвращает больше нуля, то значит мы авторизировались
        
        $user = mysqli_fetch_assoc($check_user);
        
        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "login" => $user['login'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "status" => $user['status']
        ];

        header('Location: ../profile_user.php');

    } else { // А если мы не авторизировались, то мы выводим сообщение
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../authorization.php');
    }