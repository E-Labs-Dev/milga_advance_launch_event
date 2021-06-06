$(function () {
    var origin = window.location.href;
    var main_url;

    if (window.location.href.indexOf("#") > 0) {
        main_url = (origin.split('#')[0]);
    } else {
        main_url = origin;
    }
    var input = document.querySelector("#phone-registration"),
        errorMsg = document.querySelector("#error-msg-registration");


    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid phone number"];

    var iti = window.intlTelInput(input, {
        initialCountry: "auto",
        separateDialCode: true,
        utilsScript: main_url + "plugins/intlTel/js/utils.js",
        geoIpLookup: function (success, failure) {
            $.get("https://ipinfo.io", function () {
            }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "eg";
                success(countryCode);
            });
        },
    });

    var reset = function () {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
    };

    input.addEventListener('blur', function () {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                $('input[name="phone"]').val(iti.getNumber())
            } else {
                input.classList.add("error");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    });

    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);


    var inputLogin = document.querySelector("#phone-login"),
        errorMsgLoign = document.querySelector("#error_msg_login");

    var errorMapLogin = ["Invalid number", "Invalid country code", "Too short", "Too long", "number Invalid "];

    var itii = window.intlTelInput(inputLogin, {
        initialCountry: "auto",
        separateDialCode: true,
        utilsScript: main_url + "plugins/intlTel/js/utils.js",
        geoIpLookup: function (success, failure) {
            $.get("https://ipinfo.io", function () {
            }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "eg";
                success(countryCode);
            });
        },
    });
    var reset = function () {
        inputLogin.classList.remove("error");
        errorMsgLoign.innerHTML = "";
        errorMsgLoign.classList.add("hide");
    };

    inputLogin.addEventListener('blur', function () {
        reset();
        if (inputLogin.value.trim()) {
            if (itii.isValidNumber()) {
                $('input[name="number_phone"]').val(itii.getNumber())
            } else {
                inputLogin.classList.add("error");
                var errorCode = itii.getValidationError();
                errorMsgLoign.innerHTML = errorMapLogin[errorCode];
                errorMsgLoign.classList.remove("hide");
            }
        }
    });

    inputLogin.addEventListener('change', reset);
    inputLogin.addEventListener('keyup', reset);

});
