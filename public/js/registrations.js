$(document).ready(function() {
    var origin = window.location.href;
    const main_url = (origin.split('/admin')[0]);

    $("#example1").on("click", ".deleteThisBtnFinle", function() {
        const itemid = $(this).attr('data-id');
        swal({
            title: "Are you sure ?",
            text: "This will be deleted finely!",
            icon: "warning",
            buttons: ["Cancel!", "OK"],
            dangerMode: true,

        })
            .then((willDelete) => {
                if (willDelete) {
                    const url = main_url+"/admin/registrations/destroy";
                    const _token = $('input[name="_token"]').val();
                    const id = itemid;
                    $.ajax({
                        headers: {
                            "X-CSRF-TOKEN": _token
                        },
                        type: 'POST',
                        url: url,
                        data: {
                            id: id
                        },
                        success: function(data) {
                            console.log(data);
                            swal("Item deleted successfully !", {
                                icon: "success",
                                buttons: false,
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        }
                    });
                } else {
                    swal("Item not  deleted!");
                }
            });
    });
    $("#example2").on("click", ".deleteThisBtnFinle", function() {
        const itemid = $(this).attr('data-id');
        swal({
            title: "Are you sure ?",
            text: "This will be deleted finely!",
            icon: "warning",
            buttons: ["Cancel!", "OK"],
            dangerMode: true,

        })
            .then((willDelete) => {
                if (willDelete) {
                    const url = main_url+"/admin/registrations/change-status";
                    const _token = $('input[name="_token"]').val();
                    const id = itemid;
                    $.ajax({
                        headers: {
                            "X-CSRF-TOKEN": _token
                        },
                        type: 'POST',
                        url: url,
                        data: {
                            id: id
                        },
                        success: function(data) {
                            console.log(data);
                            swal("Item deleted successfully !", {
                                icon: "success",
                                buttons: false,
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        }
                    });
                } else {
                    swal("Item not  deleted!");
                }
            });
    });

});
