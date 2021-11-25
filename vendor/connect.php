<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'it_gold_club');

    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }