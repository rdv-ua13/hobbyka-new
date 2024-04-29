<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>Хоббика - производство садовой и парковой мебели!</title>

    <link rel="preload" href="fonts/Manrope-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css" type="text/css">

    <?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>                  <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>      <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>         <!-- validate -->
    <script defer src="js/messages_ru.js"></script>             <!-- validate -->
    <script defer src="js/popper.js"></script>                  <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>           <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>        <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>            <!-- fancybox -->
    <script defer src="js/select2.js"></script>                 <!-- select2 -->
    <script defer src="js/readmore.js"></script>                <!-- readmore -->
    <script defer src="js/flatpickr.min.js"></script>           <!-- flatpickr -->
    <script defer src="js/ru.js"></script>                      <!-- flatpickr -->
    <script defer src="js/nouislider.js"></script>              <!-- nouislider -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>
</head>

<? if (strpos($_SERVER["REQUEST_URI"], "index.php")) : ?>
<body class="index">
<? else : ?>
<body>
<? endif; ?>
<header class="header fixed-block">
    <div class="header-top bg-dark">
        <div class="container header-container">
            <div class="header-mobile-menu">
                <button
                        class="btn-reset burger"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-menu-spoiler
                        data-overlay
                >
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#menu"></use>
                    </svg>
                </button>

                <div class="header-logo">
                    <a class="logo" href="javascript:;">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/sprite.svg#logo-light"
                                width="84"
                                height="42"
                                alt="Хоббика - производство садовой и парковой мебели!"
                        >
                    </a>
                </div>
            </div>

            <div class="header-contacts">
                <a class="header-contacts__tel" href="tel:+88003333778"><span>8 800 333-37-78</span></a>
                <a class="header-contacts__office link link-tdu link-dashed" href="javascript:;"><span>Все офисы</span></a>
            </div>

            <div class="header-top-nav">
                <ul class="list-reset header-top-nav__list">
                    <li>
                        <div class="dropdown-container">
                            <a class="header-top__link link link-primary link-dropdown dropdown-spoiler" href="javascript:;">
                                <span class="text-content">Покупателям</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </a>
                            <?/*<ul class="list-reset dropdown-menu">
                                <li>
                                    <a href="javascript:;" class="link link-primary">
                                        <span>Название</span>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link link-primary">
                                        <span>Название</span>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link link-primary">
                                        <span>Название</span>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>*/?>
                        </div>
                    </li>
                    <li><a class="header-top__link" href="javascript:;"><span>Корпоративным клиентам</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span>Наше производство</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span>Инфоцентр</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span>Контакты</span></a></li>
                </ul>
            </div>

            <div class="header-social social">
                <ul class="list-reset social__list">
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#soc-tg"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Whatsapp">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#soc-wa"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container header-container header-nav-container">
            <div class="header-main">
                <div class="header-logo">
                    <a class="logo" href="javascript:;">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/sprite.svg#logo-dark"
                                width="140"
                                height="68"
                                alt="Хоббика - производство садовой и парковой мебели!"
                        >
                    </a>
                    <div class="logo-text fz-caption">Оборудование<br> для блаугоустройства<br> от производителя</div>
                </div>

                <div class="header-catalog">
                    <a class="btn-reset btn btn-primary" href="javascript:;">
                        <svg class="icon icon-fill btn__icon">
                            <use href="img/sprite.svg#catalog"></use>
                        </svg>
                        <span class="btn__text">Каталог</span>
                    </a>

                    <div class="header-search">
                        <form id="" method="" action="javascript:;">
                            <div class="input-wrapper has-icon-r">
                                <input
                                        id="ui-input-search-example-1"
                                        class="input-reset input input-search"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Найти в каталоге"
                                >
                                <label for="ui-input-search-example-1" class="input-icon input-icon-r c-pointer">
                                    <svg class="icon icon-md icon-fill">
                                        <use href="img/sprite.svg#search"></use>
                                    </svg>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="header-profile">
                    <ul class="list-reset header-profile__list">
                        <li>
                            <button class="btn-reset btn btn-header">
                                <span class="btn-header__count">16</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#filled-heart"></use>
                                </svg>
                                <span class="btn__text">Избранное</span>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset btn btn-header">
                                <span class="btn-header__count">2</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#filled-chart"></use>
                                </svg>
                                <span class="btn__text">Сравнить</span>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset btn btn-header" data-fancybox data-src="#modal-auth">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#filled-user"></use>
                                </svg>
                                <span class="btn__text">Войти</span>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset btn btn-header">
                                <span class="btn-header__count">2</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#filled-cart"></use>
                                </svg>
                                <span class="btn__text price">152 800 ₽</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header-categories">
                <div class="tag-wrapper slider-out">
                    <div class="tag-bar swiper" data-tag-bar-slider>
                        <div class="swiper-wrapper tag-bar__list">
                            <div class="swiper-slide tag-bar__item">
                                <label class="tag-wrapper">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="CATALOG_CATEGORIES[]"
                                            value=""
                                    >
                                    <span class="tag">
                                        <span>Детское игровое оборудование</span>
                                    </span>
                                </label>
                            </div>
                            <div class="swiper-slide tag-bar__item">
                                <label class="tag-wrapper">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="CATALOG_CATEGORIES[]"
                                            value=""
                                    >
                                    <span class="tag">
                                        <span>Скамейки</span>
                                    </span>
                                </label>
                            </div>
                            <div class="swiper-slide tag-bar__item">
                                <label class="tag-wrapper">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="CATALOG_CATEGORIES[]"
                                            value=""
                                    >
                                    <span class="tag">
                                        <span>Дачная и садовая мебель</span>
                                    </span>
                                </label>
                            </div>
                            <div class="swiper-slide tag-bar__item">
                                <label class="tag-wrapper">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="CATALOG_CATEGORIES[]"
                                            value=""
                                    >
                                    <span class="tag">
                                        <span>Парковые качели</span>
                                    </span>
                                </label>
                            </div>
                            <div class="swiper-slide tag-bar__item">
                                <label class="tag-wrapper">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="CATALOG_CATEGORIES[]"
                                            value=""
                                    >
                                    <span class="tag">
                                        <span>Парковые качели</span>
                                    </span>
                                </label>
                            </div>
                            <div class="swiper-slide tag-bar__item">
                                <label class="tag-wrapper">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="CATALOG_CATEGORIES[]"
                                            value=""
                                    >
                                    <span class="tag tag--yellow">
                                        <span>Новинки</span>
                                    </span>
                                </label>
                            </div>
                            <div class="swiper-slide tag-bar__item">
                                <label class="tag-wrapper">
                                    <input
                                            class="visually-hidden"
                                            type="checkbox"
                                            name="CATALOG_CATEGORIES[]"
                                            value=""
                                    >
                                    <span class="tag tag--green">
                                        <svg class="icon icon-fill icon-md">
                                            <use href="img/sprite.svg#sale"></use>
                                        </svg>
                                        <span>Акции</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu" data-menu>
    <div class="mobile-menu-close" data-menu-close>
        <svg class="icon icon-fill">
            <use href="img/sprite.svg#cross"></use>
        </svg>
    </div>

    <div class="mobile-menu-header">
        <div class="mobile-menu-container">
            <div class="header-logo">
                <a class="logo" href="javascript:;">
                    <img
                            loading="lazy"
                            class="image"
                            src="img/sprite.svg#logo-dark"
                            width="116"
                            height="58"
                            alt="Хоббика - производство садовой и парковой мебели!"
                    >
                </a>
                <div class="logo-text fz-caption">Оборудование<br> для блаугоустройства<br> от производителя</div>
            </div>

            <div class="mobile-menu-contacts">
                <div class="header-contacts">
                    <a class="header-contacts__tel" href="tel:+88003333778"><span>8 800 333-37-78</span></a>
                    <a class="header-contacts__office link link-tdu link-dashed" href="javascript:;"><span>Все офисы</span></a>
                </div>

                <div class="header-social social">
                    <ul class="list-reset social__list">
                        <li>
                            <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#soc-tg"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" target="_blank" aria-label="Наша страничка в Whatsapp">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#soc-wa"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <ul class="list-reset mobile-menu-list">
        <li>
            <div class="dropdown-container">
                <a class="mobile-menu__item mobile-menu__link link link-dropdown dropdown-spoiler" href="javascript:;">
                    <span class="text-content">Покупателям</span>
                    <svg class="icon icon-sm icon-fill">
                        <use href="img/sprite.svg#chevron-down"></use>
                    </svg>
                </a>
				<?/*<ul class="list-reset dropdown-menu">
                                <li>
                                    <a href="javascript:;" class="link link-primary">
                                        <span>Название</span>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link link-primary">
                                        <span>Название</span>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link link-primary">
                                        <span>Название</span>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>*/?>
            </div>
        </li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;"><span>Корпоративным клиентам</span></a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;"><span>Наше производство</span></a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;"><span>Инфоцентр</span></a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;"><span>Контакты</span></a></li>
    </ul>

    <div class="mobile-menu-footer">
        <div class="mobile-menu-container">
            <div class="mobile-menu-login">
                <button class="btn-reset btn btn-md btn-secondary" data-fancybox data-src="#modal-auth">
                    <span class="btn__text">Войти</span>
                </button>
                <button class="btn-reset btn btn-md btn-light" data-fancybox data-src="#modal-reg">
                    <span class="btn__text">Регистрация</span>
                </button>
            </div>
        </div>
    </div>
</div>

<main class="main">