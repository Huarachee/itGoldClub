<?php
    session_start();

    $connect = mysqli_connect('localhost', 'root', 'root', 'it_gold_club');

    // $title = $_POST['title'];
    // $news_date = $_POST['news_date'];
    // $news_img = $_POST['news_img'];
    // $news_text = $_POST['news_text'];

    // $path = 'uploads/' . time() . $_FILES['news_img']['name'];
    // move_uploaded_file($_FILES['news_img']['tmp_name'], '../' . $path);

    // mysqli_query($connect, "INSERT INTO `info_news_pages` (`id`, `title`, `news_date`, `news_img`, `news_text`) VALUES (NULL, '$title', '$news_date', '$news_img', '$news_text')");

    if (isset($_POST['title'])) {$title = $_POST['title'];}
    // if (isset($_POST['news_date'])) {$news_date = $_POST['news_date'];}
    // if (isset($_POST['news_img'])) {$news_img = $_POST['news_img'];}
    if (isset($_POST['news_text'])) {$news_text = $_POST['news_text'];}

    // $path = 'uploads/' . time() . $_FILES['news_img']['name'];
    // move_uploaded_file($_FILES['news_img']['tmp_name'], '../' . $path);

    $quer = "
    INSERT INTO `info_news_pages` (`id`, `title`, `news_date`, `news_img`, `news_text`) VALUES (NULL, '$title', NULL, NULL, '$news_text')
    ";
    $result = mysqli_query($connect, $quer);

    header('Location: ../index.php');
