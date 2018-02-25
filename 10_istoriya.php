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
                                <a href="" class="right-menu__link">
                                    О компании
                                </a>
                            </li>
                            <li class="right-menu__item ">
                                <a href="" class="right-menu__link">
                                    Миссия
                                </a>
                            </li>
                            <li class="right-menu__item active">
                                <a href="" class="right-menu__link">
                                    История
                                </a>
                            </li>
                            <li class="right-menu__item">
                                <a href="" class="right-menu__link">
                                    Вакансии
                                </a>
                            </li>
                            <li class="right-menu__item">
                                <a href="" class="right-menu__link">
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
                                    <span>История</span>
                                </li>
                            </ul>
                        </div>

                        <div class="content-main">
                            <h1 class="page-title">История</h1>


                            <p>
                                История компании "Артпласт" берет свое начало в далеком 1995 году, когда несколько студентов
                                МИФИ открыли торговую точку по продаже полиэтиленовых пакетов на московском рынке
                                "Покровский", чтобы заработать себе на учебу и досуг.
                            </p>

                            <ul class="history-list">
                                <li class="history-list__item">
                                    <h4 class="history-list__year">1997 г.</h4>
                                    <p>
                                        <strong>Год основания компании «Артпласт»</strong>, компания зарегистрирована как юридическое лицо. Открытие
                                        первого склада–магазина в Москве у ст.м. <a href="">Каширская</a>
                                    </p>
                                </li>
                                <li class="history-list__item">
                                    <h4 class="history-list__year">1998 г.</h4>
                                    <p>
                                        Компания начинает импортировать продукцию, заключив напрямую договора с турецкими поставщиками.
                                    </p>
                                </li>
                                <li class="history-list__item">
                                    <h4 class="history-list__year">1999-2000 г.</h4>
                                    <p>
                                        «Артпласт» расширяет ассортимент и начинает развивать новые направления:
                                        оптовая торговля одноразовой посудой, реклама на пакетах и гибкая упаковка с печатью.
                                    </p>
                                    <ul class="years-list">
                                        <li>
                                            <strong>1999</strong> – открытие второго склада-магазина - Аэропорт (Москва)
                                        </li>
                                        <li>
                                            <strong>2000</strong> – открытие третьего склада–магазина - Шаболовка (Москва)
                                        </li>
                                    </ul>
                                </li>
                                <li class="history-list__item">
                                    <h4 class="history-list__year">2001 г.</h4>
                                    <p>
                                        Начинает работу собственное производство полиэтиленовых пакетов в г. Протвино Московской области.<br>
                                        Открылся 4-й склад–магазин в Москве – <a href="">Пролетарка</a>
                                    </p>
                                </li>
                                <li class="history-list__item">
                                    <h4 class="history-list__year">2002 г.</h4>
                                    <p>
                                        Открытие 5-го склада–магазина – <a href="">Владыкино</a> (Москва)
                                    </p>
                                </li>
                                <li class="history-list__item">
                                    <h4 class="history-list__year">2003-2004 г.</h4>
                                    <p>
                                        В г. Серпухов Московской области выкуплены в собственность крупные заводские площади и
                                        проведена их масштабная реконструкция. Осуществлено перемещение производственных мощностей
                                        из г. Протвино в новый <a href="">заводской корпус</a>.
                                    </p>
                                </li>
                                <li class="history-list__item">
                                    <h4 class="history-list__year">2005 г.</h4>
                                    <p>
                                        Открытие 6-го склада–магазина – <a href="">Новогиреево</a> (Москва)
                                    </p>
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