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
                            <h1 class="page-title">Часто покупаемые мною товары</h1>

                            <p>
                                Компания «Артпласт» с 1997 года является активным участником российского и зарубежного рынка
                                пластиковой упаковочной продукции и одноразовой посуды. Мы работаем для клиентов более чем из
                                70 регионов России и ряда стран СНГ, а это свыше 5000 компаний, в числе которых – популярные
                                крупные бренды.
                            </p>

                            <div class="frequently-bought">
                                <div class="frequently-bought-top">
                                    <span class="frequently-bought-top__item frequently-bought-top__photo">Фото</span>
                                    <span class="frequently-bought-top__item frequently-bought-top__name">Наименования товара</span>
                                    <span class="frequently-bought-top__item frequently-bought-top__fas">Фасовка</span>
                                    <span class="frequently-bought-top__item frequently-bought-top__count">Количество / Цена</span>
                                    <span class="frequently-bought-top__item frequently-bought-top__summ">Сумма</span>
                                </div>
                                <ul class="frequently-bought-list">
                                    <li class="frequently-bought-list__item">
                                        <div class="frequently-bought-list__block frequently-bought-list__photo">
                                            <img src="static/img/frequently-bought-list__photo.jpg" alt="1">
                                        </div>
                                        <div class="frequently-bought-list__block frequently-bought-list__title-wr">
                                            <p class="frequently-bought-list__articul">
                                                <span>Артикул:</span>7256827
                                            </p>
                                            <h3 class="frequently-bought-list__name">
                                                <a href="">
                                                    300 мл (303460) Универсальное чист. средство (крем/молочко)
                                                    "EasyWork" (Универсальный крем для чистки любых поверхностей)
                                                    Россия
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="frequently-bought-list__block frequently-bought-list__fas">100/5000</p>
                                        <div class="frequently-bought-list__block frequently-bought-list__prices">
                                            <div class="product-prices">
                                                <div>
                                                    <label for="product-prices__label1">Штук</label>
                                                    <button class="product-prices__minus"></button>
                                                    <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                    <button class="product-prices__plus"></button>
                                                    <span class="product-prices__x">х</span>
                                                    <span class="product-prices__price product-prices__price_bold">0,4256</span>
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
                                        </div>
                                        <div class="frequently-bought-list__block frequently-bought-list__order">
                                            <p class="frequently-bought-list__price">30 090,42</p>
                                            <div class="frequently-bought-list__pod-order ">
                                                Под заказ <span>(<a href="">где ещё</a>)</span>

                                                <div class="block-in-stock">

                                                    <h3>Москва</h3>

                                                    <ul class="in-stock-this">
                                                        <li class="in-stock-this__item">
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
                                                        <li class="in-stock-this__item">
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
                                                        <li class="in-stock-this__item">
                                                            <a href="" class="in-stock-this__left">
                                                                Москва, магазин „Петрашка”
                                                            </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                        </li>
                                                    </ul>

                                                    <ul class="in-stock-other">
                                                        <li class="in-stock-other__item">
                                                            <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                            <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                        </li>
                                                        <li class="in-stock-other__item">
                                                            <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                            <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                        </li>
                                                        <li class="in-stock-other__item">
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
                                            <a href="" class="frequently-bought-list__btn">Купить</a>
                                        </div>
                                    </li>
                                    <li class="frequently-bought-list__item frequently-bought-list__on-cart">
                                        <div class="frequently-bought-list__block frequently-bought-list__photo">
                                            <img src="static/img/frequently-bought-list__photo.jpg" alt="1">
                                        </div>
                                        <div class="frequently-bought-list__block frequently-bought-list__title-wr">
                                            <p class="frequently-bought-list__articul">
                                                <span>Артикул:</span>7256827
                                            </p>
                                            <h3 class="frequently-bought-list__name">
                                                <a href="">
                                                    300 мл (303460) Универсальное чист. средство (крем/молочко)
                                                    "EasyWork" (Универсальный крем для чистки любых поверхностей)
                                                    Россия
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="frequently-bought-list__block frequently-bought-list__fas">100/5000</p>
                                        <div class="frequently-bought-list__block frequently-bought-list__prices">
                                            <div class="product-prices">
                                                <div>
                                                    <label for="product-prices__label1">Штук</label>
                                                    <button class="product-prices__minus"></button>
                                                    <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                    <button class="product-prices__plus"></button>
                                                    <span class="product-prices__x">х</span>
                                                    <span class="product-prices__price product-prices__price_bold">0,4256</span>
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
                                        </div>
                                        <div class="frequently-bought-list__block frequently-bought-list__order">
                                            <p class="frequently-bought-list__price">30 090,42</p>
                                            <div class="frequently-bought-list__pod-order ">
                                                Под заказ <span>(<a href="">где ещё</a>)</span>

                                                <div class="block-in-stock">

                                                    <h3>Москва</h3>

                                                    <ul class="in-stock-this">
                                                        <li class="in-stock-this__item">
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
                                                        <li class="in-stock-this__item">
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
                                                        <li class="in-stock-this__item">
                                                            <a href="" class="in-stock-this__left">
                                                                Москва, магазин „Петрашка”
                                                            </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                        </li>
                                                    </ul>

                                                    <ul class="in-stock-other">
                                                        <li class="in-stock-other__item">
                                                            <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                            <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                        </li>
                                                        <li class="in-stock-other__item">
                                                            <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                            <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                        </li>
                                                        <li class="in-stock-other__item">
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
                                            <a href="" class="frequently-bought-list__btn">В Корзине</a>
                                        </div>
                                    </li>
                                    <li class="frequently-bought-list__item">
                                        <div class="frequently-bought-list__block frequently-bought-list__photo">
                                            <img src="static/img/frequently-bought-list__photo.jpg" alt="1">
                                        </div>
                                        <div class="frequently-bought-list__block frequently-bought-list__title-wr">
                                            <p class="frequently-bought-list__articul">
                                                <span>Артикул:</span>7256827
                                            </p>
                                            <h3 class="frequently-bought-list__name">
                                                <a href="">
                                                    300 мл (303460) Универсальное чист. средство (крем/молочко)
                                                    "EasyWork" (Универсальный крем для чистки любых поверхностей)
                                                    Россия
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="frequently-bought-list__block frequently-bought-list__fas">100/5000</p>
                                        <div class="frequently-bought-list__block frequently-bought-list__prices">
                                            <div class="product-prices">
                                                <div>
                                                    <label for="product-prices__label1">Штук</label>
                                                    <button class="product-prices__minus"></button>
                                                    <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                    <button class="product-prices__plus"></button>
                                                    <span class="product-prices__x">х</span>
                                                    <span class="product-prices__price product-prices__price_bold">0,4256</span>
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
                                        </div>
                                        <div class="frequently-bought-list__block frequently-bought-list__order">
                                            <p class="frequently-bought-list__price">30 090,42</p>
                                            <div class="frequently-bought-list__pod-order ">
                                                Под заказ <span>(<a href="">где ещё</a>)</span>

                                                <div class="block-in-stock">

                                                    <h3>Москва</h3>

                                                    <ul class="in-stock-this">
                                                        <li class="in-stock-this__item">
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
                                                        <li class="in-stock-this__item">
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
                                                        <li class="in-stock-this__item">
                                                            <a href="" class="in-stock-this__left">
                                                                Москва, магазин „Петрашка”
                                                            </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                        </li>
                                                    </ul>

                                                    <ul class="in-stock-other">
                                                        <li class="in-stock-other__item">
                                                            <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                            <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                        </li>
                                                        <li class="in-stock-other__item">
                                                            <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                            <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                        </li>
                                                        <li class="in-stock-other__item">
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
                                            <a href="" class="frequently-bought-list__btn">Купить</a>
                                        </div>
                                    </li>
                                    <li class="frequently-bought-list__item">
                                        <div class="frequently-bought-list__block frequently-bought-list__photo">
                                            <img src="static/img/frequently-bought-list__photo.jpg" alt="1">
                                        </div>
                                        <div class="frequently-bought-list__block frequently-bought-list__title-wr">
                                            <p class="frequently-bought-list__articul">
                                                <span>Артикул:</span>7256827
                                            </p>
                                            <h3 class="frequently-bought-list__name">
                                                <a href="">
                                                    300 мл (303460) Универсальное чист. средство (крем/молочко)
                                                    "EasyWork" (Универсальный крем для чистки любых поверхностей)
                                                    Россия
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="frequently-bought-list__block frequently-bought-list__fas">100/5000</p>
                                        <div class="frequently-bought-list__block frequently-bought-list__prices">
                                            <div class="product-prices">
                                                <div>
                                                    <label for="product-prices__label1">Штук</label>
                                                    <button class="product-prices__minus"></button>
                                                    <input type="text" id="product-prices__label1" class="product-prices__input" value="500">
                                                    <button class="product-prices__plus"></button>
                                                    <span class="product-prices__x">х</span>
                                                    <span class="product-prices__price product-prices__price_bold">0,4256</span>
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
                                        </div>
                                        <div class="frequently-bought-list__block frequently-bought-list__order">
                                            <p class="frequently-bought-list__price">30 090,42</p>
                                            <div class="frequently-bought-list__pod-order ">
                                                Под заказ <span>(<a href="">где ещё</a>)</span>

                                                <div class="block-in-stock">

                                                    <h3>Москва</h3>

                                                    <ul class="in-stock-this">
                                                        <li class="in-stock-this__item">
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
                                                        <li class="in-stock-this__item">
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
                                                        <li class="in-stock-this__item">
                                                            <a href="" class="in-stock-this__left">
                                                                Москва, магазин „Петрашка”
                                                            </a>
                                                        <span class="in-stock-this__right in-stock-this__right_yes">
                                                            В наличии
                                                        </span>
                                                        </li>
                                                    </ul>

                                                    <ul class="in-stock-other">
                                                        <li class="in-stock-other__item">
                                                            <a href="#" class="in-stock-other__left">Нижний Новгород</a>
                                                            <span class="in-stock-other__right in-stock-other__right_yes">В наличии</span>
                                                        </li>
                                                        <li class="in-stock-other__item">
                                                            <a href="#popup-schema" class="in-stock-other__left fancybox">Санкт-Петербург</a>
                                                            <span class="in-stock-other__right in-stock-other__right_order">Под заказ</span>
                                                        </li>
                                                        <li class="in-stock-other__item">
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
                                            <a href="" class="frequently-bought-list__btn">Купить</a>
                                        </div>
                                    </li>
                                </ul>

                                <div class="frequently-bought-bottom">
                                    <a href="" class="frequently-bought-bottom__left">Продолжить покупки</a>
                                    <a href="" class="frequently-bought-bottom__right">Перейти в корзину</a>
                                    <ul class="pagination">
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

        </div>
    </div>

    <?php require_once('template/footer.php') ?>

</div>



</body>
</html>