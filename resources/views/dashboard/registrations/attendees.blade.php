@extends('layouts.master')

@section('style')
    @include('layouts.includes.dashboard.datatables.style')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registered Drs.</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User Code</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Venue</th>
                    <th>Governorate</th>
                    <th>Attendee_at</th>
                    <th>Medical representative</th>
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
                        <td>{{$registration->updated_at}}</td>
                        <td>{{ $registration->medical_representative }}</td>
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
                    <th>Attendee_at</th>
                    <th>Medical representative</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('scripts')
    @include('layouts.includes.dashboard.datatables.scriptes')
    <script src="{{asset('js/registrations.js')}}"></script>
@endsection
