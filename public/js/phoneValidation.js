$(function (){
    var origin = window.location.href;
    var input = document.querySelector("#phone"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
    var iti = window.intlTelInput(input, {
        // hiddenInput: "full_phone",
        separateDialCode:true,
        utilsScript: origin+"plugins/intlTel/js/utils.js"
    });
    var reset = function() {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        validMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

// on blur: validate
    input.addEventListener('blur', function() {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.innerHTML = "✓ Valid";
                $('input[name="full_phone"]').val(iti.getNumber())
            } else {
                input.classList.add("error");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    });

// on keyup / change flag: reset
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);

});
