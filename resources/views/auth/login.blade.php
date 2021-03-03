@extends('layouts.fixed_nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                {{-- <div class="card-header">{{ __('Sign In') }}</div> --}}
                <style>
                    .card-header a.active{
                        color: #029f5b;
                    }
                </style>
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="active" id="login-form-link">Sign In</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                    @if (Route::has('password.request'))
                                        <a class="float-right" style="font-size: 14px;" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="card-footer">
                    <div class="col-md-13" style="font-size: 13px; text-align: center;">
                        Not registered?
                        <a href="register" class="active" id="login-form-link">Create an account</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
