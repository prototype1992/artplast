<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="description" content="описание страницы">
    <meta name="keywords" content="ключевое слово1, ключевое слово2">

    <title>Карта сайта</title>

    <link rel="stylesheet" href="static/css/style.min.css"/>

</head>
<body>

<div class="wrapper">
    
    <div class="main">
        <div class="all">

            <?php require_once('template/header.php') ?>

            <div class="main-content">
                <div class="container">
                    <aside class="sidebar">

                        <ul class="right-menu">
                            <li class="right-menu__item ">
                                <a href="7_o-kompanii.php" class="right-menu__link">
                                    О компании
                                </a>
                            </li>
                            <li class="right-menu__item ">
                                <a href="9_mission.php" class="right-menu__link">
                                    Миссия
                                </a>
                            </li>
                            <li class="right-menu__item">
                                <a href="10_istoriya.php" class="right-menu__link">
                                    История
                                </a>
                            </li>
                            <li class="right-menu__item">
                                <a href="11_vakansii.php" class="right-menu__link">
                                    Вакансии
                                </a>
                            </li>
                            <li class="right-menu__item active">
                                <a href="12_nashi-klienti.php" class="right-menu__link">
                                    Наши клиенты
                                </a>
                            </li>
                        </ul>

                    </aside>
                    <div class="content-right">

                        <div class="breadcrumbs">
                            <ul>
                                <li>
                                    <a href="#">Главная</a>
                                </li>
                                <li>
                                    <span>Вакансии</span>
                                </li>
                            </ul>
                        </div>

                        <div class="content-main">
                            <h1 class="page-title">Наши клиенты</h1>

                            <p>
                                История компании "Артпласт" берет свое начало в далеком 1995 году, когда несколько студентов
                                МИФИ открыли торговую точку по продаже полиэтиленовых пакетов на московском рынке "Покровский",
                                чтобы заработать себе на учебу и досуг.
                            </p>

                            <ul class="clients-list">
                                <li class="clients-list-item clients-list-item_bdbn">
                                    <a href="">
                                        <img src="static/img/clients-img1.png" alt="1">
                                    </a>
                                </li>
                                <li class="clients-list-item clients-list-item_bdbn">
                                    <a href="">
                                        <img src="static/img/clients-img2.png" alt="1">
                                    </a>
                                </li>
                                <li class="clients-list-item clients-list-item_bdbn">
                                    <a href="">
                                        <img src="static/img/clients-img3.png" alt="1">
                                    </a>
                                </li>
                                <li class="clients-list-item clients-list-item_bdbn">
                                    <a href="">
                                        <img src="static/img/clients-img4.png" alt="1">
                                    </a>
                                </li>
                                <li class="clients-list-item clients-list-item_bdbn">
                                    <a href="">
                                        <img src="static/img/clients-img5.png" alt="1">
                                    </a>
                                </li>
                                <li class="clients-list-item clients-list-item_bdbn">
                                    <a href="">
                                        <img src="static/img/clients-img6.png" alt="1">
                                    </a>
                                </li>
                                <li class="clients-list-item">
                                    <a href="">
                                        <img src="static/img/clients-img7.png" alt="1">
                                    </a>
                                </li>
                                <li class="clients-list-item">
                                    <a href="">
                                        <img src="static/img/clients-img8.png" alt="1">
                                    </a>
                                </li>
                                <li class="clients-list-item">
                                    <a href="">
                                        <img src="static/img/clients-img9.png" alt="1">
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require_once('template/footer.php') ?>

</div>

</body>
</html>