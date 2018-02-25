<div class="top-bar">
    <div class="container">
        <nav>
            <ul class="top-bar-menu">
                <li class="top-bar-menu__item active">
                    <a href="7_o-kompanii.php" class="top-bar-menu__link">О компании</a>
                </li>
                <li class="top-bar-menu__item">
                    <a href="14_produkciya-na-zakaz.php" class="top-bar-menu__link">Продукция на заказ</a>
                </li>
                <li class="top-bar-menu__item">
                    <a href="18_proizvodstvo.php" class="top-bar-menu__link">Производство</a>
                </li>
                <li class="top-bar-menu__item">
                    <a href="24_akcii.php" class="top-bar-menu__link">Акции</a>
                </li>
                <li class="top-bar-menu__item">
                    <a href="20_novosti.php" class="top-bar-menu__link">Новости</a>
                </li>
                <li class="top-bar-menu__item">
                    <a href="38_dostavka.php" class="top-bar-menu__link">Доставка</a>
                </li>
            </ul>
        </nav>
        <div class="top-bar-social">
            <a href="#" class="top-bar-social__fb"></a>
            <a href="#" class="top-bar-social__vk"></a>
        </div>
        <div class="top-bar-ierarhia">
            <a href=""></a>
        </div>
        <div class="top-bar-language">
            <a href="#" class="top-bar-language__ru active">ru</a>
            <a href="#" class="top-bar-language__en ">en</a>
        </div>
        <div class="top-bar-cabinet">
            <a href="#modal-login" class="fancybox top-bar-cabinet__link">Личный кабинет</a>
            <a href="#" class="top-bar-cabinet__drop"></a>

            <ul class="top-bar-cabinet__down-list">
                <li>
                    <a href="#modal-login" class="fancybox top-bar-login">Войти</a>
                </li>
                <li>
                    <a href="#modal-register" class="fancybox top-bar-registr">Зарегистрироваться</a>
                </li>
            </ul>

        </div>
    </div>
</div>

<header class="main-header">
    <div class="container">
        <div class="header-top">
            <div class="header-logo">
                <a href="index.php">
                    <img src="static/img/logo.jpg" alt="logo">
                </a>
            </div>
            <div class="header-phone">
                <div class="header-phone__top">
                    <span class=" header-phone__link">Обратная связь</span>
                    <a href="#modal-feedback" class="fancybox header-phone__smile"></a>
                    <a href="#modal-feedback" class="fancybox header-phone__sad"></a>
                </div>
                <div class="header-phone__8800-wr">
                    <p class="header-phone__8800">8 800 300 7777</p>
                    <a href="" class="header-phone__call">Заказать звонок</a>

                    <div id="modal-ordercall" class="modal-ordercall">
                        <div class="modal-ordercall__close"></div>
                        <div class="modal-ordercall__tline"></div>
                        <h3 class="modal-ordercall__title">Обратный звонок</h3>
                        <p class="modal-ordercall__descr">
                            Для быстрого заказа консультации или связи  с нами, просто оставьте свой телефон. Мы вам обязательно перезвоним
                        </p>
                        <form>
                            <label for="modal-ordercall__phone">Телефон<span>*</span></label>
                            <input type="text" id="modal-ordercall__phone" class="myphone" placeholder="+7 (___) ___-__-__" required>
                            <div class="btn-group">
                                <button>Перезвонить мне</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="header-youcity">
                <p class="header-youcity__top">
                    <span>Ваш город &nbsp; — &nbsp; </span>
                    <a href="">Нижневартовск</a>
                </p>
                <p class="header-youcity__middle">
                    <button>Да</button>
                    <a href="#modal-select-city" class="fancybox-city">Выбрать другой</a>
                </p>
                <p class="header-youcity__bottom">
                    Ваше подразделение:
                    <span>Нижний Новгород</span>
                </p>
            </div>
            <div class="header-cart">
                <p class="header-cart__summa">
                    3 000 000
                    <span>600</span>
                </p>
                <a href="">Автозаполнение заказа</a>
            </div>
        </div>
        <div class="header-bottom">
            <div class="catalog-link">
                <a href="">Каталог товаров</a>
            </div>
            <div class="header-search">
                <form>
                    <input type="text" placeholder="Поиск среди 8560 товаров">
                    <button>Найти</button>
                </form>
            </div>
        </div>
    </div>
</header>