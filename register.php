<?php
    session_start();

    if ($_SESSION['user']) {
        header('Location: profile_user.php');
    }
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg" href="images/logo-img.png">
</head>

<body>
    <header class="header-register">
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
            <div class="register-container">
                <h1 class="register-title">Регистрация</h1>

                <form class="register" action="vendor/signup.php" method="post" enctype="multipart/form-data">
                    <label for="full_name">ФИО</label>
                    <input name="full_name" type="text" placeholder="Введите ФИО...">
                    <label for="login">Логин</label>
                    <input name="login" type="text" placeholder="Введите логин...">
                    <label for="email">Почта</label>
                    <input name="email" type="email" placeholder="Введите свою почту...">
                    <label for="avatar">Изображение профиля</label>
                    <input name="avatar" type="file">
                    <label for="password">Пароль</label>
                    <input name="password" type="password" placeholder="Введите пароль...">
                    <label for="password_confirm">Подтверждение пароля</label>
                    <input name="password_confirm" type="password" placeholder="Подтвердите пароль...">
                    <button class="reg-btn" type="submit">Зарегистрироваться</button>
                    <p class="reg-sub-text">
                        У вас уже есть аккаунт? - <a class="reg-sub-text__link" href="authorization.php">Авторизируйтесь</a>!
                    </p>
                    <?php 
                        if ($_SESSION['message']) {
                            echo '<p class="reg-msg">'. $_SESSION['message'] .'</p>';
                        }
                        unset($_SESSION['message']);
                    ?>
                </form>
            </div>

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