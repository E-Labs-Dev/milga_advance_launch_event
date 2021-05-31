$(function (){
    var origin = window.location.href;

    const main_url = (origin.split('/#')[0]);

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href")
        if (target == '#login'){
            var inputLogin = document.querySelector("#phone-login"),
                errorMsgLoign = document.querySelector("#error_msg_login");

            var errorMapLogin = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

            var iti = window.intlTelInput(inputLogin, {
                separateDialCode: true,
                utilsScript: main_url + "/plugins/intlTel/js/utils.js"
            });
            var reset = function () {
                inputLogin.classList.remove("error");
                errorMsgLoign.innerHTML = "";
                errorMsgLoign.classList.add("hide");
            };

            inputLogin.addEventListener('blur', function () {
                reset();
                if (inputLogin.value.trim()) {
                    if (iti.isValidNumber()) {
                        $('input[name="full_phone_login"]').val(iti.getNumber())
                    } else {
                        inputLogin.classList.add("error");
                        var errorCode = iti.getValidationError();
                        errorMsgLoign.innerHTML = errorMapLogin[errorCode];
                        errorMsgLoign.classList.remove("hide");
                    }
                }
            });

            inputLogin.addEventListener('change', reset);
            inputLogin.addEventListener('keyup', reset);
        }else{

            var input = document.querySelector("#phone-registration"),
                errorMsg = document.querySelector("#error-msg");

            var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

            var iti = window.intlTelInput(input, {
                separateDialCode: true,
                utilsScript: main_url + "/plugins/intlTel/js/utils.js"
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
                        $('input[name="full_phone"]').val(iti.getNumber())
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
        }

    });


    if ($('#regitration').hasClass('active')){

        var input = document.querySelector("#phone-registration"),
            errorMsg = document.querySelector("#error-msg");

        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        var iti = window.intlTelInput(input, {
            separateDialCode: true,
            utilsScript: main_url + "/plugins/intlTel/js/utils.js"
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
                    $('input[name="full_phone"]').val(iti.getNumber())
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
    }
});

