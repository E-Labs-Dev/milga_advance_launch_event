$(function() {
    var origin = window.location.href;

    const main_url = (origin.split('/#')[0]);


    $('#registration_form').on('click',function () {

        const _token = $('input[name="_token"]').val();
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": _token
            },
            url: main_url+'/registrations/store',
            type: 'POST',
            data: {
                first_name: $('input[name="first_name"]').val(),
                last_name: $('input[name="last_name"]').val(),
                phone: $('input[name="full_phone"]').val(),
                email: $('input[name="email"]').val(),
                venue: $('select[name="venue"]').val(),
                governorate:  $('select[name="governorate"]').val(),
            },
            success: function(data){

                window.location.href = main_url+'/profile'

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

    });

    $('#login_form').on('click',function () {

        const _token = $('input[name="_token"]').val();
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": _token
            },
            url: main_url+'/login',
            type: 'POST',
            data: {
                phone: $('input[name="full_phone_login"]').val(),
            },
            success: function(data){

                    window.location.href = main_url+'/profile'

            },
            error:function(data){
                if (data){
                    if (data.responseJSON.errors.phone){
                        toastr.info(data.responseJSON.errors.phone[0])
                    }else{
                        toastr.info(data.responseJSON.errors)
                    }
                }

            }
        });

    });
});

