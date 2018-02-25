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
                            <h1 class="page-title page-title--custom">Мои настройки</h1>

                            <div class="user-settings">
                                <div class="user-settings__item">
                                    <h3 class="user-settings-item__title">Основная информация</h3>
                                    <form action="" method="post">
                                        <p>
                                            <label for="user-settings__email">Логин (e-mail) <span>*</span></label>
                                            <input type="text" id="user-settings__email" placeholder="i.ivan@mail.ru">
                                        </p>
                                        <p>
                                            <label for="user-settings__name">Имя <span>*</span></label>
                                            <input type="text" id="user-settings__name" placeholder="Иванов Иван Иванович">
                                        </p>
                                        <p>
                                            <label for="user-settings__tel">Телефон</label>
                                            <input type="text" id="user-settings__tel" placeholder="+7 920 420 20 20">
                                        </p>

                                        <button>Сохранить</button>
                                    </form>
                                </div>

                                <div class="user-settings__item">
                                    <h3 class="user-settings-item__title">Смена пароля</h3>
                                    <form action="" method="post">
                                        <p class="user-settings__oldpass">
                                            <label for="user-settings__oldpass">Старый пароль <span>*</span></label>
                                            <input type="password" id="user-settings__oldpass">
                                        </p>
                                        <p>
                                            <label for="user-settings__newpass1">Новый пароль <span>*</span></label>
                                            <input type="password" id="user-settings__newpass1">
                                        </p>
                                        <p>
                                            <label for="user-settings__newpass2">Подтвердить пароль <span>*</span></label>
                                            <input type="password" id="user-settings__newpass2">
                                        </p>

                                        <button>Сохранить</button>
                                    </form>
                                </div>
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