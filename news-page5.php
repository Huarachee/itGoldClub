<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как устроены мобильные номера. Давайте разберемся</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header__news-page5">
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
        <section class="info-page">
            <div class="container">
                <div class="info-page__title-container">
                    <a class="info-page__arrow-left-link" href="index.php"><img class="info-page__arrow-left-img" src="images/news-img/arrow-left.svg" alt="" width="52" height="52"></a>
                    <h1 class="info-page__title">Как устроены мобильные номера. Давайте разберемся</h1>
                    <div class="info-page__sub-info-container">
                        <div class="sub-info-container__date">Дата: 2021-11-09</div>
                        <a class="sub-info-container__section--link" href="index.php">
                            <p class="sub-info-container__section--text">Раздел: #Новости</p>
                        </a>
                    </div>
                </div>
                <div class="line"></div>
                <img class="info-page__img" src="images/news-img/news-img5v2.jpg" alt="" width="850" height="500">
                <p class="info-page__text">
                    Микровступление
                    Привет всем. Последнее время я писал код полей ввода input для номеров телефона и др.
                    И мне пришлось углубиться в эту тему и разобраться как устроены мобильные номера телефонов.
                    И в этой статье я хочу с вами поделиться своим опытом. Я постараюсь очень кратко, так что
                    присоединяйтесь, потратьте 15 минут, если вы этого не знаете и вам любопытно.
                    Если вы занимаетесь программированием на vue.js, то вот вам ссылка на компонент, который
                    включает различные input поля в том числе для номеров телефонов. Мне кажется данный
                    компонент может сильно облегчить вам жизнь, ниже ссылка на github и гифка как работает
                    одно из полей. На этом по вступлению все, дальше только по теме.
                    Немного истории
                    Начинается же все конечно с создание первого телефона. Самые первые телефоны были
                    предназначены только для конкретных домов и соединялись непосредственно напрямую.
                    Так как прокладывать связь дорого, их использовали либо правительственные органы либо
                    богатые люди. Так как телефония начинает активно развиваться почти сразу же приходит мысль,
                    что соединять телефоны напрямую не разумно, гораздо лучше иметь центр, к которому
                    подключены множество телефонов и данный центр может переключать вас с телефоном,
                    по его номеру. Ниже показана телефонистка, которая вручную переключает вас по номеру
                    телефона.
                    Так собственно и появляется самая первая нумерация в англии, сша и т.д. Но в самом начальном
                    этапе нумерация была децентрализована, не существовало никого стандарта номеров телефонов,
                    как правило это были трехзначные номера, например 867, так как телефонов было довольно
                    мало. И совсем немного времени проходит как уже телефонные линии покрываются почти
                    повсеместно, но так как каждая страна ведет собственную нумерацию, нету возможности
                    позвонить за рубеж, тогда то и возникает идея создание единого стандарта, которому
                    подчинялись бы все люди мира, чтобы у каждого человека был свой уникальный номер, по
                    которому можно дозвониться. Переходим к следующей главе.
                    E.123 E.164
                    E.123 и E.164 именно под такими номерами Международный Консультационный
                    Комитет по Телефонии и Телеграфии разработал рекомендации согласно которым мы
                    устанавливаем номера и по сей день.

                    Знак +

                    Первое правило, все номера в международном формате, без исключения начинаются со знака +.

                    Код страны

                    После знака + идут следующие цифры, которые указывают страну, что и называется кодом
                    страны. Длина может доходить до 6 цифр, но как правило это занимает одну две или три
                    цифры. Основная идея заключается в том, чтобы каждой стране раздать свой номер, внутри
                    которого также есть множество номеров. Как распределить эти номера должно решать
                    правительство данной страны. Как вы видите на карте выше, было принято решения поделить
                    весь мир на 9 частей в соответствии с географической принадлежностью страны, код страны
                    будет начинаться на эту цифру. Например все страны Африки начинаются с 2. Все страны
                    Северной Америки с 1 и т.д. На момент создания этой системы еще существовал СССР и было
                    принято решение выделить отдельный код +7 для всего СССР, после распада, данный номер
                    сохранился только в России и Казахстане.

                    Почему у нас работает 8 и +7 одинаково

                    Как вы можете видеть выше если вы наберете в телефоне +8, то вы позвоните в Китай,
                    либо Японию. Но если вы наберете 8 без плюса, то вы также попадаете в Россию. Это было сделано еще в СССР для удобства, чтобы не искать в телефоне знак плюс, для внутренних звонков, если оператор получает от вас телефон без знака плюс с 8, то просто меняет его на +7, но это работает только в России и по сей день. Если вы попробуете набрать такой номер телефона в другой стране, оператор просто скажет что номер некорректный, либо обработает не так как вы ожидаете. Почему именно цифра 8, точно не известно, в некоторых источниках говорят, что все служебные номера были заняты и единственное свободное было 8 поэтому его использовали, но это не так. Потому что служебные номера в СССР начинались с 0, например 01, 02, 03 .. И Номер 08 был служебным номером для ремонта телефона. А цифры 8 без нуля именно означала замену +7, но почему 8, не известно лично мне.

                    Номер телефона

                    После кода страны идет номер телефона. Таким образом, что для каждой страны мы имеем
                    столько номеров, что хватает на каждого человека проживающего в этой стране, что хватает
                    даже Китаю и Индии с 1.5 миллиардов населения и даже на все номера различных ведомств.

                    Номер региона

                    У каждой страны есть примерно по 10 миллиардов номеров. Формально правительство
                    страны само решает как распоряжаться этими номерами и кому их выдавать, но тем
                    не менее также в выше сказанных рекомендациях E.123 E.164 было рекомендовано использовать
                    всем странам первые 3 цифры из 10 для обозначения региона. Так как каждая страна делится
                    на части, например Россия на субъекты, США на штаты, Италия на провинции и т.д.
                    Количество деления в каждой стране не превышает 1000, Например в России около 80,
                    в США 50 т.д. Следовательно 3 цифры, в которой можно пронумеровать 1000 номеров,
                    хватает с головой. И данной рекомендации прислушались и выполнили почти все государства,
                    правда в некоторых местах используются первые 4 цифры для обозначения региона.
                    Так как субъектов во многих странах намного меньше чем 1000, то и выдавать можно не
                    по одному номеру, а по несколько. Например, в России выдают номер по региону и также
                    еще по оператору, например у МТС по Ленинградской области один номер, у Мегафона
                    по Ленинградской области уже другой номер и такой же принцип соблюдается во многих
                    странах. Правда с внедрением услуги сохранения номера телефона, когда ты можешь
                    менять симку сохраняя номер телефона, смысл кодов регионов стал теряться, так как
                    человек может приобрести в одном регионе, затем переехать купить новую симку и
                    cохранить старый номер от другого региона.

                    Последние семь цифр

                    Последние семь цифр указывают уникальный номер каждого абонента.
                    Если кто-то помнит или знает, раньше были домашние телефоны и как
                    правило там номера были из семи, шести или пяти цифр. На самом деле
                    при наборе такого номера оператор автоматически дописывал вначале
                    двойки или шестёрки, чтобы цифр стало семь, затем приписывает номер
                    региона в котором ты находишься затем приписывает код страны в которой
                    ты находишься и по итогу ты просто звонишь в собственный город абоненту
                    номер которого ты указал. Кстати, это работает и сейчас, вы можете написать
                    в мобильном телефоне номер из семи цифры и вы просто позвоните по номеру.
                    +7 (код города, где вы находитесь) семь цифр которые вы указали.
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
    </header>
</body>

</html>