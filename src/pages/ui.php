<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

    <link rel="preload" href="fonts/Manrope-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css" type="text/css">

	<?/* Подключение библиотек (отдельно) */?>
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
    <script defer src="js/accordion.js"></script>               <!-- accordion -->

    <script defer src="js/main.js"></script>

    <?/*
    <style>
        body {
            margin: 0;
            padding: 16px;
            overflow-x: hidden;
            background: #F5F5F5;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 16px;
        }
        .container-ui {
            display:flex;
            flex-wrap: wrap;
            gap: 24px;
        }
        .col-ui {
            flex: 1;
            display:flex;
            flex-direction: column;
            gap: 12px;
        }
        .row-ui {
            display:flex;
            align-items:center;
            gap: 16px;
        }
        .bg-dark {
            background-color: #b8c1f0;
        }
        .text-center {
            text-align: center;
        }
        .color-block {
            display: inline-block;
            width: 150px;
            height: 30px;
        }
        .tooltip-ui-set {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            padding: 12px;
        }
        .tooltip-ui-set:not(:last-child) {
            margin-bottom: 20px;
        }
        .tooltip-ui-iconset {
            min-width: 320px;
            border: 1px solid var(--gray3-color);
            border-radius: 8px;
        }
        .tooltip-ui-iconset .tooltip .icon {
            min-width: 24px;
            width: 24px;
            min-height: 24px;
            height: 24px;
        }
        .tooltip-ui-iconset .tooltip .icon {
            fill: var(--text-primary);
        }
        .tooltip-ui-iconset .tooltip:hover .icon {
            fill: var(--red-color);
        }
    </style>*/?>
</head>
<body>
    <div class="ui">
        <div class="container-fluid">
            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Colors</h3>

                <div class="ui-row">
                    <div class="ui-color">
                        <span class="ui-color__item tooltip" data-tippy-content="--black-color" style="background-color: var(--black-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--white-color" style="background-color: var(--white-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray1-color" style="background-color: var(--gray1-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray2-color" style="background-color: var(--gray2-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray3-color" style="background-color: var(--gray3-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray4-color" style="background-color: var(--gray4-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--gray5-color" style="background-color: var(--gray5-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--gray6-color" style="background-color: var(--gray6-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--yellow-color" style="background-color: var(--yellow-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--yellow2-color" style="background-color: var(--yellow2-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--green-color" style="background-color: var(--green-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--lightgreen-color" style="background-color: var(--lightgreen-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--dullgreen-color" style="background-color: var(--dullgreen-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--red-color" style="background-color: var(--red-color);"></span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Gaps</h3>

                <div class="ui-row">
<pre>
@media (min-width: 992px) {
    .gap-xxxs { margin-bottom: 16px !important; }
    .gap-xxs { margin-bottom: 20px !important; }
    .gap-xs { margin-bottom: 24px !important; }
    .gap-sm { margin-bottom: 32px !important; }
    .gap-md { margin-bottom: 40px !important; }
    .gap-lg { margin-bottom: 60px !important; }
    .gap-xl { margin-bottom: 80px !important; }
}
@media (max-width: 991.98px) {
    .gap-xxxs { margin-bottom: 8px !important; }
    .gap-xxs { margin-bottom: 12px !important; }
    .gap-xs { margin-bottom: 16px !important; }
    .gap-sm { margin-bottom: 24px !important; }
    .gap-md, .gap-lg, .gap-xl { margin-bottom: 32px !important; }
}
</pre>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Icons</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">
                            .icon-fill - строго запрещает свойство "stroke"
                            <br>
                            .icon-stroke - строго запрещает свойство "fill"
                        </div><br>
                        <div class="fz-subtitle">использование use ==> sprite.svg#id_из_тултип / file-name.svg#file-name</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="#arrow-left">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#arrow-left"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#chevron-down">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#chevron-down"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#search">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#search"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#catalog">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#catalog"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#menu">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#cross">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#box-3d">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#box-3d"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#box-cancel">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#box-cancel"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#box-check">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#box-check"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#clock">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#clock"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#copy">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#copy"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#delivery">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#delivery"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#email">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#email"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#heart">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#heart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#lovely">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#lovely"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#stack">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#stack"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#wallet">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#wallet"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#sale">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#sale"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#hbk">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#hbk"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-home">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-home"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-catalog">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-catalog"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-cart">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-cart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-chart">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-chart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-heart">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-heart"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#filled-user">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#filled-user"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-pt">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-pt"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-tg">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-tg"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-vk">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-vk"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-wa">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-wa"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#soc-yt">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#soc-yt"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Buttons</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">size L (default)</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-primary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-primary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-secondary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-secondary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-light'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-light">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">size M (on mobile)</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-md btn-primary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-md btn-primary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-md btn-secondary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-md btn-secondary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-md btn-light'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-md btn-light">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">size S (on mobile)</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-sm btn-primary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-sm btn-primary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-sm btn-secondary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-sm btn-secondary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-sm btn-light'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-sm btn-light">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#catalog"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">alternative buttons</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-header'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-header">
                                <span class="btn-header__count">16</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#filled-heart"></use>
                                </svg>
                                <span class="btn__text">Избранное</span>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-square'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-square">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#arrow-left"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>

                        <?/*
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-cart'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-cart">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#cart-add"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-icon'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-icon">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#filled-tag-cross"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-play'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-play">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#play"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>*/?>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Controls</h3>

                <?/*
                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">chip</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='chip chip-gray'">
                            <!--start ui content-->
                            <span class="chip chip-gray">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-black'">
                            <!--start ui content-->
                            <span class="chip chip-black">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-red'">
                            <!--start ui content-->
                            <span class="chip chip-red">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-orange'">
                            <!--start ui content-->
                            <span class="chip chip-orange">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-green'">
                            <!--start ui content-->
                            <span class="chip chip-green">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-blue'">
                            <!--start ui content-->
                            <span class="chip chip-blue">Витамины</span>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>*/?>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">tag default</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <div class="slider-out">
                            <div class="tag-bar slider-out-content swiper" data-tag-bar-slider>
                                <div class="swiper-wrapper tag-bar__list">
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag tag--border">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag tag--border">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag tag--yellow">
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="swiper-slide tag-bar__item">
                                        <label class="tag-wrapper">
                                            <input
                                                    class="visually-hidden"
                                                    type="checkbox"
                                                    name="UI[TAGS][]"
                                                    value=""
                                            >
                                            <span class="tag tag--green">
                                                <svg class="icon icon-fill icon-md">
                                                    <use href="img/sprite.svg#sale"></use>
                                                </svg>
                                                <span>Текст</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Links</h3>

                <div class="ui-row">
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='link link-primary' (default)">
                            <!--start ui content-->
                            <a class="link link-primary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-invert'">
                            <!--start ui content-->
                            <a class="link link-invert" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-secondary'">
                            <!--start ui content-->
                            <a class="link link-secondary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-tdu link-primary'">
                            <!--start ui content-->
                            <a class="link link-tdu link-primary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-tdu link-dashed link-primary'">
                            <!--start ui content-->
                            <a class="link link-tdu link-dashed link-primary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-primary' (default)">
                            <!--start ui content-->
                            <a class="link link-primary link-dropdown" href="javascript:;">
                                <span class="text-content">Витамины и добавки</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </a>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Fields</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">input</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="default">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper has-icon-l has-icon-r">
                                    <input
                                            id="ui-input-search-example-1"
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Placeholder"
                                    >
                                    <label for="ui-input-search-example-1" class="input-icon input-icon-l c-pointer">
                                        <svg class="icon icon-md icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                    <label for="ui-input-search-example-1" class="input-icon input-icon-r">
                                        <svg class="icon icon-md icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>

                        <span class="tooltip" data-tippy-content="search">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper input-wrapper-split has-icon-l">
                                    <input
                                            id="ui-subscribe-input"
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Введите ваш email"
                                            autocomplete="off"
                                    >
                                    <label for="ui-input-search-example-1" class="input-icon input-icon-l">
                                        <svg class="icon icon-md icon-fill">
                                            <use href="img/sprite.svg#email"></use>
                                        </svg>
                                    </label>
                                    <button class="btn-reset btn btn-md btn-secondary" type="submit">
                                        <span class="btn__text">Подписаться</span>
                                    </button>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">input flatpickr (date)</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='input flatpickr">
                            <!--start ui content-->
                            <span class="input-wrapper input-wrapper--flatpickr">
                                <input
                                        id=""
                                        class="input-reset input flatpickr"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Любая дата"
                                >
                            </span>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <?/*
            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Content</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">card</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='card' (default)">
                            <!--start ui content-->
                            <span class="card card-info">
                                <a class="card__view" href="javascript:;">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/brand-1.png"
                                            alt="Изображение блока"
                                    >
                                </a>
                            </span>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>*/?>
        </div>

        <br>
    </div>
</body>
</html>