<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новые настройки приватности Apple заставили доходы Snap упасть на 22%</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header__news-page1">
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
                <h1 class="info-page__title">Новые настройки приватности Apple заставили доходы Snap упасть на 22%</h1>
                <div class="info-page__sub-info-container">
                    <div class="sub-info-container__date sub-info-container__btns">Дата: 2021-11-09</div>
                    <a class="sub-info-container__section--link sub-info-container__btns" href="index.php">Раздел: #Новости</a>
                    <?php
                        if (!empty($_SESSION['user']['status'] == 'admin')) {
                            ?>
                            <a href="#" class="sub-info-container__btn-edit sub-info-container__btns">Редактировать статью</a>
                            <a href="#" class="sub-info-container__btn-delete sub-info-container__btns">Удалить статью</a>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="line"></div>
            <img class="info-page__img" src="images/news-img/news-img1.jpg" alt="" width="850" height="500">
            <p class="info-page__text">
                После введения новых настроек приватности на устройствах Apple, акции Snap — компании разработчика
                Snapchat, упали на 22%. Еще в феврале 2021 года генеральный директор Snap Эван Шпигель (Evan Spiegel)
                положительно отнесся к обновлению Apple, но на этой неделе заявил, что настройки конфиденциальности
                iPhone сильно ударили по рекламному бизнесу компании.В свою очередь, финансовый директор Snap Дерек
                Андерсон (Derek Andersen) заявил, что если учитывать нарушение цепочки поставок, нехватку рабочей
                силы и новые правила Apple, то выручка компании за четвертый квартал может составить от 1,16
                до 1,20 млрд долларов. До этого моменты аналитики рассчитывали на сумму в 1,36 млрд долларов.
                Также на этом фоне упали акции Facebook, Twitter и других цифровых площадок,
                продающих рекламу на своих платформах. Кроме того, от новых настроек конфиденциальности Apple
                пострадали компании, реализующие рекламу в сети и зависящее от анализа пользовательских данных.
                В обновлении iOS 14 Apple добавила новые правила для мобильных приложений. Теперь пользователь
                может отказаться от сбора и передачи другим компаниям уникальных идентификаторов устройств
                (IDFA) — приложение не может обрабатывать данные юзера до тех пора, пока он сам не даст разрешение.
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