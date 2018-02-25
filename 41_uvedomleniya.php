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
                            <li class="right-menu__item">
                                <a href="10_istoriya.php" class="right-menu__link">
                                    История заказов
                                </a>
                            </li>
                            <li class="right-menu__item active">
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
                            <h1 class="page-title">Уведомления</h1>

                            <div class="uvedomlenia">
                                <form method="post">
                                    <ul class="uvedomlenia__listform">
                                        <li>
                                            <input type="checkbox" id="uvedomlenia-label1" checked>
                                            <label for="uvedomlenia-label1">Статьи</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="uvedomlenia-label2" checked>
                                            <label for="uvedomlenia-label2">Новости</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="uvedomlenia-label3">
                                            <label for="uvedomlenia-label3">Новинки каталога</label>
                                        </li>
                                    </ul>
                                    <div class="uvedomlenia__body">
                                        <label for="uvedomlenia__labelemail">E-mail</label>
                                        <input type="text" id="uvedomlenia__labelemail" placeholder="i.ivan@mail.ru" value="i.ivan@mail.ru">
                                        <button>Подписаться</button>
                                    </div>


                                </form>
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