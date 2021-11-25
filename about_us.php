<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header-about_us">
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

            <div class="about-us-container">
                <div class="img-about_us-container">
                    <img class="img-about_us-container__image" src="images/img-about_us.png" alt="img about us" width="300" height="300">
                </div>

                <div class="about-us-container__text-box">
                    <h1 class="text-box__title">
                        IT <span class="title__span">Gold</span> Club это:
                    </h1>
                    <p class="text-box__text">
                        Новостной портал про технологии и всё, что с ними связано.
                        <?php
                        if ($_SESSION['user']) {
                        ?>
                            <span>Спасибо, что остаешься с нами,</span>
                        <?php
                        } else {
                        ?>
                            <span>Присоединяйся к нашему сообществу и будь в тренде новостей,</span>
                        <?php
                        }
                        ?>
                        <br> <span class="text__span">Йоу!</span>
                    </p>

                    <?php
                    if ($_SESSION['user']) {
                    ?>
                        <a class="text-box__link-in" href="index.php">Читать новости</ф>
                        <?php
                    } else {
                        ?>
                            <a class="text-box__link-in" href="register.php">Авторизация/Регистрация</a>
                        <?php
                    }
                        ?>
                </div>

            </div>
        </div>
        </div>
    </header>

</body>

</html>