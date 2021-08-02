@extends('layouts.master')

@section('style')
    @include('layouts.includes.dashboard.datatables.style')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Game Scores</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User Code</th>
                    <th>User Name</th>
                    <th>Game Code</th>
                    <th>Game Name</th>
                    <th>Score</th>
                    <th>created_at</th>

                </tr>
                </thead>
                <tbody>

                @foreach($games as $key=> $game)
                <tr>
                    <td>{{$key +1}}</td>
                    <td>{{$game->user_code}}</td>
                    <td>{{$game->first_name}} {{$game->last_name}}</td>
                    <td>{{$game->code}}</td>
                    <td>{{$game->name}}</td>
                    <td>{{$game->score}}</td>
                    <td>{{$game->created_at}}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>User Code</th>
                    <th>User Name</th>
                    <th>Game Code</th>
                    <th>Game Name</th>
                    <th>Score</th>
                    <th>created_at</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('scripts')
    @include('layouts.includes.dashboard.datatables.scriptes')
@endsection
