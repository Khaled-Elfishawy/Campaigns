<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
    <link rel="shortcut icon" href="#">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>كيف تحقق دخل إضافي باستثمار بسيط 500$</title>
    <link rel="stylesheet" href="{{url('template/6')}}/css/bootstrap.min.css">
    <style type="text/css">
      * {
        font-family: "DINNEXTLTARABIC-REGULAR" !important;
      }

      @font-face {
        font-family: "DINNEXTLTARABIC-REGULAR";
        src: url("{{url('template/6')}}/fonts/DINNextLTArabic-Regular.woff")
      }

      .flex-container {
        display: inline-flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-content: stretch;
        align-items: center;
      }

      .flex-item:nth-child(1) {
        order: 0;
        flex: 0 1 auto;
        align-self: auto;
      }

      .flex-item:nth-child(2) {
        order: 0;
        flex: 0 1 auto;
        align-self: auto;
      }

      .flex-item:nth-child(3) {
        order: 0;
        flex: 0 1 auto;
        align-self: auto;
      }

      .flex-item:nth-child(4) {
        order: 0;
        flex: 0 1 auto;
        align-self: auto;
      }

      .flex-item:nth-child(5) {
        order: 0;
        flex: 0 1 auto;
        align-self: auto;
      }

      .widdesk {
        width: 70%;
        margin: auto;
      }

      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td,
      th {
        border-bottom: 1px solid #dddddd;
      }

      .thrdBg {
        color: #564EA9;
        background-color: white;
        padding: 2em 1em;
      }

      .sech,
      .thrdh,
      .frsth1 {
        padding: 1em 0;
      }

      .hafwid {
        width: 30%;
        margin: 2em;
      }

      .row {
        flex-direction: row;
        justify-content: space-evenly;
        max-width: 100%;
      }

      .hafwid p {
        font-size: 0.9em;
      }

      .hafwid img {
        margin-bottom: 1em;
      }

      .thrdh {
        color: #212529;
        background: -webkit-linear-gradient(#b18e69, #bbb19c);
        padding: 0.8em 2em;
        margin: 1em auto;
        width: fit-content;
      }

      .ffth .ffthdic {
        width: 50%;
        margin: 2em auto;
      }

      .intl-tel-input .country-list .flag-box,
      .intl-tel-input .country-list .country-name {
        color: black;
      }

      .onlymob {
        display: none;
      }

      .secDiv p {
        font-size: 0.7em;
      }

      .thrdBg p {
        font-size: 1em;
        padding-top: 3em;
      }

      .secDiv .flex-item {
        width: 20%;
      }

      .ffth {
        background-image: url('{{url('template/6')}}/images/bg-02-1147.jpeg');
        background-size: 100% 100%;
        padding: 3em 0;
      }

      p {
        margin: 0;
      }

      .intl-tel-input {
        width: 100%;
      }

      form {
        width: 20em;
        margin: 3em auto;
        background-color: #000740;
        padding: 1em;
      }

      .frthDiv {
        max-width: 45%;
        padding: 3em;
        text-align: right;
      }

      .form-control {
        margin: 1em 0;
      }

      .secDiv .flex-item,
      .secDiv .flex-item img {
        margin: 2em 0;
      }

      .firstBg {
        background-image: url('{{url('template/6')}}/images/bg-01-1147.jpeg');
        background-size: 100% 100%;
      }

      .secBg,
      .frthBg {
        background-color: black;
        padding: 1em 0px;
      }

      @media (max-width: 991px) {
        .thrdBg {
          padding: 2em 0;
        }

        .widdesk {
          width: 100%;
        }

        .secDiv .flex-item {
          width: 30%;
          margin: 0;
        }

        .ffth .ffthdic,
        .thrdBg div {
          width: 90%;
        }

        .hafwid {
          width: 100%;
          margin: 2em auto;
          padding: 0 2em;
        }

        .reverseMob {
          flex-wrap: wrap-reverse;
          padding: 0 0.1em !important;
        }

        .mod {
          margin: auto;
        }

        .desktop {
          display: none;
        }

        .onlymob {
          display: initial;
        }

        .thrdBg .flex-item {
          width: 100% !important;
        }
      }
    </style>

  </head>
  <body>
    <div style="background-color: black;text-align: center;color: white;">
      <div class="flex-item firstBg">
        <h3 style="padding-top: 1em;">كيف تحقق دخل إضافي باستثمار بسيط 500$</h3>
        <h5>العملات الرقمية أحدثت تغيير جذري في طريقة الاستثمار بالأسواق المالية</h5>
        <h1 class="frsth1">مع الأصول الرقمية لا تحتاج إلى أسواق محلية أو استثمار مبالغ كبيرة</h1>
        @if (session('success'))
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <h2 class="elementor-heading-title elementor-size-default">{{ session('success') }}</h2>
                </div>
            </div>
        @endif         
        <div>
          <div id="apiErrorMsg"></div>
          <form style="max-width: 100% !important;" class="mod" method="POST" action="{{url('lead/create')}}">
            @csrf
            <input type="hidden" name="campaign" value="{{$campaign->id}}">
            <div>البدء سهل جدًا في سوق العملات الرقمية</div>
            <input class="form-control" name="FirstName" type="text" id="FirstName" placeholder="الاسم">
            <input class="form-control " name="Email" type="email" id="Email" placeholder="البريد الإلكتروني">
            <input class="form-control" name="PhoneNumber" id="PhoneNumber" type="tel" placeholder="الهاتف">
            <br>
            <input type="checkbox" checked="checked" name="vehicle1" value="Bike" style="color: white;width:1em; height: 1em;"> موافق <a data-toggle="modal" href="#termsNcond" style="display: inline;">الأحكام والشروط</a>
            <button id="submitBtn" type="submit" class="btn doSubmit" style="background:-webkit-linear-gradient(#b18e69, #e5d8bf);padding: 0.2em 2em;margin: 1em;">سجل الآن</button>
          </form>
        </div>
      </div>
      <div class="flex-item secBg" style="background-color: #4C44A9;">
        <h1>ابدأ الآن بمبلغ تجريبي 250$</h1>
      </div>
      <div class="flex-item thrdBg">
        <div class="widdesk" style="margin: auto;">
          <h3 style="padding: 1em 0;">معادلة بسيطة تشرح لك الفرق بين تداول العملات الرقمية وغيرها من الأصول المالية في الأسواق المحلية</h3>
          <h5>أصول السوق المحلي</h5>
          <table style="    width: 100%;margin-bottom: 2em;">
            <tr style="background-color: #564EA9;color: white;">
              <th>السهم</th>
              <th>رمز السهم</th>
              <th>الدولة</th>
              <th>العائد السنوي 2020-2021</th>
              <th>كم رأس مال تحتاج لتحصل على 2,000$ ربح شهري؟</th>
            </tr>
            <tr>
              <td>دار الأركان</td>
              <td>4300</td>
              <td>السعودية</td>
              <td>50%</td>
              <td>$48,000</td>
            </tr>
            <tr>
              <td>بنك دبي الإسلامي</td>
              <td>DISB</td>
              <td>الإمارات</td>
              <td>33%</td>
              <td>$72,000</td>
            </tr>
          </table>
          <h5>العملات الرقمية</h5>
          <table style="    width: 100%;margin-bottom: 2em;">
            <tr style="background-color: #564EA9;color: white;">
              <th>العملة</th>
              <th>رمز العملة</th>
              <th>الدولة</th>
              <th>العائد السنوي 2020-2021</th>
              <th>كم حقق استثمار 500$ شهريًا خلال عام؟</th>
            </tr>
            <tr>
              <td>دوجيكون</td>
              <td>DOGE/USD</td>
              <td>عالمية</td>
              <td>19000%</td>
              <td>من 5,000$ إلى 15,000$</td>
            </tr>
            <tr>
              <td>الربيل</td>
              <td>XRP/USD</td>
              <td>عالمية</td>
              <td>590%</td>
              <td>من 250$ إلى 2,500$</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="flex-item frthBg"></div>
      <div class="flex-item ffth">
        <h1 class="widdesk">عالم الاستثمار تغير مع وصول العملات الرقمية لذلك الآن هو الوقت مناسب لك حتى تبدأ</h1>
        <div>
          <div id="apiErrorMsg"></div>
          <form style="max-width: 100% !important;" id="reg_form1" class="mod" methodologyx="posting">
            <div>البداية دائمًا سهلة في استثمار العملات الرقمية</div>
            <input class="form-control" type="text" id="Fname1" placeholder="الاسم">
            <input class="form-control " type="email" id="Email1" placeholder="البريد الإلكتروني">
            <input class="form-control" type="number" pattern="[0-9]*" inputmode="numeric" id="age1" name="age" placeholder="العمر">
            <input class="form-control" id="Phone1" type="tel" placeholder="الهاتف">
            <br>
            <input type="checkbox" checked="checked" name="vehicle1" value="Bike" style="color: white;width:1em; height: 1em;"> موافق <a data-toggle="modal" href="#termsNcond" style="display: inline;">الأحكام والشروط</a>
            <button id="submitBtn" type="submit" class="btn doSubmit" style="background:-webkit-linear-gradient(#b18e69, #e5d8bf);padding: 0.2em 2em;margin: 1em;">سجل الآن</button>
          </form>
        </div>
      </div>
      <div class="flex-item" style="background-color: white;">
        <img width="843" style="max-width: 100%;" height="84" src="{{url('template/6')}}/images/logow.jpg" alt sizes="(max-width: 843px) 100vw, 843px">
      </div>
      <div class="flex-item">
        <p style="color: #303030;font-size: 0.7em;padding: 1em 0;">جميع الحقوق محفوظه</p>
      </div>
    </div>
    <div class="gifContainer" style=" position: fixed; z-index: 2; top: 0px; left: 0px; width: 100vw; height: 100vh; background: rgba(255, 255, 255, 0.68); display: none;    ">
      <div class="loader" style=" position: fixed; z-index: 999; height: 150px; width: 150px; overflow: show; margin: auto; top: 0; left: calc(100vw / 2 - 80px); bottom: 0;">
        <img src="{{url('template/6')}}/images/150x150.gif" width="150" height="150">
      </div>
    </div>
    <script src="{{url('template/6')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('template/6')}}/js/main.js"></script>
    <script src="{{url('template/6')}}/js/mobile-detect.min.js"></script>
    <script src="{{url('template/6')}}/js/libphonenumber.min.js" type="text/javascript"></script>
    <script src="{{url('template/6')}}/js/utils.min.js" type="text/javascript"></script>
    <script src="{{url('template/6')}}/js/intlTelInput.min.js"></script>
    <script>
      function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)", "i"),
          results = regex.exec(url);
        if (!results) return "";
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
      }
      var freegeoip = {
        "ip": "194.29.53.224",
        "type": "ipv4",
        "continent_code": "EU",
        "continent_name": "Europe",
        "country_code": "NL",
        "country_name": "Netherlands",
        "region_code": "NH",
        "region_name": "North Holland",
        "city": "Diemen",
        "zip": "1101",
        "latitude": 52.309051513671875,
        "longitude": 4.940189838409424,
        "location": {
          "geoname_id": 2756888,
          "capital": "Amsterdam",
          "languages": [{
            "code": "nl",
            "name": "Dutch",
            "native": "Nederlands"
          }],
          "country_flag": "https://assets.ipstack.com/flags/nl.svg",
          "country_flag_emoji": "\ud83c\uddf3\ud83c\uddf1",
          "country_flag_emoji_unicode": "U+1F1F3 U+1F1F1",
          "calling_code": "31",
          "is_eu": true
        },
        "time_zone": {
          "id": "Europe/Amsterdam",
          "current_time": "2022-11-30T01:06:43+01:00",
          "gmt_offset": 3600,
          "code": "CET",
          "is_daylight_saving": false
        },
        "currency": {
          "code": "EUR",
          "name": "Euro",
          "plural": "euros",
          "symbol": "\u20ac",
          "symbol_native": "\u20ac"
        },
        "connection": {
          "asn": 204601,
          "isp": "Zomro B.V."
        }
      };
      var quiz = [];
      var refered = 'norefer';
      var countrycodeX = "gb";
      $('form').submit(function(event) {
        event.preventDefault();
        var Fname = $.trim($('#Fname').val());
        var Phone = $.trim($('#Phone').val());
        var age = $.trim($('#age').val());
        var Email = $.trim($('#Email').val());
        var phoneCode = $('#Phone').intlTelInput("getSelectedCountryData").iso2;
        if (event.target.id === "reg_form1") {
          Fname = $.trim($('#Fname1').val());
          Phone = $.trim($('#Phone1').val());
          age = $.trim($('#age1').val());
          Email = $.trim($('#Email1').val());
          phoneCode = $('#Phone1').intlTelInput("getSelectedCountryData").iso2;
        }
        //$(".gifContainer").css("display", "block");
        ajaxCallerlp("page-1147a", freegeoip, Fname, Phone, phoneCode, age, Email, quiz, refered, successAjx, errorAjx, true, document.title, $('#Phone').intlTelInput("getSelectedCountryData").dialCode);
      });

      function errorAjx(jqXHR, exception) {
        $(".gifContainer").css("display", "none");
        if (jqXHR.status === 0) {
          $('#apiErrorMsg').html('Not connect. Verify Network.');
        } else if (jqXHR.status === 422) {
          $('form').hide();
          $("#apiErrorMsg").css("text-align", "center").html(" < h style = 'color:red;font-size:2em;font-weight:bold;display:inline-block;margin:0 auto;' > You are already registered < /h>");
        } else if (jqXHR.status == 404) {
          $('#apiErrorMsg').html('Requested page not found. [404]');
        } else if (exception === 'timeout') {
          $('#apiErrorMsg').html('Time out error.');
        } else {
          //$('#apiErrorMsg').html('Uncaught Error: ' + jqXHR.responseText);
        }
      }

      function successAjx(resp) {
        $(".gifContainer").css("display", "none");
        //var obj = $.parseJSON(resp);
        $('form').find("input[type=text], input[type=number]").val("");
        $('form').hide();
        window.location = "thank-youcapitala?name=" + Fname + "&Email=" + Email + "&age=" + age;
        // $("#apiErrorMsg").css("text-align", "center").html(
        //     "
        < h style = 'color:#32c7aa;font-size:2em;font-weight:bold;display:inline-block;margin:0 auto;' > شكرا لانضمامك سوف نقوم بالتواصل معك قريبا < /h>"
        // );
        //$('#apiErrorMsg').html(obj.message);
      }
      var counts = 0;
      $("#CTA").click(function() {
        if (counts == 3) {
          location.href = '#pop';
        } else {
          $('html, body').animate({
            scrollTop: $('#qss').offset().top - 369
          }, 'slow');
          $(this).hide();
          $('.qs-rap').show();
        }
      });
      $(".id_click_to_show_element").click(function() {
        //$('.msk, .surv-hd, .qs-rap, #CTA').hide();
        //$('#mod').show();
        $('html, body').animate({
          scrollTop: $('#apiErrorMsg').offset().top - 100
        }, 'slow');
        //$('#convfrom').val("QS");
      });
      // $(document).ready(function () {
      //     //$('#convfrom').val("QS");
      // });
      $(document).ready(function() {
        if (freegeoip != "none") countrycodeX = freegeoip.country_code;
        var nationality = getParameterByName('nationality');
        if (nationality.toString() == "ku") $('.nationality').html("كويتي");
        if (nationality.toString() == "em") $('.nationality').html("اماراتي");
        var phoneControl = $("#Phone");
        phoneControl.intlTelInput({
          initialCountry: countrycodeX,
          separateDialCode: true,
          utilsScript: "//d2crzsecd1k658.cloudfront.net/extensions/intl-tel-input-11.0.0/build/js/utils.min.js"
        });
        var phoneControl = $("#Phone1");
        phoneControl.intlTelInput({
          initialCountry: countrycodeX,
          separateDialCode: true,
          utilsScript: "//d2crzsecd1k658.cloudfront.net/extensions/intl-tel-input-11.0.0/build/js/utils.min.js"
        });
        $('.qs-rap .itm button').on('click', function(e) {
          e.preventDefault();
          quiz.push($(this).html());
          $('#question_holder').append()
          $(this).closest('.itm').removeClass('act').next('.itm').addClass('act');
          counts += 1;
          if (counts == 3) {
            $('.msk').fadeIn();
            $('.qs-rap').find('.act').removeClass('act');
            var c = 0;
            var setInt = setInterval(function() {
              $('.msk p').eq(c).removeClass('hide');
              if (c == 2) {
                clearInterval(setInt);
                $('.msk, .surv-hd, .qs-rap').fadeOut();
                $('#mod').show();
                $('#convfrom').val("QS");
              }
              c += 1;
            }, 1501);
          }
        });
      });

      function sticky_relocate_left() {
        var window_top = $(window).scrollTop();
        var div_top = $('#sticky-anchor').offset().top;
        if (window_top > div_top) {
          $('.lefts').addClass('mobile-stickys');
        } else {
          $('.lefts').removeClass('mobile-stickys');
        }
      }
      $(function() {
        // $(window).scroll(sticky_relocate_left);
        // sticky_relocate_left();
      });
      var warning = {
        init: function() {
          var counter = 9000;
          form = function(t) {
            var minutes = Math.floor(t / 600),
              seconds = Math.floor((t / 10) % 60);
            minutes = (minutes < 10) ? "0" + minutes.toString() : minutes.toString();
            seconds = (seconds < 10) ? "0" + seconds.toString() : seconds.toString();
            $('.av-warning-timer').text(minutes + ":" + seconds + "." + "0" + Math.floor(t % 10));
          };
          setInterval(function() {
            counter--;
            form(counter);
            if (counter == 0) counter = 9000;
          }, 100);
        }
      }
      warning.init();
      $("#KSA").click(function() {
        $("#citizen").val("SA");
      });
      $("#NOTKSA").click(function() {
        $("#citizen").val("Wafid");
      });
    </script>
    <script src="{{url('template/6')}}/js/mainlpsaah.js"></script>
  </body>
</html>