document.addEventListener("DOMContentLoaded", function (e) {

    rangeSliderInit();

    function rangeSliderInit() {
        const isDynamic = true;
        const showEachStepLabels = false;
        const minMaxRow = true;
        const cutZerosMobileTopPart = true;
        const cutZerosMobileMinMaxRow = false;
        const bottomBox = true;
        const hideMaxValue = true;
        const minValue = 250;
        const maxValue = 20000;
        const stepSize = 50;
        const currencyBeforeAmount = true;
        let arrayNumbers = [];
        let bottomText = '';

        bottomText = 'الربح المقدر'

        if (isDynamic) {
            arrayNumbers = generateDynamicArray(minValue, maxValue, stepSize);
        } else {
            arrayNumbers = [0,2000,5000,10000,20000];
        }

        const isCustomScrollEvent = '1';
        const currencySymbol = '$';
        const slider = document.querySelector('#counter-slider .slider');
        const windowWidth = document.documentElement.clientWidth;
        const isMobile = windowWidth <= 960;

        showEachStepLabels && generateSliderLabels(arrayNumbers);
        minMaxRow && generateMinMaxRow();
        bottomBox && generateBottomBox();

        noUiSlider.create(slider, {
            start: 0,
            step: 1,
            connect: 'lower',
            range: {
                'min': 0,
                'max': arrayNumbers.length - 1
            },
        });

        slider.noUiSlider.on('update', function (values) {
            const valuenow = parseInt(values[0]);
            showEachStepLabels && highlightLabel(valuenow);
            calculation(valuenow);
        });

        function calculation(valuenow) {

            const valueActiveItem = arrayNumbers[valuenow];

            let coefficient = 0;

            if (valueActiveItem === 250) {
                coefficient = 2;
            } else if (valueActiveItem > 250 && valueActiveItem < 500) {
                coefficient = 2.5;
            } else if (valueActiveItem >= 500 && valueActiveItem < 1000) {
                coefficient = 3.5;
            } else if (valueActiveItem >= 1000 && valueActiveItem < 5000) {
                coefficient = 5;
            } else if (valueActiveItem >= 5000) {
                coefficient = 5.5;
            }


            const initialValue = document.querySelector('.range-initial-value');
            initialValue.textContent = formatNumber(valueActiveItem, cutZerosMobileTopPart, currencySymbol);


            /*const result = potencialCalc(valueActiveItem, coefficient);*/
            const result = formulaCalc(valueActiveItem);
            const potentialProfit = document.querySelector('.range-potential-profit');
            const bottomProfitBox = document.querySelector('#bottom-profit');
            const profitValue = formatNumber(result, cutZerosMobileTopPart, currencySymbol);


            bottomProfitBox.textContent = profitValue;

            updateRangeLabel(+valueActiveItem, currencySymbol);

        }

        function potencialCalc(number, multiply) {
            return (number * multiply) % 1 === 0 ? number * multiply : (number * multiply).toFixed(2);
        }

        function formulaCalc(number){
            const result = 5.13 * number + 24;
            return result % 1 === 0 ? result : result.toFixed(2);
        }

        function generateBottomBox(){
            const bottomBox = `
                    <div class="r-slider__bottom js-popup-form">
                        <span class="r-slider__title">${bottomText}</span>
                        <span id="bottom-profit" class="r-slider__subtitle"></span>
                    </div>
                `
            const wrapper = document.querySelector(".range");
            wrapper.insertAdjacentHTML('afterEnd', bottomBox);
        }

        function generateSliderLabels(arrayNumbers) {

            const listWrapper = document.querySelector('.slider-labels');
            let numbers = '';

            arrayNumbers.forEach(item => {
                numbers += `<li data-number="${item}">${formatNumber(item, cutZerosMobileTopPart, currencySymbol)}</li>`;
            });

            listWrapper.insertAdjacentHTML('beforeend',numbers);
        }

        function updateRangeLabel(value){
            const rangeLabel = document.querySelector('.noUi-handle');
            rangeLabel.innerHTML = formatNumber(value, cutZerosMobileTopPart, currencySymbol);
        }

        function formatNumber(number, cutZeros, currencySymbol) {

            let targetNumber = number;

            if (isMobile && cutZeros && targetNumber >= 1000) {
                targetNumber = Math.round(targetNumber / 100) / 10 + 'k';
            } else if (!isMobile) {
                const isItLang = ('ar' === 'it');
                if (targetNumber >= 10000) {
                    const locale = isItLang ? 'it-IT' : 'en-US';
                    if (targetNumber % 1 === 0) {
                        targetNumber = Intl.NumberFormat(locale).format(targetNumber);
                    } else {
                        targetNumber = Intl.NumberFormat(locale, {minimumFractionDigits: 2, maximumFractionDigits: 2}).format(targetNumber);
                    }
                } else {
                    if (isItLang) {
                        targetNumber = String(targetNumber).replace(/[.]/g, ',')
                    }
                }
            }

            return currencyBeforeAmount ? currencySymbol + targetNumber : targetNumber + currencySymbol
        }

        function generateDynamicArray(min, max, stepSize){
            const arrayLength = (max - min) / stepSize;
            return [...Array(arrayLength + 1)]
                .map((x, y) => min + stepSize * y);
        }

        function highlightLabel(currentIndex) {
            const textCurrency = document.querySelectorAll('#counter-slider .slider-labels li');

            textCurrency.forEach(item => {
                item.classList.remove('active');
            });

            const index = currentIndex + 1;
            const selector = '#counter-slider .slider-labels li:nth-child(' + index + ')';
            document.querySelector(selector).classList.add('active');
        }

        function generateMinMaxRow() {
            const minMaxRow = `
                <div class="range_min-max">
                  <div class="range_min-max__item range_min-max__item_min">
                      ${formatNumber(arrayNumbers[0], cutZerosMobileMinMaxRow, currencySymbol)}
                  </div>
                  <div class="range_min-max__item range_min-max__item_max">
                      ${formatNumber(arrayNumbers[arrayNumbers.length -1 ], cutZerosMobileMinMaxRow, currencySymbol)}
                  </div>
                </div>
              `;
            document.querySelector('.range-slider').insertAdjacentHTML('beforeend', minMaxRow);
        }
    }

    //Set current media type
    const setMediaType = function () {
        const mediaType = window.matchMedia("(max-width: 767px)").matches ? "mobile" :
            window.matchMedia("(min-width: 1200px)").matches ? "desktop" : "tablet";
        const prevType = window.mediaType;

        window.mediaType = mediaType;
        if (prevType && prevType !== mediaType) {
            $(document).trigger("mediaTypeChanged");
        }
    };
    setMediaType();
    $(window).resize(setMediaType);


     $(document).on("showNoRedirectPopup", function (event) {
         $('.nrp').show();
     });

     $(document).on('click', '.nrp__close, .nrp__btn, .nrp__overlay', function (event) {
         $('.nrp').hide();
     });

    // Scroll to calculator
    $('.js-calc-scroll').click(function(e){
        e.preventDefault();
        setTimeout(function(){
            $("html, body").animate({scrollTop: $(".r-slider__body").offset().top - 100}, 800)
        },200);
    });


    // Popup form
    var $popUpForm = $('.pop-up-form');
    var $popUpFormBlock = $('.pop-up-form-block');
    var $body = $('body');
    var $stickyForm = $('.form_sticky');
    var $sliderBottomBtn = $('.r-slider__bottom');
    var $formTop = $('.form__top');
    var width = window.innerWidth;
    var isInIframe = inIframe();

    // Check if in iframe tag
    if (isInIframe) {
        var btn = document.createElement('button');
        btn.innerText = 'Open pop-up form';
        btn.classList.add('iframe-popup-btn');
        $body.appendChild(btn);
        $(btn).click(showPopUpForm);
    } else {
        $('.js-popup-form').click(showPopUpForm);
    }

    // inIframe helper
    function inIframe() {
        try {
            return window.self !== window.top;
        } catch (e) {
            return true;
        }
    }

    function showPopUpForm(e) {
        if (width > 1200) {
            // Hide sticky form
            $stickyForm.addClass('hide-form');
            $popUpForm.addClass('show-popup');
            setTimeout(function () {
                $popUpFormBlock.addClass('animate-form');
            }, 200);
        }
    }

    $popUpForm.click(function (e) {
        if ($(e.target).hasClass('show-popup') || $(e.target).hasClass('pop-up-form__close-btn')) {
            $popUpFormBlock.removeClass('animate-form');

            setTimeout(function () {
                $popUpForm.removeClass('show-popup');
                // Show sticky form
                $stickyForm.removeClass('hide-form');
                $(".form_wrapper").appendTo(".form_sticky");

            }, 200);

        }
    });

    $(document).on('showNoRedirectPopup', function () {
        $popUpFormBlock.removeClass('animate-form');
        setTimeout(function () {
            $popUpForm.removeClass('show-popup');
            // Show sticky form
            $stickyForm.removeClass('hide-form');
        }, 100);
    });


    // Scrolling when clicking on the slider btn
    $sliderBottomBtn.click(function (e) {
        e.preventDefault();

        // Prevent slider btn scroll on desktop
        if (width > 1200) {
            showPopUpForm();
        } else {
            $('html, body').animate({
                scrollTop: $formTop.offset().top - 20
            }, 1000);
        }
    });

    function append_form() {
        if (width > 1200) {
            $(".js-popup-form").on("click", function () {
                $(".form_wrapper").appendTo(".form__top_popup");
            })
        } else {
          return
        }
    }
    append_form();

    // Scrolling when clicking on the CTA btn
    $('.js-scroll').click(function (e) {
        e.preventDefault();
        const $this = $(this);
        // Prevent scrolling on desktop
        if ($this.hasClass('js-popup-form') && (width > 1200)) {
            return
        }

        $('html, body').animate({
            scrollTop: $formTop.offset().top - 20
        }, 1000);
    });



});


