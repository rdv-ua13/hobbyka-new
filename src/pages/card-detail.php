<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
    <div class="container">
        <div class="detail">
            <div class="gap-sm">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
            </div>

            <div class="card-detail">
                <div class="card-detail__item card-detail__view">
                    <div class="card-detail__view-content detail-thumb-slider-wrapper">
                        <div class="gap-xxxs slider-out basic-slider-wrap nav-out-wrap">
                            <div class="basic-slider nav-out detail-thumb-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-1.png"
                                                class="image"
                                                width="550"
                                                height="550"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-2.png"
                                                class="image"
                                                width="550"
                                                height="550"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-3.png"
                                                class="image"
                                                width="550"
                                                height="550"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-4.png"
                                                class="image"
                                                width="550"
                                                height="550"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-5.png"
                                                class="image"
                                                width="550"
                                                height="550"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide media-content">
                                        <a
                                                class="media-content__item media-video"
                                                href="demo.mp4"
                                                data-fancybox=""
                                        >
                                            <video
                                                    class="media-video__item"
                                                    src="demo.mp4"
                                                    preload="auto"
                                                    poster=""
                                                    width="550"
                                                    height="550"
                                            ></video>
											<?/*<iframe
                                                class="media-video__item"
                                                src="https://www.youtube.com/embed/K4TOrB7at0Y?si=QJ3_usB2qI1loWQR"
                                                title="YouTube video player"
                                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen
                                        ></iframe>*/?>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/sprite.svg#3d"
                                                class="image"
                                                width="550"
                                                height="550"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/sprite.svg#box-3d"
                                                class="image"
                                                width="550"
                                                height="550"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                </div>
                                <div class="swiper-navigation">
                                    <div class="swiper-button-next">
                                        <button class="btn-reset btn btn-square">
                                            <svg class="icon icon-fill icon-sm">
                                                <use href="img/sprite.svg#arrow-left"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <button class="btn-reset btn btn-square">
                                            <svg class="icon icon-fill icon-sm">
                                                <use href="img/sprite.svg#arrow-left"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="detail-thumb-slider__sale-label">
                                    <span class="chip chip-sale">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#sale"></use>
                                        </svg>
                                        <span>-50%</span>
                                    </span>
                                    <span class="chip">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#star"></use>
                                        </svg>
                                        <span>Хит</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="slider-out basic-slider-wrap">
                            <div class="basic-slider detail-thumb-slider-pointer swiper" thumbsSlider="">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-1.png"
                                                class="image"
                                                width="48"
                                                height="48"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-2.png"
                                                class="image"
                                                width="48"
                                                height="48"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-3.png"
                                                class="image"
                                                width="48"
                                                height="48"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-4.png"
                                                class="image"
                                                width="48"
                                                height="48"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                                loading="lazy"
                                                src="img/prod-5.png"
                                                class="image"
                                                width="48"
                                                height="48"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="swiper-slide media-content">
                                        <div class="media-content__item media-video">
                                            <video
                                                    class="media-video__item"
                                                    src="demo.mp4"
                                                    preload="auto"
                                                    poster=""
                                                    width="48"
                                                    height="48"
                                            ></video>
                                        </div>
                                    </div>
                                    <div class="swiper-slide media-content">
                                        <div class="media-content__item media-3d"></div>
                                    </div>
                                    <div class="swiper-slide media-content yellow">
                                        <div class="media-content__item media-ar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="bg-dark" style="flex: 1;">text</div>
                </div>
                <div class="card-detail__item card-detail__descr">
                    <div class="gap-xs card-detail__action">
                        <button class="btn-reset btn" type="button">
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#copy"></use>
                            </svg>
                            <span class="text-content">Сравнить</span>
                        </button>
                        <button class="btn-reset btn" type="button">
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#heart"></use>
                            </svg>
                            <span class="text-content">В избранное</span>
                        </button>
                        <button
                                class="btn-reset btn btn-square card-tooltip"
                                type="button"
                                data-tippy-content="Поделиться "
                                data-tippy-desktop-visible
                        >
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#share"></use>
                            </svg>
                        </button>
                        <button
                                class="btn-reset btn btn-square card-tooltip"
                                type="button"
                                data-tippy-content="Печать"
                                data-tippy-desktop-visible
                        >
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#printer"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="gap-md card-detail__header">
                        <div class="h3">Игровой комплекс QUANTWOOD «Сеул»</div>
                        <div class="card-detail__spoiler">
                            <button class="btn-reset btn card-detail__spoiler-item" type="button"> <?/* todo:  data-fancybox data-src="#modal" */?>
                                <svg class="icon icon-fill icon-sm">
                                    <use href="img/sprite.svg#barcode"></use>
                                </svg>
                                <span class="text-content link link-primary link-tdu link-dashed">Артикул: 24352</span>
                            </button>
                            <a class="btn-reset btn card-detail__spoiler-item" href="#test" data-scroll-to>
                                <span class="text-content link link-primary link-tdu link-dashed">О модели</span>
                            </a>
                            <a class="btn-reset btn card-detail__spoiler-item" href="#test2" data-scroll-to>
                                <span class="text-content link link-primary link-tdu link-dashed">15 отзывов</span>
                            </a>
                            <a class="btn-reset btn card-detail__spoiler-item" href="javascript:;" data-scroll-to>
                                <span class="text-content link link-primary link-tdu link-dashed">Доставка и оплата</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-detail__info">
                        <div class="gap-md card-detail__price">
                            <div class="card-detail__price-current">254 000 ₽</div>
                            <div class="card-detail__price-discount">
                                <div class="card-detail__price-origin">290 500 ₽</div>
                                <div class="card-detail__price-minus">
                                    <span class="chip">–15%</span>
                                </div>
                            </div>
                        </div>
                        <div class="gap-md card-detail__cart cart-buy">
                            <div class="cart-quantity">
                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                    <svg class="icon icon-fill icon-lg">
                                        <use href="img/sprite.svg#minus"></use>
                                    </svg>
                                </button>
                                <input
                                        class="input-reset cart-quantity-input"
                                        type="text"
                                        placeholder="999"
                                        value="1"
                                        max="999"
                                        data-mult="1"
                                >
                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                    <svg class="icon icon-fill icon-lg">
                                        <use href="img/sprite.svg#plus"></use>
                                    </svg>
                                </button>
                            </div>
                            <button class="btn-reset btn btn-primary cart-in" type="button"> <?// can be ".success"?>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#filled-cart"></use>
                                </svg>
                                <span class="text-content">Добавить к заказу</span>
                            </button>
                            <button class="btn-reset btn btn-light" type="button">
                                <span class="text-content">Купить в 1 клик</span>
                            </button>
                        </div>
                        <div class="gap-md card-detail__options">
                            <div class="card-detail__options-title">
                                <span>Версия</span>
                            </div>
                            <div class="slider-out basic-slider-wrap">
                                <div class="tag-bar tag-bar-mobile basic-slider swiper" data-tag-bar-slider-mobile>
                                    <div class="tag-bar__list swiper-wrapper">
                                        <div class="tag-bar__item swiper-slide">
                                            <label class="tag-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="CATALOG[TAGS][]"
                                                        value=""
                                                        checked
                                                >
                                                <span class="tag tag--border">
                                                    <span>0,7 м (кресло)</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="tag-bar__item swiper-slide">
                                            <label class="tag-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="CATALOG[TAGS][]"
                                                        value=""
                                                >
                                                <span class="tag tag--border">
                                                    <span>1,2 м</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="tag-bar__item swiper-slide">
                                            <label class="tag-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="CATALOG[TAGS][]"
                                                        value=""
                                                >
                                                <span class="tag tag--border">
                                                    <span>1,8 м</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="tag-bar__item swiper-slide">
                                            <label class="tag-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="CATALOG[TAGS][]"
                                                        value=""
                                                >
                                                <span class="tag tag--border">
                                                    <span>2,0 м (2 опоры)</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="tag-bar__item swiper-slide">
                                            <label class="tag-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="CATALOG[TAGS][]"
                                                        value=""
                                                >
                                                <span class="tag tag--border">
                                                    <span>2,0 м (3 опоры)</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="tag-bar__item swiper-slide">
                                            <label class="tag-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="CATALOG[TAGS][]"
                                                        value=""
                                                >
                                                <span class="tag tag--border">
                                                    <span>3,0 м (3 опоры)</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="tag-bar__item swiper-slide">
                                            <label class="tag-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="CATALOG[TAGS][]"
                                                        value=""
                                                >
                                                <span class="tag tag--border">
                                                    <span>1,5 м (композит)</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="tag-bar__item swiper-slide">
                                            <label class="tag-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="checkbox"
                                                        name="CATALOG[TAGS][]"
                                                        value=""
                                                >
                                                <span class="tag tag--border">
                                                    <span>1,8 м (композит)</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-detail__options-caption">
                                <svg class="icon icon-sm icon-fill">
                                    <use href="img/sprite.svg#info"></use>
                                </svg>
                                <span class="caption-color fz-sm">Поставляется в разобранном виде</span>
                            </div>
                        </div>
                        <div class="gap-md card-detail__options">
                            <div class="card-detail__options-title">
                                <span>Основные цвета</span>
                                <span class="tooltip" data-tippy-content="tooltip content">
                                    <svg class="icon icon-sm icon-fill">
                                        <use href="img/sprite.svg#info"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="slider-out basic-slider-wrap">
                                <div class="choose-color basic-slider swiper" data-colors>
                                    <div class="choose-color__list swiper-wrapper">
                                        <div class="choose-color__item swiper-slide">
                                            <label class="choose-color-elem-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="radio"
                                                        name="DETAIL[COLORS][]"
                                                        value=""
                                                        checked
                                                >
                                                <span class="choose-color-elem">
                                                    <span class="choose-color-elem__view">
                                                        <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/color-mahagon.png"
                                                            width="62"
                                                            height="62"
                                                            alt="Изображение блока"
                                                        >
                                                    </span>
                                                    <span class="choose-color-elem__title">Махагон</span>
                                            </label>
                                        </div>
                                        <div class="choose-color__item swiper-slide">
                                            <label class="choose-color-elem-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="radio"
                                                        name="DETAIL[COLORS][]"
                                                        value=""
                                                >
                                                <span class="choose-color-elem">
                                                    <span class="choose-color-elem__view">
                                                        <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/color-palysandr.png"
                                                            width="62"
                                                            height="62"
                                                            alt="Изображение блока"
                                                        >
                                                    </span>
                                                    <span class="choose-color-elem__title">Палисандр</span>
                                            </label>
                                        </div>
                                        <div class="choose-color__item swiper-slide">
                                            <label class="choose-color-elem-wrapper">
                                                <input
                                                        class="visually-hidden"
                                                        type="radio"
                                                        name="DETAIL[COLORS][]"
                                                        value=""
                                                >
                                                <span class="choose-color-elem">
                                                    <span class="choose-color-elem__view">
                                                        <img
                                                                loading="lazy"
                                                                class="image"
                                                                src="img/color-tik.png"
                                                                width="62"
                                                                height="62"
                                                                alt="Изображение блока"
                                                        >
                                                    </span>
                                                    <span class="choose-color-elem__title">Тик</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hr"></div>

                        <div id="test" class="gap-md card-detail__description">
                            <div class="gap-lg">
                                <div class="gap-md">
                                    <div class="h3">Подробные характеристики</div>
                                </div>
                                <div class="gap-sm card-detail__options">
                                    <div class="card-detail__options-title">
                                        <span>Опоры</span>
                                    </div>
                                    <table class="table-descr">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span>Материал</span>
                                                </td>
                                                <td>
                                                    <span>Сталь. Покрыты порошковой полимерной краской</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Стандартный цвет</span>
                                                </td>
                                                <td>
                                                    <span>чёрный RAL 9005 или серый RAL 7040</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="gap-sm card-detail__options">
                                    <div class="card-detail__options-title">
                                        <span>Сидение и спинка</span>
                                    </div>
                                    <table class="table-descr">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span>Материал</span>
                                                </td>
                                                <td>
                                                    <span>Брус из хвойных пород древесины</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Покрытие</span>
                                                </td>
                                                <td>
                                                    <span>атмосферостойкая лессирующая акриловая пропитка с лаком</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Стандартный цвет</span>
                                                </td>
                                                <td>
                                                    <span>Палисандр, Махагон, Тик</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-detail__options">
                                    <div class="card-detail__options-caption">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#info"></use>
                                        </svg>
                                        <span class="caption-color fz-sm">Производитель оставляет за собой право изменять конфигурацию изделия на своё усмотрение без уведомления заказчика</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gap-lg">
                                <div class="gap-md">
                                    <div class="h3">Технические характеристики</div>
                                </div>
                                <div class="card-detail__options">
                                    <table class="table-descr">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span>Длина</span>
                                                </td>
                                                <td>
                                                    <span>700 мм; 1200 мм; 1500 мм; 1800 мм; 2000 мм; 3000 мм</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Ширина</span>
                                                </td>
                                                <td>
                                                    <span>610 мм</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Высота</span>
                                                </td>
                                                <td>
                                                    <span>835 мм</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Вес</span>
                                                </td>
                                                <td>
                                                    <span>17,02 кг; 19,84 кг; 22,62 кг; 24,8 кг; 30,62 кг; 38,81 кг</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Объём для  транспортировки</span>
                                                </td>
                                                <td>
                                                    <span>0,067 м3; 0,115 м3; 0,144 м3; 0,172 м3; 0,21 м3; 0,29 м3</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Ширина сиденья</span>
                                                </td>
                                                <td>
                                                    <span>413 мм</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Высота сиденья</span>
                                                </td>
                                                <td>
                                                    <span>473 мм</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="">
                                <div class="gap-md">
                                    <div class="h3">Описание</div>
                                </div>
                                <div class="fz-sm">
                                    <p><b>Варианты исполнения:</b> ангарская сосна, лиственница, композитные материалы, термодерево. Возможность выбора цвета из палитры.</p>
                                    <p>Производство деревянных деталей не предусматривает выбора по сортности. Использование сортов Экстра, Прима и других сортов без сучков - с дополнительной наценкой.</p>
                                    <p>Композитные материалы. Рейки изготовлены из композитных материалов сечением 35х60 мм - они не требуют никакой дополнительной обработки и покраски. Ламели имеют нанесенную текстуру дерева. Возможность выбора цвета из палитры. Используется композит «Капелька».</p>
                                    <p><b>Металлические части:</b> Возможность выбора цвета по каталогу RAL.</p>
                                    <p>Скамейка стальная «Модерн» с деревянными подлокотниками обладает удобными посадочными местами. Деревянный подлокотник помимо эстетических свойств служит дополнительной опорой, преимущество которой оценят люди пожилого возраста.</p>
                                    <p>Скамейка «Модерн» может быть использована при необходимости создания обеденной группы в едином стиле. Вы можете дополнить скамейку широким садовым столом или удобным креслом, опоры которого выполнены в одном со скамейкой стиле. При необходимости вы можете воспользоваться услугами по сборке скамейки или заказать доставку скамейки в любую точку России.</p>
                                </div>
                            </div>
                        </div>

                        <div class="hr"></div>

                        <div id="test2" class="card-detail__description">
                            <div class="gap-md">
                                <div class="heading">
                                    <div class="heading-title-container">
                                        <div class="heading-title h3">Отзывы</div>
                                        <a class="heading-title-content link link-secondary link-tdu-hover" href="javascript:;">15 отзывов</a>
                                    </div>
                                    <div class="heading-btn-container">
                                        <button class="btn-reset btn btn-secondary" type="button">
                                            <span class="text-content">Написать отзыв</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="gap-md">
                                <ul class="list-reset card-detail__review">
                                    <li class="card-detail__review-item">
                                        <div class="card-detail__review-title">Борисов Глеб</div>
                                        <div class="card-detail__review-text spoiler-wrapper">
                                            <div
                                                    class="spoiler"
                                                    data-spoiler
                                                    data-collapsed-height="100"
                                                    data-spoiler-more="Читать полностью"
                                            >
                                                <div class="spoiler-content">
                                                    <p>Для нашего жилищного комплекса заказали такие скамейки "Модерн". Их особенность - в квадратных планках, что выглядит стильно и современно. Древесина надежно закреплена и полностью со всех сторон покрашена. Все сделано аккуратно, качеством довольны. Для нашего жилищного комплекса заказали такие скамейки "Модерн". Их особенность - в квадратных планках, что выглядит стильно и современно. Древесина надежно закреплена и полностью со всех сторон покрашена. Все сделано аккуратно, качеством довольны.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-detail__review-item">
                                        <div class="card-detail__review-title">Настя Варе</div>
                                        <div class="card-detail__review-text spoiler-wrapper">
                                            <div
                                                    class="spoiler"
                                                    data-spoiler
                                                    data-collapsed-height="100"
                                                    data-spoiler-more="Читать полностью"
                                            >
                                                <div class="spoiler-content">
                                                    <p>Лавочка понравилась мне необычно закрепленной древесиной. Сразу видно, стильная вещь. Я заказала два кресла и одну лавку в стиле модерн. Выбрала цвет махагон, очень понравился.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-detail__review-item">
                                        <div class="card-detail__review-title">Илья Гурьев</div>
                                        <div class="card-detail__review-text spoiler-wrapper">
                                            <div
                                                    class="spoiler"
                                                    data-spoiler
                                                    data-collapsed-height="100"
                                                    data-spoiler-more="Читать полностью"
                                            >
                                                <div class="spoiler-content">
                                                    <p>Симпатичный игровой комплекс. Заказали, как на картинке, с голубыми крышами. Выглядит как парусник. Детвора в восторге, и на горки очереди нету, так как их две. Здорово, что у нас делают такие красивые и классные комплексы для деток</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="pagination-wrapper">
								<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-md">
	<div class="hr"></div>
</div>

<div class="gap-xl">
    <div class="container">
        <div class="basic-tabs">
            <div class="gap-sm slider-out basic-slider-wrap">
                <div class="basic-tabs-container basic-slider swiper" data-tab="more-prod-tabs" data-tabs-slider>
                    <div class="basic-tabs-slider-list swiper-wrapper reset-slider-list">
                        <div class="basic-tabs-item swiper-slide">
                            <span class="tab basic-tabs-trigger active" data-target="recommend"><span>С этим товаром рекомендуем</span></span>
                        </div>
                        <div class="basic-tabs-item swiper-slide">
                            <span class="tab basic-tabs-trigger" data-target="similar"><span>Похожие товары</span></span>
                        </div>
                        <div class="basic-tabs-item swiper-slide">
                            <span class="tab basic-tabs-trigger" data-target="collection"><span>Из этой же коллекции</span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="basic-tabs-content" data-tab-content="more-prod-tabs">
                <div class="basic-tabs-content__panel active" data-id="recommend">
                    <div class="basic-tabs-content__content">
                        <div class="slider-out basic-slider-wrap nav-out-wrap">
                            <div class="product-slider basic-slider basic-slider-overflow-visible nav-out swiper" data-basic-slider>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a class="card__view" href="javascript:;">
                                                <div class="card__view-content">
                                                    <div class="mini-slider">
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-1.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-2.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-3.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <ul class="list-reset mini-slider__dots"></ul>
                                                    </div>
                                                    <div class="card__ar">
                                                        <button class="btn-reset btn btn-primary-invert tooltip" type="button" data-tippy-content="AR">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#box-3d"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">
                                                    <span>Артикул: 7112</span>
                                                </div>
                                                <a class="card__title" href="javascript:;">Кресло-адирондак «Астрид»</a>
                                                <div class="card__info">
                                                    <div class="card__price">
                                                        <div class="card__price-current">16 920 ₽</div>
                                                        <div class="card__price-discount">
                                                            <div class="card__price-origin">18 560 ₽ </div>
                                                            <div class="card__price-minus">
                                                                <span class="chip">–15%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card__stock stock in-stock">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#box-check"></use>
                                                        </svg>
                                                        <span>Есть 12 шт. в наличии</span>
                                                    </div>
                                                    <div class="card__cart">
                                                        <button class="btn-reset btn btn-sm btn-primary cart-in" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#filled-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                        <div class="card__act">
                                                            <button class="btn-reset btn card__act-more" data-card-act-more="">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#dots"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="card__act-content" data-card-act-content="">
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#heart"></use>
                                                                    </svg>
                                                                    <span class="text-content">В избранное</span>
                                                                </button>
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="Сравнить">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                    <span class="text-content">Сравнить</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__extra">
                                                    <div class="table-descr-wrapper">
                                                        <table class="table-descr table-descr--column">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span>Материал</span>
                                                                </td>
                                                                <td>
                                                                    <span>Сталь, дерево</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Размеры (Д×Ш×В)</span>
                                                                </td>
                                                                <td>
                                                                    <span>500×621×927</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Поставляется</span>
                                                                </td>
                                                                <td>
                                                                    <span>В разобранном виде</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a class="card__view" href="javascript:;">
                                                <div class="card__view-content">
                                                    <div class="mini-slider">
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-2.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-3.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-4.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <ul class="list-reset mini-slider__dots"></ul>
                                                    </div>
                                                    <div class="card__sale-label">
                                                        <span class="chip chip-hit-star">Хит</span>
                                                    </div>
                                                    <div class="card__ar">
                                                        <button class="btn-reset btn btn-primary-invert tooltip" type="button" data-tippy-content="AR">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#box-3d"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">
                                                    <span>Артикул: 7112</span>
                                                </div>
                                                <a class="card__title" href="javascript:;">Скамейка стальная «Модерн»</a>
                                                <div class="card__info">
                                                    <div class="card__price">
                                                        <div class="card__price-current">13 500 ₽</div>
                                                    </div>
                                                    <div class="card__stock stock on-order">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#clock"></use>
                                                        </svg>
                                                        <span>Доступно с 4 февраля</span>
                                                    </div>
                                                    <div class="card__cart">
                                                        <button class="btn-reset btn btn-sm btn-primary cart-in" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#filled-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                        <div class="card__act">
                                                            <button class="btn-reset btn card__act-more" data-card-act-more="">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#dots"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="card__act-content" data-card-act-content="">
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#heart"></use>
                                                                    </svg>
                                                                    <span class="text-content">В избранное</span>
                                                                </button>
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="Сравнить">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                    <span class="text-content">Сравнить</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__extra">
                                                    <div class="table-descr-wrapper">
                                                        <table class="table-descr table-descr--column">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span>Материал</span>
                                                                </td>
                                                                <td>
                                                                    <span>Сталь, дерево</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Размеры (Д×Ш×В)</span>
                                                                </td>
                                                                <td>
                                                                    <span>500×621×927</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Поставляется</span>
                                                                </td>
                                                                <td>
                                                                    <span>В разобранном виде</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a class="card__view" href="javascript:;">
                                                <div class="card__view-content">
                                                    <div class="mini-slider">
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-3.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-3.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-3.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <ul class="list-reset mini-slider__dots"></ul>
                                                    </div>
                                                    <div class="card__sale-label">
                                                        <span class="chip chip-hit-star">Хит</span>
                                                    </div>
                                                    <div class="card__ar">
                                                        <button class="btn-reset btn btn-primary-invert tooltip" type="button" data-tippy-content="AR">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#box-3d"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">
                                                    <span>Артикул: 7112</span>
                                                </div>
                                                <a class="card__title" href="javascript:;">Скамейка стальная «Модерн» без подлокотников</a>
                                                <div class="card__info">
                                                    <div class="card__price">
                                                        <div class="card__price-current">116 400 ₽</div>
                                                    </div>
                                                    <div class="card__stock stock in-stock">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#box-check"></use>
                                                        </svg>
                                                        <span>Есть 21 шт. в наличии</span>
                                                    </div>
                                                    <div class="card__cart">
                                                        <button class="btn-reset btn btn-sm btn-primary cart-in" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#filled-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                        <div class="card__act">
                                                            <button class="btn-reset btn card__act-more" data-card-act-more="">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#dots"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="card__act-content" data-card-act-content="">
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#heart"></use>
                                                                    </svg>
                                                                    <span class="text-content">В избранное</span>
                                                                </button>
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="Сравнить">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                    <span class="text-content">Сравнить</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__extra">
                                                    <div class="table-descr-wrapper">
                                                        <table class="table-descr table-descr--column">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span>Материал</span>
                                                                </td>
                                                                <td>
                                                                    <span>Сталь, дерево</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Размеры (Д×Ш×В)</span>
                                                                </td>
                                                                <td>
                                                                    <span>500×621×927</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Поставляется</span>
                                                                </td>
                                                                <td>
                                                                    <span>В разобранном виде</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a class="card__view" href="javascript:;">
                                                <div class="card__view-content">
                                                    <div class="mini-slider">
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-4.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-4.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-4.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <ul class="list-reset mini-slider__dots"></ul>
                                                    </div>
                                                    <div class="card__ar">
                                                        <button class="btn-reset btn btn-primary-invert tooltip" type="button" data-tippy-content="AR">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#box-3d"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">
                                                    <span>Артикул: 7112</span>
                                                </div>
                                                <a class="card__title" href="javascript:;">Зарядное устройство и точка доступа Wi-Fi «Валли» 2xUSB и 1x220V</a>
                                                <div class="card__info">
                                                    <div class="card__price">
                                                        <div class="card__price-current">254 000 ₽</div>
                                                        <div class="card__price-discount">
                                                            <div class="card__price-origin">290 500 ₽</div>
                                                            <div class="card__price-minus">
                                                                <span class="chip">–15%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card__stock stock in-stock">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#box-check"></use>
                                                        </svg>
                                                        <span>Есть 3 шт. в наличии</span>
                                                    </div>
                                                    <div class="card__cart">
                                                        <button class="btn-reset btn btn-sm btn-primary cart-in" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#filled-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                        <div class="card__act">
                                                            <button class="btn-reset btn card__act-more" data-card-act-more="">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#dots"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="card__act-content" data-card-act-content="">
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#heart"></use>
                                                                    </svg>
                                                                    <span class="text-content">В избранное</span>
                                                                </button>
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="Сравнить">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                    <span class="text-content">Сравнить</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__extra">
                                                    <div class="table-descr-wrapper">
                                                        <table class="table-descr table-descr--column">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span>Материал</span>
                                                                </td>
                                                                <td>
                                                                    <span>Сталь, дерево</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Размеры (Д×Ш×В)</span>
                                                                </td>
                                                                <td>
                                                                    <span>500×621×927</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Поставляется</span>
                                                                </td>
                                                                <td>
                                                                    <span>В разобранном виде</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a class="card__view" href="javascript:;">
                                                <div class="card__view-content">
                                                    <div class="mini-slider">
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-1.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-1.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-1.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <ul class="list-reset mini-slider__dots"></ul>
                                                    </div>
                                                    <div class="card__ar">
                                                        <button class="btn-reset btn btn-primary-invert tooltip" type="button" data-tippy-content="AR">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#box-3d"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">
                                                    <span>Артикул: 7112</span>
                                                </div>
                                                <a class="card__title" href="javascript:;">Кресло-адирондак «Астрид»</a>
                                                <div class="card__info">
                                                    <div class="card__price">
                                                        <div class="card__price-current">16 920 ₽</div>
                                                        <div class="card__price-discount">
                                                            <div class="card__price-origin">18 560 ₽ </div>
                                                            <div class="card__price-minus">
                                                                <span class="chip">–15%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card__stock stock in-stock">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#box-check"></use>
                                                        </svg>
                                                        <span>Есть 12 шт. в наличии</span>
                                                    </div>
                                                    <div class="card__cart">
                                                        <button class="btn-reset btn btn-sm btn-primary cart-in" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#filled-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                        <div class="card__act">
                                                            <button class="btn-reset btn card__act-more" data-card-act-more="">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#dots"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="card__act-content" data-card-act-content="">
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#heart"></use>
                                                                    </svg>
                                                                    <span class="text-content">В избранное</span>
                                                                </button>
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="Сравнить">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                    <span class="text-content">Сравнить</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__extra">
                                                    <div class="table-descr-wrapper">
                                                        <table class="table-descr table-descr--column">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span>Материал</span>
                                                                </td>
                                                                <td>
                                                                    <span>Сталь, дерево</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Размеры (Д×Ш×В)</span>
                                                                </td>
                                                                <td>
                                                                    <span>500×621×927</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Поставляется</span>
                                                                </td>
                                                                <td>
                                                                    <span>В разобранном виде</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a class="card__view" href="javascript:;">
                                                <div class="card__view-content">
                                                    <div class="mini-slider">
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-2.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-2.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-2.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <ul class="list-reset mini-slider__dots"></ul>
                                                    </div>
                                                    <div class="card__sale-label">
                                                        <span class="chip chip-hit-star">Хит</span>
                                                    </div>
                                                    <div class="card__ar">
                                                        <button class="btn-reset btn btn-primary-invert tooltip" type="button" data-tippy-content="AR">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#box-3d"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">
                                                    <span>Артикул: 7112</span>
                                                </div>
                                                <a class="card__title" href="javascript:;">Скамейка стальная «Модерн»</a>
                                                <div class="card__info">
                                                    <div class="card__price">
                                                        <div class="card__price-current">13 500 ₽</div>
                                                    </div>
                                                    <div class="card__stock stock on-order">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#clock"></use>
                                                        </svg>
                                                        <span>Доступно с 4 февраля</span>
                                                    </div>
                                                    <div class="card__cart">
                                                        <button class="btn-reset btn btn-sm btn-primary cart-in" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#filled-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                        <div class="card__act">
                                                            <button class="btn-reset btn card__act-more" data-card-act-more="">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#dots"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="card__act-content" data-card-act-content="">
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#heart"></use>
                                                                    </svg>
                                                                    <span class="text-content">В избранное</span>
                                                                </button>
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="Сравнить">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                    <span class="text-content">Сравнить</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__extra">
                                                    <div class="table-descr-wrapper">
                                                        <table class="table-descr table-descr--column">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span>Материал</span>
                                                                </td>
                                                                <td>
                                                                    <span>Сталь, дерево</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Размеры (Д×Ш×В)</span>
                                                                </td>
                                                                <td>
                                                                    <span>500×621×927</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Поставляется</span>
                                                                </td>
                                                                <td>
                                                                    <span>В разобранном виде</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card card-product">
                                            <a class="card__view" href="javascript:;">
                                                <div class="card__view-content">
                                                    <div class="mini-slider">
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-3.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-3.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <div class="mini-slider__slide">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image mini-slider__img"
                                                                    src="img/product-3.png"
                                                                    width="286"
                                                                    height="286"
                                                                    alt="Изображение блока"
                                                            >
                                                        </div>
                                                        <ul class="list-reset mini-slider__dots"></ul>
                                                    </div>
                                                    <div class="card__sale-label">
                                                        <span class="chip chip-hit-star">Хит</span>
                                                    </div>
                                                    <div class="card__ar">
                                                        <button class="btn-reset btn btn-primary-invert tooltip" type="button" data-tippy-content="AR">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#box-3d"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card__descr">
                                                <div class="card__caption">
                                                    <span>Артикул: 7112</span>
                                                </div>
                                                <a class="card__title" href="javascript:;">Скамейка стальная «Модерн» без подлокотников</a>
                                                <div class="card__info">
                                                    <div class="card__price">
                                                        <div class="card__price-current">116 400 ₽</div>
                                                    </div>
                                                    <div class="card__stock stock in-stock">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#box-check"></use>
                                                        </svg>
                                                        <span>Есть 21 шт. в наличии</span>
                                                    </div>
                                                    <div class="card__cart">
                                                        <button class="btn-reset btn btn-sm btn-primary cart-in" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#filled-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                        <div class="card__act">
                                                            <button class="btn-reset btn card__act-more" data-card-act-more="">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#dots"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="card__act-content" data-card-act-content="">
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#heart"></use>
                                                                    </svg>
                                                                    <span class="text-content">В избранное</span>
                                                                </button>
                                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="Сравнить">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                    <span class="text-content">Сравнить</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__extra">
                                                    <div class="table-descr-wrapper">
                                                        <table class="table-descr table-descr--column">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span>Материал</span>
                                                                </td>
                                                                <td>
                                                                    <span>Сталь, дерево</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Размеры (Д×Ш×В)</span>
                                                                </td>
                                                                <td>
                                                                    <span>500×621×927</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span>Поставляется</span>
                                                                </td>
                                                                <td>
                                                                    <span>В разобранном виде</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-navigation dark-theme">
                                    <div class="swiper-button-next">
                                        <button class="btn-reset btn btn-square">
                                            <svg class="icon icon-fill icon-sm">
                                                <use href="img/sprite.svg#arrow-left"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <button class="btn-reset btn btn-square">
                                            <svg class="icon icon-fill icon-sm">
                                                <use href="img/sprite.svg#arrow-left"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basic-tabs-content__panel" data-id="similar">
                    <div class="basic-tabs-content__content">
                        2
                    </div>
                </div>
                <div class="basic-tabs-content__panel" data-id="collection">
                    <div class="basic-tabs-content__content">3</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xl">
	<div class="container">
		<div class="hr"></div>
	</div>
</div>

<div class="gap-xl">
	<div class="container">
		<div class="hbk-advantages">
			<div class="hbk-advantages__item">
				<div class="hbk-advantages__view">
					<div class="hbk-advantages__pic">
						<svg class="icon icon-fill">
							<use href="img/sprite.svg#stack"></use>
						</svg>
					</div>
				</div>
				<div class="hbk-advantages__descr">
					<div class="hbk-advantages__title fz-md">Широкий ассортимент и собственное производство</div>
					<div class="hbk-advantages__subtitle">В нашем ассортименте представлено оборудование как муниципального, так и индивидуального назначения</div>
				</div>
			</div>
			<div class="hbk-advantages__item">
				<div class="hbk-advantages__view">
					<div class="hbk-advantages__pic">
						<svg class="icon icon-fill">
							<use href="img/sprite.svg#lovely"></use>
						</svg>
					</div>
				</div>
				<div class="hbk-advantages__descr">
					<div class="hbk-advantages__title fz-md">Гарантийное обслуживание продукции</div>
					<div class="hbk-advantages__subtitle">Мы создали собственный сервисный центр для гарантийного и постгарантийного обслуживания</div>
				</div>
			</div>
			<div class="hbk-advantages__item">
				<div class="hbk-advantages__view">
					<div class="hbk-advantages__pic">
						<svg class="icon icon-fill">
							<use href="img/sprite.svg#wallet"></use>
						</svg>
					</div>
				</div>
				<div class="hbk-advantages__descr">
					<div class="hbk-advantages__title fz-md">Удобные формы оплаты</div>
					<div class="hbk-advantages__subtitle">Оплачивайте заказ как вам удобно: безналичный расчет, наличные, банковские карты или в кредит</div>
				</div>
			</div>
			<div class="hbk-advantages__item">
				<div class="hbk-advantages__view">
					<div class="hbk-advantages__pic">
						<svg class="icon icon-fill">
							<use href="img/sprite.svg#delivery"></use>
						</svg>
					</div>
				</div>
				<div class="hbk-advantages__descr">
					<div class="hbk-advantages__title fz-md">Доставка по всей России</div>
					<div class="hbk-advantages__subtitle">Доставим груз в любую точку России транспортными компаниями: Деловые Линии, Байкал-Сервис, ЖелДорЭкспедиция, ПЭК</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="gap-xl">
	<div class="container">
		<div class="hbk-about-text">
			<div class="gap-xs">
				<div class="h4">Купить уличное спортивное оборудование от отечественного производителя</div>
			</div>
			<div class="spoiler-wrapper">
				<div
					class="spoiler"
					data-spoiler
					data-collapsed-height="135"
				>
                    <div class="spoiler-content">
                        <p>У нас вы найдете обширный ассортимент тренажеров и целые комплексы для спортгородков, а также сможете приобрести оборудование для воркаута. Компания Хоббика производит и реализует обширный ассортимент высококачественного уличного спортивного оборудования для детских и школьных площадок.</p>
                        <p>В каталоге Вы найдете различные виды спортивного уличного оборудования: брусья, турники, спортивные комплексы, оборудование для воркаута и другое</p>
                        <p>Заказывайте то, что нужно для отличного отдыха и спортивного развития детей и взрослых. Произведем продукцию высшего качества и осуществим установку.</p>
                        <p>Уличное спортивное оборудование предназначается для установки на детских и взрослых площадках. Без специальных тренажеров, воркаут-комплексов, игровых приборов и прочих приспособлений любая спортивная площадка будет оставаться только территорией, непригодной для практического применения.</p>
                        <p>При этом важно покупать только высококачественное спортивное оборудование для уличных площадок. Необходимо учитывать, что тренажеры будут постоянно находиться под интенсивным воздействием окружающей среды, поэтому они должны отличаться стойкостью к коррозии, влиянию влаги, солнца и температурных перепадов. Уличное спортивное оборудование для школ и детских площадок при этом должно отличаться повышенной эргономичностью и безопасностью, учитывая, что пользоваться им будут исключительно дети.</p>
                        <p>Кроме того, взрослое и детское спортивное уличное оборудование должно быть прочным, поскольку большинство площадок доступны вандалам, и важно, чтобы тренажеры было крайне сложно сломать.</p>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="gap-xl">
	<div class="cover-section">
		<div class="container">
			<div class="gap-sm ">
				<div class="h4 fw-bold">Вы недавно смотрели</div>
			</div>
			<div class="slider-out basic-slider-wrap nav-out-wrap">
				<div class="basic-slider nav-out swiper" data-basic-slider>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="card card-info">
								<a class="card__view" href="javascript:;">
									<div class="card__view-content">
										<img
											loading="lazy"
											class="image"
											src="img/prod-1.png"
											width="409"
											height="280"
											alt="Изображение блока"
										>
									</div>
								</a>
								<div class="card__descr">
									<a class="card__title" href="javascript:;">Игровой комплекс HARDWOOD «Катания»</a>
									<div class="card__info">
										<div class="card__price">
											<div class="card__price-current">13 500 ₽</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card card-info">
								<a class="card__view" href="javascript:;">
									<div class="card__view-content">
										<img
											loading="lazy"
											class="image"
											src="img/prod-2.png"
											width="409"
											height="280"
											alt="Изображение блока"
										>
									</div>
								</a>
								<div class="card__descr">
									<a class="card__title" href="javascript:;">Игровой комплекс HARDWOOD «Каракас»</a>
									<div class="card__info">
										<div class="card__price">
											<div class="card__price-current">254 000 ₽</div>
											<div class="card__price-discount">
												<div class="card__price-origin">290 500 ₽</div>
												<div class="card__price-minus">
													<span class="chip">–15%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card card-info">
								<a class="card__view" href="javascript:;">
									<div class="card__view-content">
										<img
											loading="lazy"
											class="image"
											src="img/prod-3.png"
											width="409"
											height="280"
											alt="Изображение блока"
										>
									</div>
								</a>
								<div class="card__descr">
									<a class="card__title" href="javascript:;">Карусель BALKWOOD «Орландо»</a>
									<div class="card__info">
										<div class="card__price">
											<div class="card__price-current">16 920 ₽</div>
											<div class="card__price-discount">
												<div class="card__price-origin">18 560 ₽</div>
												<div class="card__price-minus">
													<span class="chip">–15%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card card-info">
								<a class="card__view" href="javascript:;">
									<div class="card__view-content">
										<img
											loading="lazy"
											class="image"
											src="img/prod-4.png"
											width="409"
											height="280"
											alt="Изображение блока"
										>
									</div>
								</a>
								<div class="card__descr">
									<a class="card__title" href="javascript:;">Игровой комплекс AQUAWOOD «Рыбинск»</a>
									<div class="card__info">
										<div class="card__price">
											<div class="card__price-current">116 400 ₽</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-navigation dark-theme">
						<div class="swiper-button-next">
							<button class="btn-reset btn btn-square">
								<svg class="icon icon-fill icon-sm">
									<use href="img/sprite.svg#arrow-left"></use>
								</svg>
							</button>
						</div>
						<div class="swiper-button-prev">
							<button class="btn-reset btn btn-square">
								<svg class="icon icon-fill icon-sm">
									<use href="img/sprite.svg#arrow-left"></use>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>