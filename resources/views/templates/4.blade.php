<!DOCTYPE html><html><head>
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>استثمر على أمازون  معنا</title>
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">
            <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <link rel="stylesheet" href="{{url('template/4')}}/css/swiper.min.css"><link rel="stylesheet" href="{{url('template/4')}}/css/bootstrap3.min.css"><link rel="stylesheet" href="{{url('template/4')}}/css/nouislider.css"><link rel="stylesheet" href="{{url('template/4')}}/css/animate.min.css">    <link rel="stylesheet" href="{{url('template/4')}}/css/components.css">
            <link rel="stylesheet" href="{{url('template/4')}}/css/components_rtl.css">
    <link rel="stylesheet" href="{{url('template/4')}}/css/general.css">
            <link rel="stylesheet" href="limitedtimeofer_com.html">
    <link rel="stylesheet" href="{{url('template/4')}}/css/footer2.css">
    <link rel="stylesheet" href="{{url('template/4')}}/css/index.css">    

</head>
<body class="rtl">
    <div class="loader loader_container">
    <img src="fonts/loader.svg">
</div><div class="main">

    <section class="top-section">
        <div class="container">
            <div class="top-text">
                <h1 class="top_title">المال لا ينمو على<br>                    الأشجار، بل ينمو مع</h1>
                <div class="top_logo">
                    <img src="{{url('template/4')}}/images/logo_ar.png" alt="logo">
                </div>
                <div class="btn-all btn-top top__scroll-btn js-calc-scroll">النمو المحتمل</div>
            </div>
        </div>
    </section>

    <section class="form form_sticky">
        <div class="form__top form_wrapper light_form">
            <div class="form-title"><h2 class="top_title">استثمر في أمازون</h2>

                @if (session('success'))
                    <h2 class="elementor-heading-title elementor-size-default">{{ session('success') }}</h2>
                @endif             
            </div>
            <form method="POST" action="{{url('lead/create')}}">
                @csrf
                <input type="hidden" name="campaign" value="{{$campaign->id}}">
                <p class="server_error_msg"></p>
				<!-- full name -->
				<div class="input-wrapper">
				    <div class="form-group">
				        <input class="input form-control fullName" type="text" name="FirstName" placeholder="الاسم الشخصي" title="الاسم الشخصي" maxlength="30" pattern="[^0-9!,#$%^&*()]{3,100}" required>
				        <label class="form-control-placeholder">الاسم الشخصي</label>
				        <p class="invalid_message"></p>
				    </div>
				</div>
				<!-- /full name -->

				<!-- email -->
				<div class="input-wrapper">
				    <div class="form-group">
				        <input class="input form-control email" type="email" name="Email" placeholder="البريد الالكتروني" title="البريد الالكتروني" maxlength="100" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
				        <label class="form-control-placeholder">البريد الالكتروني</label>
				        <span class="mail_spinner" style="display: none;"></span>        <p class="invalid_message"></p>
				    </div>
				</div>
				<!-- /email -->

				<!-- phone number -->
				<div class="input-wrapper">
				    <div class="input phone-container">
				        <div class="phone_number_container form-group">
				            <input class="form-control phoneNumber" name="PhoneNumber" type="tel" placeholder="الهاتف" maxlength="14" pattern="[0-9]{6,14}" required>
				            <label class="form-control-placeholder">الهاتف</label>
				        </div>
				    </div>
				    <p class="invalid_message"></p>
				</div>
				<!-- /phone number -->

				<!-- checkbox -->
				<div class="checkbox_wrapper">
				    <div class="checkbox">
				        <input type="checkbox" name="checkbox" value checked required>
				        <label></label>
				    </div>
				    <p class="checkbox_txt">نشرة اسبوعية وعروض خاصة وتحديثات مستمرة</p>
				    <div class="clear"></div>
				</div>
				<!-- /checkbox -->                
				<button type="submit" class="btn btn-light-brown">طلب معلومات</button>
                <p class="risk-2">
                    للاستثمار في أمازون، يجب ألا يقل عمرك عن 18 عامًا. الحد الأدنى لرأس المال المطلوب 250 دولار
                </p>
            </form>
            <div class="form-footer">
                <img src="{{url('template/4')}}/images/payment.png" alt>
            </div>
        </div>
    </section>

    <!-- section_rslider -->
    <section class="r-slider">
        <div class="container">
            <div class="r-slider__body">
                <h2>اكتشف أرباحك المحتملة على المدى القصير (في شهرين كحد أقص)</h2>
                <div class="range range__label">
                    <div class="range__inner">
                        <div class="range__item">
                            <span class="range__item-text range-text1"></span>
                            <p class="range__item-number range-initial-value"></p>
                        </div>
                        <div class="range__item">
                            <span class="range__item-text range-text2"></span>
                            <p class="range__item-number range-potential-profit"></p>
                        </div>
                    </div>
                    <div class="range-slider">
                        <div class="range-slider-wrapper">
                            <div id="counter-slider" class="no-ui-slider">
                                <div class="slider noUi-txt-dir-ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ebd section_rslider -->

    <!-- section_company -->
    <section class="company">
        <div class="container">
            <div class="company__two-columns wrap-flex">
                <div class="company__left">
                    <div class="company__info">
                        <h3 class="company__title">شركة التريليون دولار</h3>
                        <p>وصلت القيمة السوقية لشركة أمازون إلى تريليون دولار في عام 2018. ووفقاً لبلومبرج، يمكن أن تصل أمازون إلى إجمالي إيرادات سنوية تزيد عن تريليون دولار بحلول عام 2025.</p>
                        <p>  مع زيادة إيرادات السوق، أصبحت أمازون هي الشركة الرائدة بلا منازع. يمكن للمستثمرين والأشخاص الذين يشاركون في نموذج أمازون الاستمرار في الاستفادة من آفاق تطوير أمازون.</p>
                    </div>
                    <div class="btn-company-desktop btn-all company__btn js-scroll js-popup-form">طلب معلومات</div>
                </div>
                <div class="company__right">
                    <!--company img desktop -->
                    <div class="company__img company__img_desktop">
                        <img src="{{url('template/4')}}/images/phone-desktop.png" alt>
                    </div>
                    <!--company img mobile -->
                    <div class="company__img company__img_mobile">
                        <img src="{{url('template/4')}}/images/phone-mobile.png" alt>
                    </div>

                    <div class="btn-company-mobile btn-all company__btn js-scroll js-popup-form">طلب معلومات</div>

                </div>
            </div>
        </div>
    </section>
    <!-- end section_company -->

    <!-- section_access -->
    <section class="access">
        <div class="access__top">
            <div class="container">
                <h2 class="access__title">من السهل أن تبدأ. يمكنك الوصول الى:</h2>
                <div class="access__list wrap-flex">
                    <div class="access__list-item">
                        <div class="access__list-img">
                            <div class="access__list-img-box">
                                <img src="{{url('template/4')}}/images/list-item-1.png" alt>
                            </div>
                        </div>
                        <div class="access__list-text">
                            <p>منصة آمنة ومُرخصة</p>
                        </div>
                    </div>

                    <div class="access__list-item">
                        <div class="access__list-img">
                            <div class="access__list-img-box">
                                <img src="{{url('template/4')}}/images/list-item-2.png" alt>
                            </div>
                        </div>
                        <div class="access__list-text">
                            <p>أرباح في حسابك خلال
                                <br>  24 ساعة</p>
                        </div>
                    </div>

                    <div class="access__list-item">
                        <div class="access__list-img">
                            <div class="access__list-img-box">
                                <img src="{{url('template/4')}}/images/list-item-3.png" alt>
                            </div>
                        </div>
                        <div class="access__list-text">
                            <p>أدوات تدريب بسيطة</p>
                        </div>
                    </div>

                    <div class="access__list-item">
                        <div class="access__list-img">
                            <div class="access__list-img-box">
                                <img src="{{url('template/4')}}/images/list-item-4.png" alt>
                            </div>
                        </div>
                        <div class="access__list-text">
                            <p>دعم ومساعدة على
                                <br> مدار الساعة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="access__bottom">
            <div class="container">
                <div class="btn-all access__btn js-scroll js-popup-form">اكتشف كيفية الربح من استثمار أمازون</div>
                <div class="access__payment-methods">
                    <img src="{{url('template/4')}}/images/payment-methods.png" alt>
                </div>
            </div>
        </div>
    </section>
    <!--end  section_access  -->

    <!-- pop-up form start -->
    <div class="pop-up-form">
        <div class="pop-up-form-block">
            <div class="form_popup">
                <div class="form__top_popup"></div>
            </div>
        </div>
    </div>

</div>
<footer style="text-align: center">
                <div class="container" style="font-family: Droid Arabic Kufi, sans-serif;font-size: 15px;">
                    <p>
                    تداول الفوركس يشمل مخاطرة كبيرة، لهذا السبب فهو لا يناسب جميع المتداولين. عليك اخذ بالحسبان انه يمكن خسارة مبالغ كبيرة، 
                    لذلك عليك تقدير العواقب التي من المحتمل حدوثها. ننوه انه أيضا عليك تقدير ما هي الأرباح الممكنة مقابل المجازفة التي تتخذها، والتصرف بشكل يناسب الامر.
                        <br>
                        <a class="privacy" href="/files/pdf/limitedtimeofer/Privacy_Policy_ar.pdf" target="_blank" style="color: #8ABCFF">سياسة الخصوصية</a>
                    </p>
                </div>
                </footer>    <script src="{{url('template/4')}}/js/jquery.min.js"></script>
    <script src="{{url('template/4')}}/js/general.js"></script>
    <script src="{{url('template/4')}}/js/swiper.min.js"></script><script src="{{url('template/4')}}/js/bootstrap.min.js"></script><script src="{{url('template/4')}}/js/nouislider.js"></script><script src="{{url('template/4')}}/js/wow.min.js"></script><script src="{{url('template/4')}}/js/index.js"></script>
</body></html>