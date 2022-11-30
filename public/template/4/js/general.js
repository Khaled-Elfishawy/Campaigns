var tld = 'com';

var urlObject = location.search;
var url_params = location.search.indexOf('?') > -1 ? location.search : '';
if (url_params !== '') {
    try {
        localStorage.setItem('marketing', JSON.stringify(location.search));
    } catch (e) { }
} else {
    try {
        var obj = JSON.parse(localStorage.getItem('marketing'));
        urlObject = obj !== null ? obj : location.search;
    } catch (e) { }
}


// var script = document.createElement('script');
// // script.src = 'https://www.' + domain_name + '.' + tld + '/setCookies.php' + urlObject;
// script.src = 'https://www.' + (location.host||location.hostname) + '/setCookies.php' + urlObject;
// document.body.appendChild(script);

var UrlParams = (function () {
    var params = {};
    if (location.search.indexOf('?') > -1) {
        location.search.substr(1).split('&').map(function (item) {
            var p = item.split('=');
            if (p.length == 2) params[p[0]] = p[1];
            else if (p.length == 1) params[p[0]] = '';
        });
    }
    return {
        getParams: function () { return params; },
        isExists: function (n) { return typeof (params[n]) != 'undefined' && params[n] !== null; },
        getParam: function (n) { return this.isExists(n) ? params[n] : null; },
        equalToStr: function (n, s) { return (this.isExists(n) && params[n] == s); }
    }
})();

(function (window) {
    // Polyfill - assign
    "function" != typeof Object.assign && Object.defineProperty(Object, "assign", { value: function (e, t) { "use strict"; if (null == e) throw new TypeError("Cannot convert undefined or null to object"); for (var n = Object(e), r = 1; r < arguments.length; r++) { var o = arguments[r]; if (null != o) for (var c in o) Object.prototype.hasOwnProperty.call(o, c) && (n[c] = o[c]) } return n }, writable: !0, configurable: !0 });

    window.LP = { countries: {} };
    var GeneralData = (function () {
        var prefix_domain = (window.matchMedia("(max-width: 768px)").matches) ? 'm-' : '';
        var url_params = urlObject;
        var params = {
            url: {
                // base: 'https://' + prefix_domain + api_url + '/',
                base: location.protocol+'//' + (location.host||location.hostname) + '/',
                lead: 'lead/lead',
                register: 'lead/register',
            },
            platform: {
                base: location.protocol+'//' + (location.host||location.hostname) + '/',
                platform: platform,
                real: 'login-area/real-account',
                demo: 'login-area/demo-account',
                continue_demo: 'login-area/continue-demo-account',
                continue_real: 'login-area/continue-real-account',
                self: '#/thank-you'
            }
        };

        params.url.api = params.url.base + 'webapi/v3/';
        params.url.platform = params.url.base + platform;

        return {
            getIsMobile: function () {
                return (window.matchMedia("(max-width: 768px)").matches) ? true : false;
            },
            getApiData: function (group, param) {
                return (params[group] && params[group][param]) ? params[group][param] : '';
            },
            getTask: function (task_name) {
                return this.getApiData('url', 'api') + this.getApiData('url', task_name);
            },
            platformPage: function (page_name) {
                var url = this.getApiData('platform', 'base') + this.getApiData('platform', page_name);
                if (url.indexOf('trading-platform') > -1) url = url.replace('/ar', '');
                return url;
            },
            refineUrl: function () {
                //get full url
                var url = window.location.href;
                //get url after/
                //var value = url.substring(url.lastIndexOf('/') + 1);
                var value = url.substring(url.lastIndexOf(location.pathname) + 1);
                //get the part after before ?
                //value = value.split("?")[0];
                value = value.split("#")[0];
                return value;
            },
            getFormsParams: function () {
                var inputsSelector_options = ['input-wrapper', 'input-container', 'form-group', 'input-group'];
                var _inputsSelector = 'input-group';
                for (var i in inputsSelector_options) {
                    if (document.querySelectorAll('.' + inputsSelector_options[i]).length > 0) {
                        _inputsSelector = inputsSelector_options[i];
                        break;
                    }
                }

                return {
                    inputsSelector: _inputsSelector
                };
            },
            getUrlParams: function () { return url_params; },
            getPrefixDomain: function () { return prefix_domain; },
            getDomain: function () { return domain; },
            getLang: function () { return lp_language; },
            getEnvironmentInfo: function () {
                var browserOS = (navigator.oscpu != null) ? navigator.oscpu : '';
                var OS = '';
                var nAgt = navigator.userAgent;
                var browserName = navigator.appName;
                var nameOffset, verOffset;

                // In Opera 15+, the true version is after "OPR/"
                if ((verOffset = nAgt.indexOf("OPR/")) != -1) browserName = "Opera";
                // In older Opera, the true version is after "Opera" or after "Version"
                else if ((verOffset = nAgt.indexOf("Opera")) != -1) browserName = "Opera";
                // In MSIE, the true version is after "MSIE" in userAgent
                else if ((verOffset = nAgt.indexOf("MSIE")) != -1) browserName = "Internet Explorer";
                // In Chrome, the true version is after "Chrome"
                else if ((verOffset = nAgt.indexOf("Chrome")) != -1) browserName = "Chrome";
                // In Safari, the true version is after "Safari" or after "Version"
                else if ((verOffset = nAgt.indexOf("Safari")) != -1) browserName = "Safari";
                // In Firefox, the true version is after "Firefox"
                else if ((verOffset = nAgt.indexOf("Firefox")) != -1) browserName = "Firefox";
                // In most other browsers, "name/version" is at the end of userAgent
                else if ((nameOffset = nAgt.lastIndexOf(' ') + 1) < (verOffset = nAgt.lastIndexOf('/'))) {
                    browserName = nAgt.substring(nameOffset, verOffset);
                    if (browserName.toLowerCase() == browserName.toUpperCase()) browserName = navigator.appName;
                }

                if (browserOS.indexOf('NT 6.1') > -1) OS = 'Windows 7';
                else if (browserOS.indexOf('95') > -1) OS = 'Windows 95';
                else if (browserOS.indexOf('98') > -1) OS = 'Windows 98';
                else if ((browserOS.indexOf('2000') > -1) || (browserOS.indexOf('NT 5.0') > -1)) OS = 'Windows 2000';
                else if ((browserOS.indexOf('XP') > -1) || (browserOS.indexOf('NT 5.1') > -1)) OS = 'Windows XP';
                else if (browserOS.indexOf('NT 5.2') > -1) OS = 'Windows Server 2003';
                else if (browserOS.indexOf('NT 6.0') > -1) OS = 'Windows Vista';
                else if ((browserOS.indexOf('4.0') > -1) || (browserOS.indexOf('WinNT') > -1) || browserOS == 'Windows NT') OS = 'Windows NT 4.0';
                else if (browserOS.indexOf('X11') > -1 || navigator.appVersion.indexOf("Linux") != -1) OS = 'Linux';
                else if (browserOS.indexOf('Mac') > -1) OS = 'Mac OS';
                else if (browserOS.indexOf('Win16') > -1) OS = 'Windows 3.11';
                else if (typeof (navigator.appVersion) == 'string' && navigator.appVersion.indexOf("Win") != -1) OS = "Windows";
                else if (typeof (navigator.appVersion) == 'string' && navigator.appVersion.indexOf("Mac") != -1) OS = "MacOS";
                else if (typeof (navigator.appVersion) == 'string' && navigator.appVersion.indexOf("X11") != -1) OS = "UNIX";
                else OS = browserOS;

                return {
                    nt_Browser: browserName,
                    nt_Language: navigator.language,
                    nt_OperationSystem: OS,
                    nt_ScreenResolution: ((screen.width != null && screen.height != null) ? screen.width + "X" + screen.height : '')
                }
            }
        }
    })();
    function serializeObject(form) { var o = {}; var a = form.serializeArray(); $.each(a, function () { if (o[this.name] !== undefined) { if (!o[this.name].push) o[this.name] = [o[this.name]]; else o[this.name].push(this.value || ''); } else { o[this.name] = this.value || ''; } }); return o; }
    function isObject(param) { return (typeof (param) === 'object' && param != null && Object.keys(param).length > 0) }
    function getCountryData(search_for, phone_country_id) {
        var countries = Forms.getCountries();

        if (search_for == 'dial_code' && isObject(countries[phone_country_id])) {
            return countries[phone_country_id].dial_code;
        }

        for (var ab in countries) {
            if (phone_country_id == countries[ab].dial_code) {
                if (search_for == 'ab') return ab;
                else if (search_for == 'country_id') return countries[ab].country_id;
                break;
            } else if (search_for == 'dial_code' && countries[ab].country_id == phone_country_id) {
                return countries[ab].dial_code;
                break;
            }
        }
        return null;
    }
    function MyAPI(form) {
        if (typeof (form) != 'undefined') {
            this.form = form;
            this.params = serializeObject(form);
        }
        this.task_name = 'lead';
        this.is_demo = false;
        this.next_page = '';

        this.setTaskName = function () {
            for (var field_name in this.params) {
                if (field_name.toLowerCase() == 'password') {
                    this.task_name = 'register';
                    break;
                }
            }
        };

        this.prepareBeforeSubmit = function () {
            this.setTaskName();
            this.prepareParams();
        };

        this.prepareParams = function () {
            var params = this.params;

            this.is_demo = (this.form[0].hasAttribute('data-form-type') && this.form[0].getAttribute('data-form-type').toLowerCase() == 'demo') || location.href.indexOf('demo') > -1;

            try {
                if (this.task_name == 'register') {
                    params = {
                        email: typeof (this.params.Email) === 'string' ? this.params.Email : this.params.email,
                        fullName: typeof (this.params.fullName) === 'string' ? this.params.fullName : this.params.FullName,
                        telephone: this.params.PhoneCountryCode + '-' + this.params.PhoneNumber,
                        password: typeof (this.params.password) === 'string' ? this.params.password : '',
                        demolive: this.is_demo ? 1 : 2,
                        countryID: getCountryData('ab', this.params.PhoneCountryCode),
                    };

                    if (typeof (params.fullName) == 'undefined') {
                        params.fullName = typeof (this.params.firstName) === 'string' ? this.params.firstName : this.params.FirstName;
                    }
                } else if (this.task_name == 'lead') {

                    params = {
                        Email: typeof (this.params.Email) === 'string' ? this.params.Email : this.params.email,
                        FirstName: typeof (this.params.firstName) === 'string' ? this.params.firstName : this.params.FirstName,
                        LastName: typeof (this.params.lastName) === 'string' ? this.params.lastName : this.params.LastName,
                        CountryId: getCountryData('country_id', this.params.PhoneCountryCode),
                        PhoneNumber: this.params.PhoneNumber,
                        PhoneCountryCode: this.params.PhoneCountryCode
                    };

                    if (typeof (params.FirstName) !== 'string') {
                        params.FirstName = typeof (this.params.FullName) === 'string' ? this.params.FullName : this.params.fullname;
                    }

                    if (typeof (params.LastName) !== 'string') {
                        var parts = params.FirstName.split(' ');
                        if (parts.length > 1) {
                            var cut_at = Math.floor(parts.length / 2);
                            params.FirstName = parts.splice(0, cut_at).join(' ');
                            params.LastName = parts.splice(0, parts.length).join(' ')
                        }

                        if (typeof (params.LastName) !== 'string') params.LastName = 'NA';
                    }
                }
                params.EnvironmentInfo = GeneralData.getEnvironmentInfo();
                params.lv_lp_url = location.href;
            } catch (e) { }

            // Send language
            params.language = lp_language;

            //
            try {
                for (var i in params) {
                    if (typeof (params[i]) != 'undefined' && params[i] !== false) params[i] = params[i].trim();
                }
            } catch (e) { }

            this.params = params;
        };

        this.getNextPage = function () {
            this.next_page = next_page;
            return (GeneralData.getApiData('platform', next_page) === '') ? next_page : GeneralData.platformPage(next_page);
        };
        this.task = function (callbacks) {
            this.prepareBeforeSubmit();
            var _this = this;
            setTimeout(function () {
                $.ajax({
                    type: 'POST',
                    url: GeneralData.getTask(_this.task_name) + GeneralData.getUrlParams(),
                    xhrFields: { withCredentials: true },
                    data: { inputs: _this.params },
                    dataType: 'json',
                    success: function (data) {
                        if (data.hasOwnProperty('succeeded') && data.succeeded) {
                            data.ext = '';
                            if (data.ut !== undefined && data.ut !== null) {
                                data.ext = '?ut=' + data.ut + '&lang=' + lp_language + '&p_type=' + GeneralData.getIsMobile();
                            }
                            data.deeplink = '';
                            if(deeplink!==null){
                                var tmp = '?';
                                if(data.ext!=='')
                                    tmp = '&';
                                data.deeplink = tmp+'deeplink='+deeplink.name+'&products='+deeplink.products
                            }
                            data.next_page = _this.getNextPage() + data.ext + data.deeplink;
                            if (data.hasOwnProperty('pixel') && data.pixel != '') {
                                $('body').append(data.pixel);
                                setTimeout(function () {
                                    callbacks.success.call(callbacks, data);
                                }, 500);
                            } else {
                                callbacks.success.call(callbacks, data);
                            }
                        }
                    },
                    error: callbacks.error
                });
            }, 300);
        };
    }
    var Forms = (function () {
        var countries = {};
        var dictionary = {};
        var MyCountry = {};
        var loader_container = document.querySelector('.loader_container');
        var event_name = '';
        var formGlobalParams = { inputsSelector: 'input-wrapper' };

        function getResource(url, callbacks) {
            $.ajax({
                type: 'GET',
                url: '/resources.php?res=' + url + '&lang=' + lp_language,
                xhrFields: { withCredentials: true },
                dataType: 'json',
                success: callbacks.success,
                error: callbacks.error
            });
        }

        function showLoader(bool) {
            if (bool) loader_container.classList.add('active');
            else loader_container.classList.remove('active');
        }

        var Validation = (function () {

            var params = {};
            var js_form;
            var current_field;
            var current_field_parent;
            var Patterns = {
                FULL_NAME: '^[^0-9!,#$%^&*()]{3,100}$',
                FIRST_NAME: '^[^0-9!,#$%^&*()]{3,100}$',
                PHONE_COUNTRY_CODE: '^[0-9]{1,3}$',
                PHONE_NUMBER: '^[0-9]{6,14}$',
                EMAIL: '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$',
                PASSWORD: '^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d).{6,15}$',
            };

            var CheckFields = {
                checkbox: (function () {
                    return {
                        stopCallerFunction: function () {
                            js_form.checkbox.parentElement.classList.remove('unchecked');
                            if (!params.checkbox) js_form.checkbox.parentElement.classList.add('unchecked');
                            return params.checkbox;
                        }
                    }
                })(),
                phone_country_code: (function () {
                    return {
                        stopCallerFunction: function () {
                            if (typeof (js_form.CountryId) == 'undefined') return true;
                            js_form.CountryId.value = getCountryData('country_id', current_field.value);
                            return true;
                        }
                    }
                })(),
                password: (function () {
                    return {
                        stopCallerFunction: function () {
                            var password_invalid_message = js_form.querySelector('.password_invalid_message');
                            password_invalid_message.style.display = isFieldFocused() ? 'block' : 'none';

                            var checks = {
                                hasMinLength: (params.password.length > 5),
                                hasLowercase: isObject(params.password.match(/[a-z]/)),
                                hasUppercase: isObject(params.password.match(/[A-Z]/)),
                                hasNumbers: isObject(params.password.match(/[0-9]/)),
                                hasNoSpecialCharacters: !isObject(params.password.match(/[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/)),     //  special characters and spaces
                                hasOnlyEnglishCharacters: !isObject(params.password.match(/[^A-Za-z0-9]+/))                              //  Use only english characters
                            };
                            var is_valid = true;
                            for (var i in checks) {
                                if (!checks[i]) {
                                    is_valid = false;
                                    break;
                                }
                            }

                            if (!isFieldFocused()) {
                                toggleCases(current_field, !is_valid, dictionary.Please_insert_valid_password);
                                return is_valid;
                            }

                            if (is_valid) {
                                password_invalid_message.style.display = 'none';
                            } else {
                                password_invalid_message.querySelector('.validate_min_length').classList.remove('valid');
                                password_invalid_message.querySelector('.validate_lowercase_letter').classList.remove('valid');
                                password_invalid_message.querySelector('.validate_uppercase_letter').classList.remove('valid');
                                password_invalid_message.querySelector('.validate_number').classList.remove('valid');
                                password_invalid_message.querySelector('.validate_special_characters').classList.remove('valid');
                                password_invalid_message.querySelector('.onlyEnglishCharacters').classList.remove('valid');

                                if (checks.hasMinLength) password_invalid_message.querySelector('.validate_min_length').classList.add('valid');
                                if (checks.hasLowercase) password_invalid_message.querySelector('.validate_lowercase_letter').classList.add('valid');
                                if (checks.hasUppercase) password_invalid_message.querySelector('.validate_uppercase_letter').classList.add('valid');
                                if (checks.hasNumbers) password_invalid_message.querySelector('.validate_number').classList.add('valid');
                                if (checks.hasNoSpecialCharacters) password_invalid_message.querySelector('.validate_special_characters').classList.add('valid');
                                if (checks.hasOnlyEnglishCharacters) password_invalid_message.querySelector('.onlyEnglishCharacters').classList.add('valid');
                            }
                            return is_valid;
                        }
                    }
                })(),
            };

            function isFieldFocused() {
                return event_name != '' && event_name != 'blur';
            }

            function toggleCases(field, is_error, tranlsate, uniqe_class_name) {
                var parent = null;
                if (field.parentElement.classList.contains(formGlobalParams.inputsSelector)) parent = field.parentElement;
                else if (field.parentElement.parentElement.classList.contains(formGlobalParams.inputsSelector)) parent = field.parentElement.parentElement;
                else if (field.parentElement.parentElement.parentElement.classList.contains(formGlobalParams.inputsSelector)) parent = field.parentElement.parentElement.parentElement;

                current_field_parent = parent;

                if (parent) {
                    var class_name = 'invalid_message' + (uniqe_class_name ? ' ' + uniqe_class_name : '')
                    if (parent.querySelector('.invalid_message') == null) {
                        var elem = document.createElement('span');
                        elem.className = class_name;
                        parent.appendChild(elem);
                    }

                    //
                    parent.querySelector('.invalid_message').className = class_name;
                    parent.querySelector('.invalid_message').style.display = is_error ? 'block' : 'none';
                    parent.querySelector('.invalid_message').innerHTML = is_error && typeof (tranlsate) != 'undefined' ? tranlsate : '';

                    parent.classList.remove(is_error ? 'valid' : 'invalid');
                    parent.classList.add(is_error ? 'invalid' : 'valid');

                    try {
                        parent.querySelector('.input').classList.remove(is_error ? 'valid' : 'invalid');
                        parent.querySelector('.input').classList.add(is_error ? 'invalid' : 'valid');
                    } catch (e) { }
                }
            }

            function checkField(name) {
                current_field = js_form.querySelector('[name="' + name + '"]');
                var valid = true;
                var tmp_name = name.split(/(?=[A-Z])/).join('_').toUpperCase();
                var tmp_name_lowercase = tmp_name.toLowerCase();

                var actions = CheckFields.hasOwnProperty(tmp_name_lowercase) ? CheckFields[tmp_name_lowercase] : null;

                //
                if (actions && actions.hasOwnProperty('stopCallerFunction')) return actions.stopCallerFunction();

                //
                if (new RegExp(Patterns[tmp_name]).test(params[name])) {
                    toggleCases(js_form.querySelector('[name="' + name + '"]'), false);
                    if (actions && actions.hasOwnProperty('valid')) actions.valid();
                } else {
                    valid = false;
                    tmp_name_lowercase = tmp_name_lowercase.replace('first_name', 'full_name');
                    var tranlsate = dictionary['Please_insert_valid_' + tmp_name_lowercase];

                    if (typeof (tranlsate) == 'undefined') tranlsate = dictionary['Please_insert_' + tmp_name_lowercase];
                    toggleCases(js_form.querySelector('[name="' + name + '"]'), true, tranlsate);
                    if (actions && actions.hasOwnProperty('invalid')) actions.invalid();
                }

                if (actions && actions.hasOwnProperty('allCases')) actions.allCases();
                return valid;
            }

            function getSerializeObject(form) {
                var form_params = {};
                for (var i = 0; i < form.elements.length; i++) {
                    var field = form.elements[i];
                    var value = field.value;
                    if (field.type == 'checkbox') value = field.checked;
                    else if (field.tagName.toLowerCase() == 'button' || field.tagName.toLowerCase() == 'fieldset') continue;
                    form_params[field.name] = value;
                }
                return form_params;
            }


            return {
                checkAll: function (form) {
                    var status = true;
                    params = getSerializeObject(form[0]);
                    js_form = form[0];
                    for (var name in params) {
                        if (!checkField(name)) status = false;
                    }
                    event_name = '';
                    return status;
                },
                checkField: function (field, form) {
                    params = getSerializeObject(form);
                    js_form = form;
                    checkField(field.name);
                    event_name = '';
                    return false;
                }
            }
        })();

        return {
            Fields: (function () {
                var form = false;
                var field = false;

                function setField(e) {
                    if (e.target.name == null) return false;
                    form = e.target.form;
                    field = {
                        name: e.target.name.toLowerCase(),
                        value: e.target.value.trim()
                    };
                }

                return {
                    keydown: function (e) {
                        event_name = 'keydown';
                        setField(e);
                        if (field == false) return true;
                        Validation.checkField(e.target, form);
                    },
                    blur: function (e) {
                        event_name = 'blur';
                        setField(e);
                        if (field == false) return true;
                        Validation.checkField(e.target, form);
                    },
                    change: function (e) {
                        event_name = 'change';
                        setField(e);
                        if (field == false) return true;
                        if (field.name == 'countryid') {
                            if (typeof (form.PhoneCountryCode) == 'undefined') return true;
                            form.PhoneCountryCode.value = getCountryData('dial_code', field.value);
                        }
                        else if (field.name == 'checkbox') Validation.checkField(e.target, form);
                    },
                    focus: function (e) {
                        event_name = 'focus';
                        setField(e);
                        if (field == false) return true;
                        if (field.name == 'password') Validation.checkField(e.target, form);
                    }
                }
            })(),
            getCountries: function () {
                return countries;
            },
            fetchData: function () {

                getResource('user_country', {
                    success: function (data) {
                        MyCountry = data;
                    },
                    error: function (jqXHR, textStatus, errorThrown) { }
                });

                // Dictionary
                $.get(location.protocol+'//' + api_url + '/resources/login_area/dictionary_' + lp_language + '.json?ver=0.' + (new Date()).getTime(), function (data) {
                    dictionary = data;
                });

                // getResource('dictionary', {
                //     success: function (data) { dictionary = data; },
                //     error: function (jqXHR, textStatus, errorThrown) { }
                // });

                // Countries
                getResource('countries', {
                    success: function (data) {
                        window.LP.countries = countries = data;
                        countries = data;

                        function func() {
                            var fields = $('[name=CountryId]');
                            if (fields.length == 0) {
                                fields = $('[name=PhoneCountryCode]');
                            }
                            else {
                                var options = '';
                                for (var country_ab in countries) {
                                    var selected = MyCountry.CountryAB == country_ab ? ' selected' : '';
                                    options += '<option value="' + countries[country_ab].country_id + '"' + selected + '>' + countries[country_ab].name + '</option>';
                                }
                            }

                            if (fields.length == 0) return false;

                            //
                            for (var i = 0; i < fields.length; i++) {
                                fields[i].form.PhoneCountryCode.value = MyCountry.DialCode;
                                if (fields[i].name == 'CountryId') fields[i].innerHTML = options;
                            }
                        }

                        if (isObject(MyCountry)) func();
                        else {
                            var timer = null;
                            timer = setInterval(function () {
                                if (isObject(MyCountry)) {
                                    clearInterval(timer); func();
                                }
                            }, 500);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log('countries: error', jqXHR, textStatus, errorThrown);
                    }
                });
            },
            init: function (params) {
                formGlobalParams = Object.assign(formGlobalParams, params);
            },
            submit: function (form) {

                if (!Validation.checkAll(form)) return false;

                showLoader(true);
                form.find('.server_error_msg').empty();
                (new MyAPI(form)).task({
                    success: function (data) {
                        dataLayer.push({ 'event': 'form-submit-success' });
                        if (next_page === 'self') {
                            form.trigger('form-submit-success', [{ showLoader: showLoader }, data]);
                            return false;
                        } else
                            location.href = data.next_page;
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        var data;
                        try { data = JSON.parse(jqXHR.responseText); } catch (e) { data = jqXHR.responseText; }
                        if (data == null) {
                            form.find('.server_error_msg').html(dictionary.ERR_An_error_has_occurred);
                        } else {
                            var message = data.Message;
                            for (var placeholder in dictionary) {
                                if (data.hasOwnProperty('Message') && placeholder == message) {
                                    message = dictionary[placeholder];
                                }
                            }
                            form.find('.server_error_msg').html(message).show();
                            $("html, body").animate({
                                scrollTop: $("form").offset().top - 30
                            }, 200)
                        }
                        showLoader(false);
                    }
                });
            }
        }
    })();
    // Events
    (function () {
        Forms.init(GeneralData.getFormsParams());
        $(document).on('submit', 'form', function (e) {
            if (e.target.hasAttribute('data-from-custom-handler')) return true;
            if (e.target && e.target.getAttribute('id') && e.target.getAttribute('id') == 'call-me-back-form') return true;
            e.preventDefault();
            Forms.submit($(this));
        });

        var events = ['keydown', 'focus', 'change', 'blur'];
        var timer = {};
        for (var i in events) {
            timer[events[i]] = null;
            $(document).on(events[i], 'input,select', function (e) {
                if (e.target.hasAttribute('data-from-self-listeners')) return true;
                var event_name = e.handleObj.origType;
                if (timer[event_name] != null) clearTimeout(timer[event_name]);
                timer[event_name] = setTimeout(function () {
                    Forms.Fields[event_name].call(Forms.Fields, e);
                }, 100);
            });
        }
    })();
    $(function () {
        Forms.fetchData();
    });

    window.Charts = function (ChartSymbol, ChartPeriod, SelectedPeriod) {
        /**
         * Replace symbol with . to _ to prevent css/js errore
         * @param symbol
         * @returns {*}
         */
        function replaceSymbol(symbol) {
            if (symbol != undefined) {
                return symbol.replace('.', '_');
            }
            return symbol;
        }

        try {
            var ws = new WebSocket('wss://' + api_url + '/wsapp');
            ws.onopen = function (event) {
                ws.send("message", 'init');
                ws.send("newChart");
            };

            ws.onmessage = function (evt) {
                var data = JSON.parse(evt.data);
                if (data.initialData != undefined) {
                    for (i in data.initialData) {

                        if (data.initialData[i].symbol == ChartSymbol) {
                            getChartData();

                            var changeP = (100 * (data.initialData[i].bid / data.initialData[i].change) - 100).toFixed(2) + '%';
                            $('.num_left').html(data.initialData[i].ask);
                            $('.num_right').html(changeP);


                            var changeN = (100 * (data.initialData[i].bid / data.initialData[i].change) - 100).toFixed(2)

                            if (changeN > 0) {
                                $('.num_right').removeClass('down').addClass('up');
                                $('.arrow').removeClass('down').addClass('up');
                            } else {
                                $('.num_right').removeClass('up').addClass('down');
                                $('.arrow').removeClass('up').addClass('down');
                            }
                            const oldPrice = 966.2;   // The price from the beggining of the year
                            var newPrice = data.initialData[i].ask;
                            var currentPrice = Math.round(((newPrice - oldPrice) / oldPrice) * 100) + '%';
                            $('.percent').text(currentPrice);
                        }
                    }

                }
                else if (data.chartData != undefined) {

                    $('.loader_graph').hide();
                    cleanChartData(data);
                } else {
                    for (var i in data) {
                        if (data[i].s != undefined) {
                            if (data[i].s == ChartSymbol) {
                                $('.num_left').text(data[i].a);
                            }
                        }
                    }
                }
            };

            function getChartData() {
                var obj = {
                    symbol: ChartSymbol,
                    type: 'chart',
                    period: ChartPeriod
                }
                ws.send(JSON.stringify(obj));
            }

            function cleanChartData(data) {
                var jsonData = data.chartData;
                var digits = data.Digits;
                var delta = Math.pow(10, digits).toFixed(digits);
                var obj = [];
                if (jsonData.data.length > 0) {
                    var current_min = Number(jsonData.data[0]["o"]) / Number(delta);
                    var current_max = Number(jsonData.data[0]["o"]) / Number(delta);
                    for (var x = 0; x < jsonData.data.length; x++) {
                        var formated_number = (Number(jsonData.data[x]["o"]) / Number(delta));
                        obj[x] = [jsonData.data[x]["d"] * 1000, formated_number];
                        if (formated_number > current_max) {
                            current_max = formated_number;
                        }
                        if (formated_number < current_min) {
                            current_min = formated_number;
                        }
                    }
                    buildGraph(obj, data.chartData.symbol, current_max, current_min);
                }
            }

            function buildGraph(data, ChartSymbol, maxV, minV) {
                var chart = Highcharts.stockChart('chart_graph', {
                    chart: {
                        height: 243,
                        zoomType: 'x',
                        resetZoomButton: {
                            theme: {
                                display: 'none'
                            }
                        },
                        backgroundColor: 'rgba(255, 255, 255, 0.0)',
                        //backgroundColor: {
                        //    linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
                        //    stops: [
                        //        [0, 'rgba(255, 255, 255, 0.0)'],
                        //        [1, 'rgb(37, 51, 63)']
                        //    ]
                        //}
                    },
                    title: {
                        text: ''
                    },
                    xAxis: {
                        type: 'datetime',
                        events: {
                            afterSetExtremes: function (e) {
                                if (e.trigger == "rangeSelectorButton") {
                                    switch (e.rangeSelectorButton.text) {
                                        case '1M':
                                            ChartPeriod = 30;
                                            SelectedPeriod = 3;
                                            getChartData();
                                            break;
                                        case '1Y':
                                            ChartPeriod = 60 * 4;
                                            SelectedPeriod = 4;
                                            getChartData();
                                            break;
                                        default:
                                            ChartPeriod = 1;
                                            break;
                                    }
                                }
                            }
                        },
                        labels: {
                            style: {
                                color: '#ffffff'
                            }
                        },
                        reversed: false

                    },
                    yAxis: {
                        title: {
                            text: 'Exchange rate'
                        },
                        min: minV,
                        max: maxV,
                        opposite: false,
                        labels: {
                            style: {
                                color: '#ffffff'
                            }
                        },
                        gridLineWidth: 0,
                        minorGridLineWidth: 0
                    },
                    scrollbar: {
                        enabled: false
                    },
                    navigator: {
                        enabled: false
                    },
                    legend: {
                        //enabled: false
                    },
                    rangeSelector: {
                        allButtonsEnabled: true,
                        inputPosition: {
                            align: 'left',
                            x: 0,
                            y: 0
                        },

                        buttonPosition: {
                            align: 'right',
                            x: 0,
                            y: 0
                        },
                        buttons: [{
                            type: 'month',
                            count: 1,
                            text: '1M'
                        }, {
                            type: 'year',
                            count: 1,
                            text: '1Y'
                        }],
                        buttonTheme: { // styles for the buttons
                            /*visibility: 'hidden',*/
                            fill: 'none',
                            stroke: '#ffffff',
                            'stroke-width': 1,
                            r: 5,
                            height: 15,
                            style: {
                                color: '#ffffff',
                            },
                            states: {
                                hover: {
                                    fill: '#fafafa',
                                    style: {
                                        color: '#282c30'
                                    }
                                },
                                select: {
                                    fill: '#fafafa',
                                    style: {
                                        color: '#282c30'
                                    }
                                }
                            },
                        },
                        labelStyle: {
                            /*visibility: 'hidden',*/
                            color: '#ffffff'
                        },
                        selected: SelectedPeriod,
                        inputEnabled: false
                    },
                    series: [{
                        type: 'area',
                        name: ChartSymbol,
                        data: data,
                        tooltip: {
                            valueDecimals: 4
                        },
                        fillColor: 'transparent',
                        color: '#ffff31'
                    }]
                });

            }

            //  changing the highcharts range selector buttons position
            var orgHighchartsRangeSelectorPrototypeRender = Highcharts.RangeSelector.prototype.render;
            Highcharts.RangeSelector.prototype.render = function (min, max) {
                orgHighchartsRangeSelectorPrototypeRender.apply(this, [min, max]);
                var leftPosition = 0,
                    topPosition = 0,
                    space = 10;
                this.zoomText.attr({
                    x: leftPosition + -5,
                    y: topPosition + 15,
                    text: 'Zoom',
                });
                leftPosition += this.zoomText.getBBox().width;
                for (var i = 0; i < this.buttons.length; i++) {
                    this.buttons[i].attr({
                        x: leftPosition,
                        y: topPosition
                    });
                    leftPosition += this.buttons[i].width + space;
                }
            };
        } catch (e) {
            console.log('e', e);
        }
    };

})(window);

////////////////////////////////////////////////////////////////////////////
(function () {
    function getDomain() {
        var domain;
        if (location.hasOwnProperty('hostname')) domain = location.hostname.split('.');
        else domain = location.host.split('.');
        return domain[1] + '.' + domain[2];
    }

    var timer = setInterval(function () {

        if (typeof (GetElqCustomerGUID) === 'function') {
            clearInterval(timer);

            //
            var elguid = GetElqCustomerGUID();
            var date = new Date();
            date.setTime(date.getTime() + (90 * 24 * 60 * 60 * 1000 * 30));
            var expires = " expires=" + date.toGMTString();
            document.cookie = "elguid=" + elguid + ";" + expires + "; path=/;domain=." + getDomain();
        }
    }, 500);
})();

///////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function () {

    //  when clicking on the form input --> scroll to the first input
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('input.form-control').on('click', function () {
            $('html, body').animate({
                scrollTop: $('input[name="FirstName"]').offset().top - 20
            }, '200');
        });

        $('input[name="password"]').on('click', function () {
            $('html, body').animate({
                scrollTop: $(this).offset().top - 20
            }, '200');
        });
    }

});

///////////////////////////////////////////////////////////////////////////////////////////

(function check_if_input_empty_calling() {
    var input = $('form input');

    $(input).on('blur', function () {
        check_if_input_empty(this);
    });

    $(input).on('keyup', function () {
        check_if_input_empty(this);
    });

    $(input).on('focus', function () {
        check_if_input_empty(this);
    });
}())

function check_if_input_empty(elem) {
    if ($(elem).val().length !== 0) {
        $(elem).next('.form-control-placeholder').addClass('active');
    } else {
        $(elem).next('.form-control-placeholder').removeClass('active');
    }
}

//  show/hide password when clicking on eye icon on password field
$('.password_eye').on('click', function () {
    $(this).toggleClass("active");
    var input = $('form input[name="password"]');
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

$(document).ready(function () {

    /*set password value when FORM section id is 'hiddenPass'*/
    if ($('#hiddenPass').length > 0) {
        function password_generator(len) {
            var length = (len) ? (len) : (10);
            var string = "abcdefghijklmnopqrstuvwxyz";
            var string2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            var numeric = '0123456789';
            var password = "";
            var character = "";
            var crunch = true;
            while (password.length < length) {
                var entity1 = Math.ceil(string.length * Math.random() * Math.random());
                var entity2 = Math.ceil(numeric.length * Math.random() * Math.random());
                var entity3 = Math.ceil(string2.length * Math.random() * Math.random());
                var hold = string.charAt(entity1);
                var hold2 = string.charAt(entity3);
                hold = (password.length % 2 == 0) ? (hold.toUpperCase()) : (hold);
                character += hold;
                character += hold2;
                character += numeric.charAt(entity2);
                password = character;
            }
            password = password.split('').sort(function () {
                return 0.5 - Math.random()
            }).join('');
            return password.substr(0, len);
        }
        var temp = password_generator(8);
        $("input[type='password']").val(temp);
        $("input[type='password']").attr('type', 'hidden');
    }

});