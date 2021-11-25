<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Gold Club</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header-adversting">
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

            <div class="header-adversting__box-info">
                <div class="header-adversting__box-img">
                    <img class="header-adversting__image1" src="images/adverstising-img2.png" alt="img2" width="590" height="580">
                </div>

                <div class="header-adversting__box-text">
                    <p class="header-adversting__text adversting-text">
                        Как бы тебе не нравился свой прошлогодний айфон - <span class="adversting-text__span">купи новый!</span>
                    </p>
                    <a href="#" class="adversting-btn1 adversting-btn">Купить</a>
                </div>


            </div>


        </div>
    </header>
    <section class="adversting-benefits">
        <div class="container">
            <div class="adversting-benefits__box-info">
                <p class="adversting-benefits__text adversting-text">
                    Хочешь узнать преимущества iphone 13? - <span class="adversting-text__span">купи и узнаешь!</span>
                </p>
                <div class="adversting-benefits__img-container">
                    <img class="img-container__image2" src="images/adverstising-img3.png" alt="" width="800" height="450">
                </div>
            </div>
        </div>
    </section>
    <section class="adversting-headphones">
        <div class="container">
            <div class="adversting-headphones__container">
                <div class="adversting-headphones__img-container">
                    <img class="img-container__image3" src="images/adverstising-img4.png" alt="headphones" width="480" height="660">
                </div>
                <div class="adversting-headphones__text-container">
                    <div class="text-container">
                        <p class="adversting-headphones__text adversting-text">
                            Тебя устраивают наушники за 1000 рублей? <span class="adversting-text__span">Не обманывай себя</span> - возьми наши, всего за 62.990 рублей!
                        </p>
                    </div>
                    <a href="#" class="adversting-btn2 adversting-btn">Купить</a>
                </div>
            </div>

        </div>
    </section>
    <section class="adversting-notebook">
        <div class="container">
            <div class="adversting-notebook__text-container">
                <p class="adversting-text">
                    <span class="adversting-text__span">Покажи, что ты всегда занят</span> - возьми Macbook! Где ты ещё такой ноутбук возьмёшь!?
                </p>

                <a href="#" class="adversting-btn3 adversting-btn">Купить</a>
            </div>

            <div class="adversting-notebook__img-container">
                <img class="img-container__image4" src="images/adverstising-img5.png" alt="" width="1200" height="750">
            </div>
        </div>
    </section>
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

    <script src="js/index.js"></script>
</body>

</html>