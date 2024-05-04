document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initHeaderScroll();
    this.initBurger();
    this.initOverlay();
    this.initDropdownMenu();
    this.initBasicSlider();
    this.initBasicTabSlider();
    this.initSliders();
    this.initReadmore();
    this.initClipboard();
    this.initTooltips();
    this.initInputSearch();
    this.initHeaderInputSearch();
    this.initTagbarSlider();
    this.initMaskedInput();
    this.initSwitchContent();
    this.initNotification();
    this.initCatalogPriceSlider();
    this.initCatalogSidebarFilter();
    this.initCatalogSidebarApplyFilter();
    this.initCatalogContentSort();
    this.initContactsMap();
    this.initBasicTabs();
    this.initAccordion();
    this.initFancyBehavior();
    this.initPasswordSwitcher();
    this.initDatepicker();
};

// Initialization disable scroll
application.prototype.disableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    const paddingOffset = `${(window.innerWidth - body.offsetWidth)}px`;

    document.documentElement.style.scrollBehavior = 'none';
    fixBlocks.forEach(el => { el.style.paddingRight = paddingOffset; });
    body.style.paddingRight = paddingOffset;
    body.classList.add('dis-scroll');
};

// Initialization enable scroll
application.prototype.enableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    fixBlocks.forEach(el => { el.style.paddingRight = '0px'; });
    body.style.paddingRight = '0px';
    body.classList.remove('dis-scroll');
};

// Initialization device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};

// Initialization header scroll
application.prototype.initHeaderScroll = function () {
    $(window).scroll(function () {
        setHeaderScroll();
    });
    setHeaderScroll();
    $(window).resize(setHeaderScroll);

    function setHeaderScroll() {
        let sensDistance = 1;

        if (window.matchMedia('(min-width: 1200px)').matches) {
            sensDistance = 60;
        } else if (window.matchMedia('(min-width: 992px) and (max-width: 1199.98px)').matches) {
            sensDistance = 24;
        }

        if ($(window).scrollTop() > sensDistance) {
            $('.header').addClass('scrolled');
        } else {
            $('.header').removeClass('scrolled');
        }
    }
};

// Initialization burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            this.disableScroll();
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            this.enableScroll();
        }
    });

    menuClose?.addEventListener('click', () => {
        setMenuClose();
        $('.overlay').remove();
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        return application.prototype.enableScroll();
    }
};

// Initialization overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const body = $('body');
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            body.addClass('overflow-hidden');
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });

        function setTargetAction() {
            body.removeClass('overflow-hidden');
            $('.overlay').remove();
            return application.prototype.enableScroll();
        }
    }
};

// Initialization dropdown menu
application.prototype.initDropdownMenu = function () {
    if ($('.dropdown-container').length) {
        let spoiler = $('.dropdown-spoiler');
        let dropdown = $('.dropdown-menu');

        spoiler.on('mouseover', function () {
            $(this).addClass('active');
            $(this).next('.dropdown-menu').addClass('active');
        });
        dropdown.on('mouseover', function () {
            $(this).prev('.dropdown-spoiler').addClass('active');
            $(this).addClass('active');
        });
        spoiler.on('mouseout', function () {
            spoiler.removeClass('active');
            dropdown.removeClass('active');
        });
        dropdown.on('mouseout', function () {
            spoiler.removeClass('active');
            dropdown.removeClass('active');
        });
    }
};

// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');
        let spaceBetweenDesktop = 20;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);
            if ($(this).is('[data-basic-slider-gap]')) {
                spaceBetweenDesktop = 40;
            }

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 12,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-slider-wrap-' + i + ' .swiper-pagination',
                    type: 'bullets',
                },
                breakpoints: {
                    992: {
                        spaceBetween: spaceBetweenDesktop
                    },
                }
            };

            basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialization basic tab slider
application.prototype.initBasicTabSlider = function () {
    if ($('[data-tabs-slider]').length) {
        const slider = $('[data-tabs-slider]');
        let basicTabSlider = null;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            basicTabSlider = new Swiper('.basic-slider-wrap-' + i + ' [data-tabs-slider]', {
                slidesPerView: 'auto',
                spaceBetween: 8,
                breakpoints: {
                    992: {
                        spaceBetween: 12,
                    },
                }
            });
        });
    }

    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider-min-gap]');
        let spaceBetweenDesktop = 12;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 8,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-slider-wrap-' + i + ' .swiper-pagination',
                    type: 'bullets',
                },
                breakpoints: {
                    992: {
                        spaceBetween: spaceBetweenDesktop
                    },
                }
            };

            basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialization sliders
application.prototype.initSliders = function () {
    if ($('.nav-breadcrumbs').length) {
        let sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            spaceBetween: 0,
            slidesPerView: 'auto',
        });
    }

    if ($('.index-slider-wrapper').length) {
        const indexSliderDesktopSettings = new Swiper('.index-slider', {
            slidesPerView: 1,
            autoHeight: true,
            effect: 'fade',
            watchOverflow: true,
            navigation: {
                nextEl: '.index-slider .swiper-button-next',
                prevEl: '.index-slider .swiper-button-prev',
            },
            pagination: {
                el: ".index-slider .swiper-pagination",
                clickable: true,
            },
        });
    }
};

// Initialization readmore plugin
application.prototype.initReadmore = function () {
    if ($('[data-spoiler]').length) {
        const spoiler = $('[data-spoiler]');

        spoiler.each(function (i) {
            let currentMoreText = $(this).data('spoiler-more');
            let currentLessText = $(this).data('spoiler-less');
            let defaultHeight = 340;
            let defaultMoreText = 'Показать все';
            let defaultLessText = 'Свернуть';
            let currentElemHeight = spoiler.eq(i).data('collapsed-height');

            if ($(this).is('[data-spoiler-more]')) {
                currentMoreText = currentMoreText;
                currentLessText = defaultLessText;
            } else if ($(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = currentLessText;
            } else if (!$(this).is('[data-spoiler-more]') && !$(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = defaultLessText;
            }

            if (currentElemHeight === '' || currentElemHeight === null || currentElemHeight === undefined) {
                currentElemHeight = defaultHeight;
            }

            if ($(this).find('.spoiler-content').height() > defaultHeight) {
                $(this).addClass('spoiler-scrolled');
            }

            spoiler.eq(i).addClass('spoiler-' + i);
            $('.spoiler-' + i).readmore({
                collapsedHeight: currentElemHeight,
                moreLink: '<a class="link link-secondary link-tdu link-dashed" href="javascript:;">\n' +
                    '           <span class="text-content">' + currentMoreText + '</span>\n' +
                    '       </a>',
                lessLink: '<a class="link link-secondary link-tdu link-dashed" href="javascript:;">\n' +
                    '           <span class="text-content">' + currentLessText + '</span>\n' +
                    '       </a>',
            });
        });
    }
};

// Initialization clipboard
application.prototype.initClipboard = function () {
    if ($('[data-clipboard]').length) {
        let clipboardBtn = $('.clipboard-trigger');

        clipboardBtn.on('click', function () {
            let clipboardValue = $(this).closest('[data-clipboard]').find('.clipboard-target');
            copyToClipboard(clipboardValue);
        });

        function copyToClipboard(element) {
            let $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
    }
};

// Initialization tooltips
application.prototype.initTooltips = function () {
    if ($(".tooltip").length) {
        tippy(".tooltip", {
            allowHTML: true,
            trigger: "mouseenter click",
        });
    }
};

// Initialization input-search behavior
application.prototype.initInputSearch = function () {
    if ($('.input-search').length) {
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').removeClass('has-data');
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};

// Initialization header input-search behavior
application.prototype.initHeaderInputSearch = function () {
    if ($('.header-search').length) {
        $('.input-search').on('click', function () {
            if (!$(this).closest('.header-search').is('on-focus')) {
                $('.header-search').addClass('on-focus');
            }
        });

        $(document).on('click', function (e) {
            if (!$('.input-search').is(e.target)) {
                $('.header-search').removeClass('on-focus');
            }
        });
    }
};

// Initialization tag-bar slider
application.prototype.initTagbarSlider = function () {
    if ($('[data-tag-bar-slider]').length) {
        const slider = $('[data-tag-bar-slider]');

        slider.each(function (i) {
            slider.eq(i).addClass('tag-bar-slider-' + i);

            let tagbarSlider = new Swiper('.tag-bar-slider-' + i, {
                slidesPerView: 'auto',
                spaceBetween: 4,
                direction: 'horizontal',
                breakpoints: {
                    992: {
                        spaceBetween: 8,
                    },
                }
            });
        });
    }
};

// Initialization mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
};

// Initialization switch content
application.prototype.initSwitchContent = function () {
    $('.switch-content').on('click', function () {
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    });
};

// Initialization notification
application.prototype.initNotification = function () {
    const actionNotice = $('.action-notice');
    const noticeBtn = $('[data-notice]');

    noticeBtn.on('click', function () {
        let currentDataValue = noticeBtn.data('notice');

        actionNotice
            .fadeOut()
            .removeClass('added');

        if ($(this).hasClass('active')) {
            showNotification();
            setTimeout(hideNotification, 3000);
            return;
        }
    });

    function showNotification() {
        actionNotice
            .addClass('added')
            .fadeIn()
            .animate({ opacity: 1 }, 200);
    }

    function hideNotification() {
        actionNotice
            .fadeOut('slow')
            .removeClass('added');
    }
};

// Initialization range slider
application.prototype.initCatalogPriceSlider = function () {
    if ($('.range-slider').length) {
        const slider = document.getElementById('range-slider');
        const inputNumMin = document.getElementById('rsf_min');
        const inputNumMax = document.getElementById('rsf_max');
        let inputs = [inputNumMin, inputNumMax];

        noUiSlider.create(slider, {
            start: [10, 60],
            step: 1,
            connect: true,
            range: {
                'min': [0],
                'max': [100],
            }
        });

        slider.noUiSlider.on('update', function (values, handle) {
            inputs[handle].value = values[handle];
        });

        // Listen to keydown events on the input field.
        inputs.forEach(function (input, handle) {
            input.addEventListener('change', function () {
                slider.noUiSlider.setHandle(handle, this.value);
            });

            input.addEventListener('keydown', function (e) {
                let values = slider.noUiSlider.get();
                let value = Number(values[handle]);

                // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
                let steps = slider.noUiSlider.steps();

                // [down, up]
                let step = steps[handle];

                let position;

                // 13 is enter,
                // 38 is key up,
                // 40 is key down.
                switch (e.which) {
                    case 13:
                        slider.noUiSlider.setHandle(handle, this.value);

                        break;
                    case 38:
                        // Get step to go increase slider value (up)
                        position = step[1];

                        // false = no step is set
                        if (position === false) {
                            position = 1;
                        }

                        // null = edge of slider
                        if (position !== null) {
                            slider.noUiSlider.setHandle(handle, value + position);
                        }

                        break;
                    case 40:
                        position = step[0];

                        if (position === false) {
                            position = 1;
                        }

                        if (position !== null) {
                            slider.noUiSlider.setHandle(handle, value - position);
                        }

                        break;
                }
            });
        });


        // Restricts input for the given textbox to the given inputFilter.
        function setInputFilter(textbox, inputFilter, errMsg) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function(event) {
                textbox.addEventListener(event, function(e) {
                    if (inputFilter(this.value)) {
                        // Accepted value
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        // Rejected value - restore the previous one
                        this.reportValidity();
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                        // Rejected value - nothing to restore
                        this.value = "";
                    }
                });
            });
        }

        // Install input filters.
        setInputFilter(document.querySelector(".range-slider-fields__input"), function(value) {
            return /^-?\d*$/.test(value); });
    }
};

// Initialization catalog sidebar filter
application.prototype.initCatalogSidebarFilter = function () {
    if ($('[data-filter]').length && $('[data-filter-spoiler]').length) {
        const filter = $('[data-filter]');
        const filterSpoiler = $('[data-filter-spoiler]');
        const filterClose = $('[data-filter-close]');

        setResponsiveFilter();
        setCheckChangeFilter();
        $(window).on('resize', setResponsiveFilter, setCloseFilter, setCheckChangeFilter);

        filterClose.on('click', function () {
            setCloseFilter();
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setCloseFilter();
            }
        });

        function setResponsiveFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                setCloseFilter();
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filterSpoiler.on('click', function () {
                    $(this).addClass('active');
                    filter.addClass('active');
                });
            }
        }

        function setCloseFilter() {
            filter.removeClass('active');
            filterSpoiler.removeClass('active');
        }

        function setCheckChangeFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                filter.removeClass('has-filter');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filter.on('change', function () {
                    filter.addClass('has-filter');
                    filterSpoiler.addClass('has-filter');
                });
            }
        }
    }
};

// Initialization catalog sidebar apply filter
application.prototype.initCatalogSidebarApplyFilter = function () {
    let trigger = null;
    let coordsTrigger = null;
    let wTrigger = null;
    let hTrigger = null;
    let html = '<div class="catalog-sidebar-apply-filter">' +
        '           <div class="catalog-sidebar-apply-filter__title">Показать</div>' +
        '           <div class="catalog-sidebar-apply-filter__value">2 184 товара</div>' +
        '       </div>';

    $(document).on('click', '.catalog-sidebar-filter__item .custom-checkbox__input', '.catalog-sidebar-filter__item .custom-checkbox__label-for', function () {
        let scroll = $(window).scrollTop();
        trigger = $(this).closest('.custom-checkbox');
        coordsTrigger = trigger.offset();
        wTrigger = trigger.outerWidth();
        hTrigger = trigger.outerHeight();

        $('.catalog-sidebar-apply-filter').remove();
        $('body').append(html);
        $('.catalog-sidebar-apply-filter').css({
            'top': parseInt(coordsTrigger.top + (hTrigger * 0.5)) - scroll + 'px',
            'left': parseInt(coordsTrigger.left + (wTrigger - 2)) + 'px',
        });
        setTimeout(function () {
            $('.catalog-sidebar-apply-filter').remove();
        }, 5000);

    });

    $(window).on('scroll', function () {
        $('.catalog-sidebar-apply-filter').remove();
    });
};

// Initialization catalog content sort
application.prototype.initCatalogContentSort = function () {
    if ($('.catalog-content-settings__sort-options').length) {
        initCatalogContentSortSwitch();
        catalogSettingsSortSelect();
        $(window).on('resize', catalogSettingsSortSelect);

        $(document).on('click', function (e) {
            if (!$('.catalog-content-settings__sort-select').is(e.target) &&
                !$('.catalog-content-settings__sort-options').is(e.target) &&
                $('.catalog-content-settings__sort-options').has(e.target).length === 0)
            {
                closeCatalogContentSettingsSort();
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                closeCatalogContentSettingsSort();
            }
        });

        function initCatalogContentSortSwitch() {
            $('.catalog-content-settings__sort-options input[type="radio"]').on('click', function () {
                if (window.matchMedia('(max-width: 1199.98px)').matches) {
                    let selectPlaceholder = $(this).siblings('.tag').text();

                    $('.catalog-content-settings__sort').find('.catalog-content-settings__sort-select-text').text(selectPlaceholder);
                    closeCatalogContentSettingsSort();
                }
            });
        }

        function catalogSettingsSortSelect() {
            if (window.matchMedia('(min-width: 1200px)').matches) {
                closeCatalogContentSettingsSort();
            } else if (window.matchMedia('(max-width: 1199.98px)').matches) {
                $('.catalog-content-settings__sort-select').on('click', function () {
                    if (!$(this).hasClass('active')) {
                        $(this).addClass('active');
                        $(this).siblings('.catalog-content-settings__sort-options').addClass('active');
                    } else if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                        $(this).siblings('.catalog-content-settings__sort-options').removeClass('active');
                    }
                });
            }
        }

        function closeCatalogContentSettingsSort () {
            $('.catalog-content-settings__sort-select').removeClass('active');
            $('.catalog-content-settings__sort-options').removeClass('active');
        }
    }
};

// Initialization contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts__map').length) {
        ymaps.ready(init);

        let map,
            placemark,
            mapItem = $('.contacts__map-content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactsMap' + i);

                let coordX = $(this).data('x'),
                    coordY = $(this).data('y'),
                    hint = $(this).data('hint'),
                    zoomControl = new ymaps.control.ZoomControl({
                        options: {
                            size: 'large',
                            float: 'none',
                            position: {
                                top: 50,
                                right: 10,
                                left: 'auto',
                            },
                        }
                    });

                // Параметры карты можно задать в конструкторе.
                map = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactsMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [
                            coordX,
                            coordY
                        ],
                        // Масштаб.
                        zoom: 15,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );

                placemark = new ymaps.Placemark([coordX, coordY]);

                map.geoObjects.add(placemark);
                map.controls.add(zoomControl);
            });
        }
    }
};

// Initialization basic tabs
application.prototype.initBasicTabs = function () {
    if ($('.basic-tabs').length) {
        const tabsContainer = $('.basic-tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        $('.basic-tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".basic-tabs-container[data-tab='" + currentTabBlockId + "']").find('.basic-tabs-trigger').removeClass('active');
            $(this).find('.basic-tabs-trigger').removeClass('notice').addClass('active');

            currentSelected = $(this).find(".basic-tabs-trigger").data("target");
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.basic-tabs-content__panel').removeClass('active');
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".basic-tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });
    }
};

// Initialization accordion
application.prototype.initAccordion = function () {
    if ($(".accordion").length) {
        initAccordionResponsive();
        $(window).on("resize", initAccordionResponsive, reloadAccordionResponsive);

        function reloadAccordionResponsive() {
            setTimeout(function () {
                location.reload();
            }, 300);
        }
        function initAccordionResponsive() {
            $(".accordion__collapse").hide();

            $(".js-accordion-btn").on("click", function () {
                if (!$(this).hasClass("open")) {
                    $(this).addClass("open");
                    $(this).closest(".accordion__item").addClass("active");
                    $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed").slideDown(160);
                } else if ($(this).hasClass("open")) {
                    $(this).removeClass("open");
                    $(this).closest(".accordion__item").removeClass("active");
                    $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(160).addClass("collapsed");
                }
            });
        }
    }
};

// Initialization custom fancy behavior
application.prototype.initFancyBehavior = function () {
    const body = $('body');
    const fancybox = $('[data-fancybox]');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        menu.removeClass('active');
        burger.attr('aria-expanded', 'false');
        burger.attr('aria-label', 'Открыть меню');
        $('.overlay').remove();
        $('.overlay-transparent').remove();

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            body.removeClass('overflow-hidden');
            return application.prototype.enableScroll();
        }
    });
};

// Initialization password-switcher
application.prototype.initPasswordSwitcher = function () {
    if ($('input[type=password]').length) {
        $(document).on('click', 'input[data-password-switcher]', function(){
            if ($(this).is(':checked')) {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'text');
                $(this).closest('.form__input-btn').addClass('show');
            } else {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'password');
                $(this).closest('.form__input-btn').removeClass('show');
            }
        });
    }
};

// Initialization datepicker
application.prototype.initDatepicker = function () {
    if ($(".flatpickr").length) {
        const dateElem = $(".flatpickr");

        let newFlatpickr = flatpickr(dateElem, {
            dateFormat: "d.m.Y",
            disableMobile: "true",
            locale: "ru"
        });
    }
};