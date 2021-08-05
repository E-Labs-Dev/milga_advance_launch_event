@extends('layouts.master')

@section('style')
    @include('layouts.includes.dashboard.datatables.style')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Surveys</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Full name</th>
                        <th>Title</th>
                        <th>Email</th>
                        <th>Mobile number</th>
                        <th>Specialty</th>
                        <th>Department</th>
                        <th>Full Address</th>
                        <th>City,Country</th>
                        <th>Hospital/Organization</th>
                        <th>Hospital Address</th>
                        <th>Question 1</th>
                        <th>Question 2</th>
                        <th>Question 3</th>
                        <th>Question 4</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($surveys as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->question_1 }}</td>
                            <td>{{ $item->question_2 }}</td>
                            <td>{{ $item->question_3 }}</td>
                            <td>{{ $item->question_4 }}</td>
                            <td>{{ $item->question_5 }}</td>
                            <td>{{ $item->question_6 }}</td>
                            <td>{{ $item->question_7 }}</td>
                            <td>{{ $item->question_8 }}</td>
                            <td>{{ $item->question_9 }}</td>
                            <td>{{ $item->question_10 }}</td>
                            <td>{{ $item->question_11 }}</td>
                            <td>{{ $item->question_12 }}</td>
                            <td>{{ $item->question_13 }}</td>
                            <td>{{ $item->question_14 }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Full name</th>
                        <th>Title</th>
                        <th>Email</th>
                        <th>Mobile number</th>
                        <th>Specialty</th>
                        <th>Department</th>
                        <th>Full Address</th>
                        <th>City,Country</th>
                        <th>Hospital/Organization</th>
                        <th>Hospital Address</th>
                        <th>Question 1</th>
                        <th>Question 2</th>
                        <th>Question 3</th>
                        <th>Question 4</th>

                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('scripts')
    @include('layouts.includes.dashboard.datatables.scriptes')
@endsection
