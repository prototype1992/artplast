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
                            <li class="right-menu__item active">
                                <a href="9_mission.php" class="right-menu__link">
                                    Адреса доставки
                                </a>
                            </li>
                            <li class="right-menu__item">
                                <a href="10_istoriya.php" class="right-menu__link">
                                    История заказов
                                </a>
                            </li>
                            <li class="right-menu__item">
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
                            <h1 class="page-title page-title--custom">Адреса доставки</h1>

                            <div class="shipping-addresses">
                                <ul class="shipping-addresses-list">
                                    <li class="shipping-addresses-item">
                                        <div class="shipping-addresses-item__box shipping-addresses-item__left">
                                            <div class="shipping-addresses-item__valign">
                                                <button class="shipping-addresses-item__editbtn"></button>
                                                <h3 class="shipping-addresses-item__title">
                                                    <a href="">Москва, Варшавское шоссе, д.141/34, строение 53 офис 500</a>
                                                </h3>
                                                <input type="text" class="shipping-addresses-item__input" value="Москва, Варшавское шоссе, д.141/34, офис 500">
                                                <button class="shipping-addresses-item__okbtn"></button>
                                            </div>
                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__files">

                                            <div class="file-input-main ">
                                                <input type="file" class="file-input-main__field" id="shipping-addresses-item__file">
                                                <span class="file-input-main__label">
                                                    Прикрепить схему проезда
                                                </span>
                                                <button class="file-delete"></button>

                                            </div>

                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__delete">
                                            <a href="">Удалить адрес</a>
                                        </div>
                                    </li>
                                    <li class="shipping-addresses-item">
                                        <div class="shipping-addresses-item__box shipping-addresses-item__left">
                                            <div class="shipping-addresses-item__valign">
                                                <button class="shipping-addresses-item__editbtn"></button>
                                                <h3 class="shipping-addresses-item__title">
                                                    <a href="">Москва, Варшавское шоссе, д.141/34, строение 53 офис 500</a>
                                                </h3>
                                                <input type="text" class="shipping-addresses-item__input" value="Москва, Варшавское шоссе, д.141/34, офис 500">
                                                <button class="shipping-addresses-item__okbtn"></button>
                                            </div>
                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__files">

                                            <div class="file-input-main ">
                                                <input type="file" class="file-input-main__field" id="shipping-addresses-item__file">
                                                <span class="file-input-main__label">
                                                    Прикрепить схему проезда
                                                </span>
                                                <button class="file-delete"></button>

                                            </div>

                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__delete">
                                            <a href="">Удалить адрес</a>
                                        </div>
                                    </li>
                                    <li class="shipping-addresses-item">
                                        <div class="shipping-addresses-item__box shipping-addresses-item__left">
                                            <div class="shipping-addresses-item__valign">
                                                <button class="shipping-addresses-item__editbtn"></button>
                                                <h3 class="shipping-addresses-item__title">
                                                    <a href="">Москва, Варшавское шоссе, д.141/34, строение 53 офис 500</a>
                                                </h3>
                                                <input type="text" class="shipping-addresses-item__input" value="Москва, Варшавское шоссе, д.141/34, офис 500">
                                                <button class="shipping-addresses-item__okbtn"></button>
                                            </div>
                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__files">

                                            <div class="file-input-main ">
                                                <input type="file" class="file-input-main__field" id="shipping-addresses-item__file">
                                                <span class="file-input-main__label ">
                                                    Прикрепить схему проезда
                                                </span>
                                                <button class="file-delete"></button>

                                            </div>

                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__delete">
                                            <a href="">Удалить адрес</a>
                                        </div>
                                    </li>
                                    <li class="shipping-addresses-item">
                                        <div class="shipping-addresses-item__box shipping-addresses-item__left">
                                            <div class="shipping-addresses-item__valign">
                                                <button class="shipping-addresses-item__editbtn"></button>
                                                <h3 class="shipping-addresses-item__title">
                                                    <a href="">Москва, Варшавское шоссе, д.141/34, строение 53 офис 500</a>
                                                </h3>
                                                <input type="text" class="shipping-addresses-item__input" value="Москва, Варшавское шоссе, д.141/34, офис 500">
                                                <button class="shipping-addresses-item__okbtn"></button>
                                            </div>
                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__files">

                                            <div class="file-input-main ">
                                                <input type="file" class="file-input-main__field" id="shipping-addresses-item__file">
                                                <span class="file-input-main__label ">
                                                    Прикрепить схему проезда
                                                </span>
                                                <button class="file-delete"></button>

                                            </div>

                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__delete">
                                            <a href="">Удалить адрес</a>
                                        </div>
                                    </li>
                                    <li class="shipping-addresses-item">
                                        <div class="shipping-addresses-item__box shipping-addresses-item__left">
                                            <div class="shipping-addresses-item__valign">
                                                <button class="shipping-addresses-item__editbtn"></button>
                                                <h3 class="shipping-addresses-item__title">
                                                    <a href="">Москва, Варшавское шоссе, д.141/34, строение 53 офис 500</a>
                                                </h3>
                                                <input type="text" class="shipping-addresses-item__input" value="Москва, Варшавское шоссе, д.141/34, офис 500">
                                                <button class="shipping-addresses-item__okbtn"></button>
                                            </div>
                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__files">

                                            <div class="file-input-main ">
                                                <input type="file" class="file-input-main__field" id="shipping-addresses-item__file">
                                                <span class="file-input-main__label ">
                                                    Прикрепить схему проезда
                                                </span>
                                                <button class="file-delete"></button>

                                            </div>

                                        </div>
                                        <div class="shipping-addresses-item__box shipping-addresses-item__delete">
                                            <a href="">Удалить адрес</a>
                                        </div>
                                    </li>

                                </ul>

                                <button class="shipping-addresses-add">Добавить адрес</button>
                                
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