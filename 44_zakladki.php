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
                            <li class="right-menu__item">
                                <a href="11_vakansii.php" class="right-menu__link">
                                    Уведомления
                                </a>
                            </li>
                            <li class="right-menu__item active">
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
                            <h1 class="page-title page-title--custom">Закладки</h1>

                            <div class="catalog-sort">
                                <div class="catalog-sort__left">
                                    <span>Отсортировать:</span>
                                    <a href="" class="catalog-sort__price ">по цене</a>
                                    <a href="" class="catalog-sort__articul active">по артикулу</a>
                                    <a href="" class="catalog-sort__default active">по умолчанию</a>
                                </div>
                                <div class="catalog-sort__right">
                                    <span>Вид каталога:</span>
                                    <a href="" class="catalog-sort__line"></a>
                                    <a href="" class="catalog-sort__grid"></a>
                                </div>
                            </div>

                            <ul class="catalog-list">
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="catalog-list-item ">
                                    <div class="product-item-home">
                                        <a href="#" class="product-item-home__delete">УДАЛИТЬ</a>
                                        <a href="#" class="product-item-home__img">
                                            <img src="static/img/product-item-home__img.png" width="130" height="159" alt="product-item-home__img">
                                        </a>
                                        <p class="product-item-home__articul">Артикул: <span>7256827</span></p>
                                        <a href="#" class="product-item-home__tobookmarks">В закладки</a>
                                        <a href='' class="product-item-home__descr">
                                            300 мл (303460) Универсальное чист. средство (крем/молочко) "EasyWork" (Универсальный
                                            крем для чистки любых поверхностей) Россия
                                        </a>

                                        <div class="product-item-home__pod-order">
                                            Под заказ (<a href="">где ещё</a>)

                                            <div class="block-in-stock">

                                                <h3>Москва</h3>

                                                <ul class="in-stock-this">
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, отдел оптовых продаж
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „ВДНХ”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Аэропорт”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item">
                                                        <a href="#popup-schema" class="in-stock-this__left fancybox">
                                                            Москва, магазин „Заводская”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_order">
                                                            Под заказ
                                                        </span>
                                                    </li>
                                                    <li class="in-stock-this__item in-stock-this__item--nohover">
                                                        <a href="" class="in-stock-this__left">
                                                            Москва, магазин „Петрашка”
                                                        </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class="in-stock-other">
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                    <li class="in-stock-other__item in-stock-this__item--nohover">
                                                        <a href="#" class="in-stock-other__left">Ростов-на-Дону</a>
                                                        <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                    </li>
                                                    <li class="in-stock-other__item">
                                                        <a href="#popup-schema" class="in-stock-other__left fancybox">Екатеренбург</a>
                                                        <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                    </li>
                                                </ul>

                                                <div class="in-stock-support">
                                                    <p>
                                                        По наличию товара просим <a href="">связаться</a>
                                                        с менеджером
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="product-prices">
                                            <div>
                                                <label for="product-prices__label1">Штук</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price product-prices__price--bold">0,4256</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label2">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label2" class="product-prices__input" value="10">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>

                                            <div>
                                                <label for="product-prices__label3">Упаковок (100 шт)</label>
                                                <button class="product-prices__minus"></button>
                                                <input type="text" id="product-prices__label3" class="product-prices__input" value="1">
                                                <button class="product-prices__plus"></button>
                                                <span class="product-prices__x">х</span>
                                                <span class="product-prices__price">42647,8</span>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="product-item-home__more">Купить</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="pagination pagination_catalog">
                                <li class="pagination__prev">
                                    <a href=""></a>
                                </li>
                                <li>
                                    <a href="">1</a>
                                </li>
                                <li class="current">
                                    <a href="">2</a>
                                </li>
                                <li>
                                    <a href="">3</a>
                                </li>
                                <li>
                                    <a href="">4</a>
                                </li>
                                <li>
                                    <a href="">5</a>
                                </li>
                                <li class="pagination__next">
                                    <a href=""></a>
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