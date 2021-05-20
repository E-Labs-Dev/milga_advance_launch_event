$(function() {
    $("form[name='registration_form']").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 3,
            },
            last_name: {
                required: true,
                minlength: 3,
            },
            email: {
                required: true,
                email :true,
            },
            phone: {
                numberVal: "[0-9]+",
                required: true,
            },
            venue: {
                required: true
            },
            governorate: {
                required: true
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});

