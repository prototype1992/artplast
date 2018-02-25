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
                                    Мои настройки
                                </a>
                            </li>
                            <li class="right-menu__item ">
                                <a href="9_mission.php" class="right-menu__link">
                                    Адреса доставки
                                </a>
                            </li>
                            <li class="right-menu__item active">
                                <a href="10_istoriya.php" class="right-menu__link">
                                    История заказов
                                </a>
                            </li>
                            <li class="right-menu__item ">
                                <a href="11_vakansii.php" class="right-menu__link">
                                    Уведомления
                                </a>
                            </li>
                            <li class="right-menu__item ">
                                <a href="12_nashi-klienti.php" class="right-menu__link">
                                    Часто покупаемые мною товары
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
                            <h1 class="page-title page-title--custom">История заказов</h1>

                            <div class="history-orders">
                                <div class="history-orders-top">
                                    <span class="history-orders-top__item history-orders-top__view"></span>
                                    <span class="history-orders-top__item history-orders-top__numb">№ заказа</span>
                                    <span class="history-orders-top__item history-orders-top__date">Дата заказа</span>
                                    <span class="history-orders-top__item history-orders-top__user">Покупатель</span>
                                    <span class="history-orders-top__item history-orders-top__status">Статус</span>
                                    <span class="history-orders-top__item history-orders-top__summ">Сумма заказа</span>
                                    <span class="history-orders-top__item history-orders-top__refresh">Повтор заказа</span>
                                </div>
                                <ul class="history-orders-list">
                                    <li class="history-orders-list__item">
                                        <a href="" class="history-orders-list__block history-orders-list__view">Просмотр заказа</a>
                                        <span class="history-orders-list__block history-orders-list__numb">6434</span>
                                        <span class="history-orders-list__block history-orders-list__date">
                                            25.05.2014
                                            20:32:05
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__user">
                                            Ивано Иван
                                        Иванович
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__status">
                                            Отправлен
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__price">40 000</span>
                                        <span class="history-orders-list__block history-orders-list__refresh">
                                            <a href=""></a>
                                        </span>
                                    </li>
                                    <li class="history-orders-list__item">
                                        <a href="" class="history-orders-list__block history-orders-list__view">Просмотр заказа</a>
                                        <span class="history-orders-list__block history-orders-list__numb">6434</span>
                                        <span class="history-orders-list__block history-orders-list__date">
                                            25.05.2014
                                            20:32:05
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__user">
                                            Ивано Иван
                                        Иванович
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__status">
                                            Отправлен
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__price">40 000</span>
                                        <span class="history-orders-list__block history-orders-list__refresh">
                                            <a href=""></a>
                                        </span>
                                    </li>
                                    <li class="history-orders-list__item">
                                        <a href="" class="history-orders-list__block history-orders-list__view">Просмотр заказа</a>
                                        <span class="history-orders-list__block history-orders-list__numb">6434</span>
                                        <span class="history-orders-list__block history-orders-list__date">
                                            25.05.2014
                                            20:32:05
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__user">
                                            Ивано Иван
                                        Иванович
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__status">
                                            Отправлен
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__price">40 000</span>
                                        <span class="history-orders-list__block history-orders-list__refresh">
                                            <a href=""></a>
                                        </span>
                                    </li>
                                    <li class="history-orders-list__item">
                                        <a href="" class="history-orders-list__block history-orders-list__view">Просмотр заказа</a>
                                        <span class="history-orders-list__block history-orders-list__numb">6434</span>
                                        <span class="history-orders-list__block history-orders-list__date">
                                            25.05.2014
                                            20:32:05
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__user">
                                            Ивано Иван
                                        Иванович
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__status">
                                            Отправлен
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__price">40 000</span>
                                        <span class="history-orders-list__block history-orders-list__refresh">
                                            <a href=""></a>
                                        </span>
                                    </li>
                                    <li class="history-orders-list__item">
                                        <a href="" class="history-orders-list__block history-orders-list__view">Просмотр заказа</a>
                                        <span class="history-orders-list__block history-orders-list__numb">6434</span>
                                        <span class="history-orders-list__block history-orders-list__date">
                                            25.05.2014
                                            20:32:05
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__user">
                                            Ивано Иван
                                        Иванович
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__status">
                                            Отправлен
                                        </span>
                                        <span class="history-orders-list__block history-orders-list__price">40 000</span>
                                        <span class="history-orders-list__block history-orders-list__refresh">
                                            <a href=""></a>
                                        </span>
                                    </li>
                                </ul>
                            </div>

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