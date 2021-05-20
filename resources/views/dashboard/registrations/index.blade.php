@extends('layouts.master')

@section('style')

    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">users registrations</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User Code</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Venue</th>
                    <th>Governorate</th>
                    <th>Attend</th>
                    <th>created_at</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($registrations as $key=> $registration)
                <tr>
                    <td>{{$key +1}}</td>
                    <td>{{$registration->user_code}}</td>
                    <td>{{$registration->first_name}} {{$registration->last_name}}</td>
                    <td>{{$registration->email}}</td>
                    <td>{{$registration->phone}}</td>
                    <td>{{$registration->venue}}</td>
                    <td>{{$registration->governorate}}</td>
                    <td>
                        @if ($registration->is_attend == \App\Http\Enums\AttendStatus::ATTEND)
                            attend
                        @else
                            not attend
                        @endif
                    </td>
                    <td>{{$registration->created_at}}</td>
                    <td>

                        <a class="deleteThisBtnFinle" data-id="{{ $registration->id }}" ><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>User Code</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Venue</th>
                    <th>Governorate</th>
                    <th>Attend</th>
                    <th>created_at</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('scripts')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
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
                            const url = "{{ route('registrations.destroy') }}";
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
    </script>

    <!-- DataTables  & Plugins -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
