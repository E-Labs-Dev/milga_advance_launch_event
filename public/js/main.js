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
            const _token = $('input[name="_token"]').val();
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": _token
                },
                url:form.action,
                type: form.method,
                data: {
                    first_name: $('input[name="first_name"]').val(),
                    last_name: $('input[name="last_name"]').val(),
                    phone: $('input[name="full_phone"]').val(),
                    email: $('input[name="email"]').val(),
                    venue: $('select[name="venue"]').val(),
                    governorate:  $('select[name="governorate"]').val(),
                },
                success: function(data){
                    toastr.success(data.success);

                    setTimeout(function(){
                        window.location.reload(1);
                    }, 5000);

                },
                error:function(data){
                    if (data){
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

                }
            });
        }
    });
});

