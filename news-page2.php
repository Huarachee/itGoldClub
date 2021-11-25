<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Глава Intel: мировой дефицит микросхем продлится до 2023 года</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header__news-page2">
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
        </div>
    </header>
    <section class="info-page">
        <div class="container">
            <div class="info-page__title-container">
                <a class="info-page__arrow-left-link" href="index.php"><img class="info-page__arrow-left-img" src="images/news-img/arrow-left.svg" alt="" width="52" height="52"></a>
                <h1 class="info-page__title">Глава Intel: мировой дефицит микросхем продлится до 2023 года</h1>
                <div class="info-page__sub-info-container">
                    <div class="sub-info-container__date">Дата: 2021-11-09</div>
                    <a class="sub-info-container__section--link" href="index.php"><p class="sub-info-container__section--text">Раздел: #Новости</p></a>
                </div>           
            </div>
            <div class="line"></div>
            <img class="info-page__img" src="images/news-img/news-img2.jpg" alt="" width="850" height="500">
            <p class="info-page__text">
                Генеральный директор Intel Пэт Гелсингер сообщил, что дефицит микросхем по всему миру продолжится
                как минимум до 2023 года. Это связано с нехваткой компонентов для ноутбуков. По словам Гелсингера,
                ситуация на рынке полупроводников улучшается с каждым отчетным кварталом, но этого все равно недостаточно для удовлетворения спроса. Тем временем глава AMD Лиза Су смотрит на ситуацию более оптимистично. На прошедшей конференции Code Су заявила, что дефицит сохранится в ближайшее время, однако по прошествии времени, примерно во второй половине 2022 года, ситуация наладится, и производственные мощности достигнут пика.
                Чуть менее позитивно настроены в NVIDIA. Аналитики компании предполагают, что дефицит полупроводников будет ощутим большую часть следующего года. Мрачные прогнозы Intel связаны с двухпроцентным падением выручки подразделения CCG, которое производит чипы для ПК и ноутбуков, вызванное нехваткой комплектующих. Это уже отразилось на пятипроцентном падении продаж лэптопов. По мнению экспертов Intel, дефицит компонентов сыграл в этом главную роль. Гелсингер отметил, что проблема не только в нехватке чипов, но в так называемых комбинациях комплектующих. Например, производителю может не хватать сразу CPU, дисплеев и модулей Wi-Fi. Даже если он получит поставку процессоров, то больше времени прождет до тех пор, пока в наличии появятся другие компоненты. Несмотря на поднявшуюся на 20 % выручку от продаж ПК, Intel потерпел гораздо большие потери, лишившись части рынка ноутбуков. Кроме этого, спрос на ПК снова начал падать из-за возвращения людей в офисы и учебные заведения. Также компания уже заработала на сегодняшний день на 5 % больше, чем за тот же период в прошлом году.
            </p>
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
</body>

</html>