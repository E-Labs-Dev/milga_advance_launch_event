@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-6" style="margin-top: 16px;">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #df0e19;">
                            <h3 class="card-title">Quick Example</h3>
                        </div>

                    @include('layouts.includes.messages')

                    <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('registrations.store')}}">
                            @csrf

                            <div class="card-body">
                                <div class="form-group col-6" style="float: left;">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" value="{{ old('first_name') }}" required>
                                    @if ($errors->has('first_name'))
                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-6" style="float: left;">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" value="{{old('last_name')}}" required>
                                    @if ($errors->has('last_name'))
                                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-6" style="float: left;">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-6" style="float: left;">
                                    <label for="phone" class="col-12">Phone</label>
                                    <input type="tel" class="form-control col-12" placeholder="Enter Phone" name="phone" id="phone" value="{{old('phone')}}" required>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group col-6" style="float: left;">
                                    <label>Specialty</label>
                                    <select class="form-control" name="specialty_id" style="width: 100%;" required>
                                        <option selected=""></option>
                                        @foreach($specialties as  $specialty)
                                        <option value="{{$specialty->id}}" @if (old('specialty_id') == $specialty->id )
                                            selected
                                        @endif>{{$specialty->name}}</option>
                                        @endforeach
                                    </select>
                                        @if ($errors->has('specialty_id'))
                                            <span class="text-danger">{{ $errors->first('specialty_id') }}</span>
                                        @endif
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group col-6" style="float: left;">
                                    <label>Venue</label>
                                    <select class="form-control" name="venue_id" style="width: 100%;" required>
                                        <option selected=""></option>
                                        @foreach($venues as  $venue)
                                            <option value="{{$venue->id}}" @if (old('venue_id') == $venue->id )
                                            selected
                                                @endif >{{$venue->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('venue_id'))
                                        <span class="text-danger">{{ $errors->first('venue_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="background-color: #df0e19;">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('scripts')
    <script src="{{asset('js/intlTelInput.js')}}"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            utilsScript: "build/js/utils.js",
        });
    </script>
@endsection
