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
                            <li class="right-menu__item active">
                                <a href="" class="right-menu__link">
                                    Миссия
                                </a>
                            </li>
                            <li class="right-menu__item">
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
                                    <span>Миссия</span>
                                </li>
                            </ul>
                        </div>

                        <div class="content-main">
                            <h1 class="page-title">Миссия</h1>


                            <p>
                                Мы способствуем росту успешности наших партнеров, эффективному поднятию их бизнеса на новый
                                качественный уровень, обеспечивая стабильное и взаимовыгодное сотрудничество в сочетании
                                с высочайшим уровнем сервиса.
                            </p>
                            <p>Наша компания располагает собственными производственными мощностями, где изготовляется
                                порядка трёх тысяч наименований продукции. Мы также успешно сотрудничаем с рядом других
                                поставщиков. В настоящее время мы представляем на рынке упаковочных товаров продукцию
                                более чем 50 производителей, являясь их официальным дистрибьютором.</p>
                            <p>
                                <a href="">Производство</a> нашей компании расположено в г. Серпухов Московской области. На площадях,
                                превышающих 11 700 кв.м., мы ежемесячно   производим более тысячи тонн упаковочной продукции
                                из полиэтилена. Наши цеха укомплектованы современным специализированным оборудованием от лучших
                                европейских брендов, на производстве занято около 460 сотрудников. Начиная с 2007 года,
                                в своей производственной деятельности мы руководствуемся системой менеджмента качества,
                                соответствующей стандарту ISO 9001:2008, что позволяет нам поддерживать характеристики наших
                                продуктов на уровне высочайших мировых требований.
                            </p>

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