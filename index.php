<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It Gold Club</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header">
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

            <div class="adversting">
                <h3 class="adversting__title">Наш постоянный спонсор: </h3>
                <div class="adversting__box">
                    <img class="adversting__box-img" src="images/adverstising-img1.png" alt="adverstising-img1">
                    <div class="adversting__box-text">
                        <p class="box-text__text">Познакомтесь с новинками от Apple!</p>
                        <a class="box-text__btn" href="adversting.php">Посмотреть</a>
                    </div>
                </div>
            </div>

            <div class="line"></div>


        </div>
    </header>
    <section class="news">
        <div class="container">
            <h1 class="news__title">Новости</h1>
            <div class="card-box">
                <?php
                    $connect = mysqli_connect('localhost', 'root', 'root', 'it_gold_club');
                    $news_card_database = "SELECT * FROM `info_news`";
                    if ($news_output = $connect -> query($news_card_database)) {
                        foreach($news_output as $card_info) {
                            ?>
                            <div class="card">
                                <img class="card__image" src="<?= $card_info['img_news'] ?>" alt="" width="300" height="221">
                                <div class="card__text-container">
                                    <div class="text-container__date"><?= $card_info['date_add_news'] ?></div>
                                    <p class="text-container__text">
                                        <?= $card_info['title'] ?>
                                    </p>
                                    <a class="text-container__icon-link" href="<?= $card_info['link_page'] ?>"><img class="icon-link__img-icon" src="images/news-img/arrow-right.svg" alt=""></a>
                                </div>
                            </div>
                            <?php
                        }
                        $news_output->free();
                    } else {
                        echo "Че то ты набедакурил";
                    }
                    $connect -> close();
                ?>
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