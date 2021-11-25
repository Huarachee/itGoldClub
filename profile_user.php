<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: register.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль пользователя</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header-profile">
        <div class="container">
            <div class="header-top">
                <a href="index.php" class="logo">
                    <img src="images/logo-img.png" alt="" class="logo__img">
                    <b class="logo__title">IT <span class="title__span">Gold</span> Club</b>
                </a>
                <menu class="header-top__menu">
                    <ul class="menu__list">
                        <li class="list__item">
                            <a href="index.php" class="item__link">
                                Главная
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="about_us.php" class="item__link">
                                О нас
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="index.php" class="item__link">
                                Новости
                            </a>
                        </li>
                        <li class="list__item">
                            <?php
                            if ($_SESSION['user']) {
                            ?>
                                <div class="item__profile-container">
                                    <a class="profile-container__link-profile" href="profile_user.php">
                                        <img class="link-profile__avatar" src="<?= $_SESSION['user']['avatar'] ?>" width="50" height="50" alt="Изображение пользователя">
                                        <p class="link-profile__full_name-text"><?= $_SESSION['user']['full_name'] ?></p>
                                    </a>

                                </div>
                            <?php
                            } else {
                            ?>
                                <a href="authorization.php" class="item__link">
                                    Авторизация/Регистрация
                                </a>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </menu>
            </div>
            <div class="profile_user__profile-box">
                <img class="profile-box__avatar" src="<?= $_SESSION['user']['avatar'] ?>" width="200" height="200" alt="Изображение пользователя">
                <div class="profile-box__text">
                    <h3 class="profile-box__full_name">ФИО: <?= $_SESSION['user']['full_name'] ?></h3>
                    <p class="profile-box__email">Почта: <a class="profile-box__email" href="#"><?= $_SESSION['user']['email'] ?></a></p>
                    <div class="profile-box__btns-container">
                        <?php
                        if (!empty($_SESSION['user']['status'] == 'admin')) {
                        ?>
                            <a href="#" class="btns-container__btn-edit btns-container">Редактировать статью</a>
                            <a href="add_article.php" class="btns-container__btn-add btns-container">Создать статью</a>
                        <?php
                        }
                        ?>
                        <a class="profile-box__logout-btn btns-container" href="vendor/logout.php">Выход</a>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <?php
            if (!empty($_SESSION['user']['status'] == 'admin')) {
            ?>
                <div class="user-management">
                    <h3 class="user-management__title">Все пользователи: </h3>
                    <?php
                    $connect = mysqli_connect('localhost', 'root', 'root', 'it_gold_club');
                    $users_card_database = "SELECT * FROM `users`";
                    if ($users_card = $connect->query($users_card_database)) {
                        foreach ($users_card as $card_user) {
                    ?>
                        <div class="user-management__card-user">
                            <img class="card-user__image" src="<?= $card_user['avatar'] ?>" alt="" width="100" height="100">
                            <div class="card-user__text-container">
                                <h5 class="card-user__full-name">ФИО: <?= $card_user['full_name'] ?></h5>
                                <h4 class="card-user__login">Логин: <?= $card_user['login'] ?></h4>
                                <a href="#" class="card-user__email">
                                    Почта: <?= $card_user['email'] ?>
                                </a>
                                <p class="card-user__status">Статус: <?= $card_user['status'] ?></p>
                            </div>
                            <div class="card-user__btn-activity">
                                <a href="#" class="btn-activity__delete">Удалить пользователя</a>
                            </div>
                        </div>
                    <?php
                        }
                        $users_card->free();
                    } else {
                        echo "Че то ты набедакурил";
                    }
                    $connect->close();
                    ?>
                </div>
            <?php
            }
            ?>

        </div>
    </header>
    <footer class="footer">
        <div class="container">
            <div class="footer-container">
                <a class="footer-container__logo logo" href="index.php">
                    <img src="images/logo-img.png" alt="" class="logo__img">
                    <b class="logo__title">IT <span class="title__span">Gold</span> Club</b>
                </a>

                <p class="footer-container__footer-copy">
                    © Все права защищены 2021.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>