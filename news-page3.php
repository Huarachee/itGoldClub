<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая ежегодная онлайн-конференция Huawei «Цифровое сообщество 2021»</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header__news-page3">
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
                <h1 class="info-page__title">Вторая ежегодная онлайн-конференция Huawei «Цифровое сообщество 2021»</h1>
                <div class="info-page__sub-info-container">
                    <div class="sub-info-container__date">Дата: 2021-11-09</div>
                    <a class="sub-info-container__section--link" href="index.php">
                        <p class="sub-info-container__section--text">Раздел: #Новости</p>
                    </a>
                </div>
            </div>
            <div class="line"></div>
            <img class="info-page__img" src="images/news-img/news-img3.jpg" alt="" width="850" height="500">
            <p class="info-page__text">
                Приглашаем на главное IT-событие осени 2021 – Вторую ежегодную онлайн-конференцию Huawei «Цифровое сообщество 2021», посвященную технологиям завтрашнего дня – интернету вещей и облачным вычислениям, дополненной реальности и цифровой энергетике, сетям пятого поколения и автопилотам.

                В общем, всё то, о чем ещё вчера мы с упоением читали в романах Sci-Fi, уже сегодня эксперты лидеров рынка – Huawei, СБЕРа, МТС, Яндекса и других – готовы показать вам! Полный список докладчиков и тем выступлений можно посмотреть здесь.

                HDCC 2021 – это интерактивное мероприятие, которое позволит в полной мере участвовать в работе форумов, сессий и выставок. Зарегистрировавшиеся участники не только смогут получить инсайды от признанных лидеров ИКТ-рынка, но и посетить интерактивную выставку и выиграть призы в конкурсе, который пройдет среди всех посетителей конференции.

                «Участие в конференции HDCC 2021 – это еще одна возможность ознакомиться с трендами развития информационно-коммуникационных технологий, как в мире, так и в России, а также узнать о последних достижениях в цифровой энергетике, облачных технологиях и мобильных экосистемах, – отмечает Дэниел Чжоу, президент Huawei в Евразии,– Вместе с ведущими экспертами в области ИКТ мы изучим практические кейсы использования цифровых бизнес-моделей в различных отраслях и обсудим последние решения для развития бизнеса в эпоху цифровых технологий. Huawei верит в то, что объединение усилий поможет преодолеть все вызовы и найти новые возможности для процветания ИКТ-сферы Евразии».

                Расписание конференции
                День первый (26 октября, вторник)

                9.30-10.00 Открытие HDCC 2021

                10.00-12.30 Пленарная сессия

                14.00-17.00 Три параллельных потока трансляций:

                Форум «Экосистема облачных технологий»

                Форум «Локализация: Опыт ИКТ-индустрии»

                Форум «Максимальный пользовательский опыт 2021»

                17.00-18.30 Виртуальная выставка «Цифровое сообщество 2021»

                День второй (27 октября, среда)

                10.00-13.30 Три параллельных потока трансляций:

                Саммит «Цифровая Энергетика Евразии»

                Huawei Developer Day

                Партнерская конференция «ИКТ-сервисы в Евразии»

                14.00-17.00 Виртуальная выставка «Цифровое сообщество 2021»

                17.00-17.30 Церемония закрытия HDCC 2021
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