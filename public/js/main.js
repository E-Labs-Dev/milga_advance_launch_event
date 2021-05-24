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

            $.ajax({
                url:form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function(data){
                    toastr.success(data.success);
                    location.reload(true);
                },
                error:function(data){
                    if (data.responseJSON.errors.first_name){
                        toastr.info(data.responseJSON.errors.first_name);
                    }
                    if (data.responseJSON.errors.last_name){
                        toastr.info(data.responseJSON.errors.last_name);
                    }
                    if (data.responseJSON.errors.email){
                        toastr.info(data.responseJSON.errors.email);
                    }
                    if (data.responseJSON.errors.phone){
                        toastr.info(data.responseJSON.errors.phone);
                    }
                    if (data.responseJSON.errors.venue){
                        toastr.info(data.responseJSON.errors.venue);
                    }
                    if (data.responseJSON.errors.governorate){
                        toastr.info(data.responseJSON.errors.governorate);
                    }
                }
            });
        }
    });
});

