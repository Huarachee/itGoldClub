<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как искусственный интеллект может помочь в поиске работы? 3 примера</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header__news-page4">
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
                    <h1 class="info-page__title">Как искусственный интеллект может помочь в поиске работы? 3 примера</h1>
                    <div class="info-page__sub-info-container">
                        <div class="sub-info-container__date">Дата: 2021-11-09</div>
                        <a class="sub-info-container__section--link" href="index.php">
                            <p class="sub-info-container__section--text">Раздел: #Новости</p>
                        </a>
                    </div>
                </div>
                <div class="line"></div>
                <img class="info-page__img" src="images/news-img/news-img4.png" alt="" width="850" height="500">
                <p class="info-page__text">
                    Технологии используются в процессе поиска работы уже десятки лет, но действительно ли
                    карьерный эквивалент сервиса онлайн-знакомств со временем эволюционировал?
                    Сегодня соискатели чаще всего используют популярные поисковые системы для поиска вакансий,
                    которые подходили бы им по локации, зарплате и задачам. Они вводят базовые поисковые запросы
                    вроде «вакансии инженера в Омске», просматривают имеющиеся варианты и отправляют резюме на те
                    вакансии, которые показались им наиболее подходящими.
                    Если человек давно сидит без работы и нуждается в заработке как можно скорее, то, скорее всего,
                    он постарается «раскинуть сети» пошире в надежде, что это повысит шансы на успех —
                    он откликнется на большое количество вакансий, многие из которые не будут до конца
                    релевантными или по-настоящему желаемыми. После будет ждать приглашения на собеседование
                    хотя бы из нескольких мест.
                    Что не так с этой тактикой?
                    Полагаю, что большинство настолько привыкли к этой формуле, что даже не задумываются,
                    хороша ли она на самом деле. Но если отступить на шаг назад и посмотреть критически,
                    то станет понятно, насколько это неэффективный и странный ритуал. Учитывая, в каком
                    информационно насыщенном цифровом мире мы живем, можно предположить, что должен быть
                    способ получше.
                    Используем AI
                    Для людей, далеких от Data Science, термин «искусственный интеллект» наверняка
                    ассоциируется с образами роботов и машин, занимающихся обработкой чисел, бесконечные
                    строчки непонятного кода и тому подобное. Выглядит как-то не очень «человечно», правда?
                    Но на самом деле искусственный интеллект гораздо ближе к человеку, чем можно себе
                    представить, и он может здорово помочь в построении карьеры — если дать ему такую
                    возможность. Давайте вернемся к нашей неэффективной тактике, в которой многие застревают.
                    Что, если подойти к поиску работы с умом? Что ж, у нас хорошие новости — это возможно.

                    Как может помочь искусственный интеллект:
                    1. Установление контакта компаний с подходящими соискателями что если,
                    вместо того чтобы просто откликаться на вакансии, которые подходят по ключевым словам,
                    вам связываться с компаниями, у которых есть открытые вакансии в вашей сфере деятельности
                    и на которые вы могли бы подойти, учитывая навыки и опыт? Это можно реализовать с помощью
                    анализа резюме искусственным интеллектом. Площадки по трудоустройству, которые используют
                    технологии, чтобы помочь пользователю найти идеального работодателя, содержат фичи, которые
                    позволяют загрузить резюме и проанализировать его. Далее данные из резюме объединяются с
                    данными из миллионов других резюме. Используя полученный в результате набор данных,
                    искусственный интеллект может сравнить ваши навыки и опыт с навыками и опытом кандидатов,
                    похожих на вас, и узнать, какие работодатели и вакансии им подошли. Вместо того, чтобы
                    просто искать вакансии, искусственный интеллект оценивает вероятность удачного соответствия
                    соискателя и работодателей, у которых есть релевантные вакансии.

                    2. Геймификация определения стиля игры
                    Лучшие платформы по трудоустройству пошли еще дальше и стали использовать искусственный
                    интеллект, чтобы определить ваш идеальный формат и стиль работы, опираясь на результаты
                    персонального тестирования. Когда вы регистрируетесь в качестве участника, вам предлагают
                    сыграть в игру «стиль работы». Во время игры сложные алгоритмы обращают внимание на то,
                    как вы нажимаете на кнопки и в целом взаимодействуете с игрой. Платформа сопоставляет
                    полученную информацию с открытыми вакансиями и делает предположения, какие из компаний
                    могли бы предложить вам вакансии, которые подошли бы вам наилучшим образом, учитывая стиль
                    работы, личностные и культурные особенности. Это значимое дополнение к анализу резюме
                    искусственным интеллектом. Соискателям следует обращать внимание не только на вакансии,
                    которые подходят по навыкам и опыту, но и на те, которые соотносятся с долгосрочными целями и предлагают идеальную рабочую среду. Это повысит шансы устроиться на работу, которая будет удовлетворять не только профессиональные предпочтения и устремления, но и личные, что должно привести к более гармоничному союзу сотрудника и работодателя.

                    3. Следуй за лидером
                    Искусственный интеллект может дать вам наглядное представление карьерных историй других
                    специалистов, которые обладают схожими с вашими навыками и личностными особенностями.
                    Примеры других успешных путей развития могут вдохновить, мотивировать и дать пищу для
                    размышлений. Предположим, вы — разработчик, у которого есть цель устроиться работать в Apple.
                    Вы можете узнать, из каких компаний чаще всего люди переходили в Apple, что позволит
                    сформировать список тех работодателей, которые идеально подходят вам с точки зрения
                    культурного соответствия и навыков, и на которых следует сфокусироваться во время поисков.
                    Эта функция способствует более целенаправленному выстраиванию карьерного пути в долгосрочной
                    перспективе, что поможет спланировать ряд шагов и наметить список потенциальных
                    работодателей, которые помогут достичь желаемой карьерной точки.

                    Каковы шансы?
                    Технологии искусственного интеллекта открывают двери менее линейному, более целостному и
                    комплексному подходу к поиску работы, что помогает расширить мышление за пределы «следующей»
                    работы. Также это позволяет переосмыслить, чем вы действительно хотите заниматься, вместо
                    того, чтобы пытаться вписать себя в рамки позиций, которые могут быть неподходящими с точки
                    зрения личностных особенностей, стиля работы и долгосрочных целей. В конечном счете, машина,
                    у которой есть доступ к множеству данных, имеет больше шансов на успех в предположении,
                    какие дальнейшие шаги в карьере могут стать удачными. Это определенно дает больше шансов
                    на успех, нежели чем полагаться исключительно на интуицию. Несомненно, решения относительно
                    карьеры всегда остаются личными. Только от вас зависит, станете ли вы рассматривать
                    возможности, которые открывает искусственный интеллект. Но большинство из нас, вполне
                    вероятно, хотели бы иметь представление о разных вариантах и выбор, нежели чем совсем
                    не знать, что он есть.
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