@extends('layouts.master_auth')

@section('content')

<div class="card-header text-center">
    <a class="h4"><b>Milga Advance</b> Login</a>
</div>
<div class="card-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')--}}
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                        Remember Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>
            <!-- /.col -->
        </div>
    </form>

{{--    <p class="mb-1">--}}
{{--        @if (Route::has('password.request'))--}}
{{--            <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                {{ __('Forgot Your Password?') }}--}}
{{--            </a>--}}
{{--        @endif--}}
{{--    </p>--}}

</div>
<!-- /.card-body -->
@endsection
