@extends('layouts.fixed_nav')
<style>
  .form-radio {
    margin: 0 -10px;
    margin-bottom: 20px; }
  .form-radio input {
    width: 0;
    height: 0;
    position: absolute;
    left: -9999px; }
  .form-radio input + label {
    width: 192px;
    margin: 0 8px;
    padding: 11px 31px;
    box-sizing: border-box;
    position: relative;
    display: inline-block;
    border: solid 2px #ebebeb;
    background-color: #FFF;
    font-size: 14px;
    font-weight: 600;
    color: #888;
    text-align: center;
    transition: border-color .15s ease-out,  color .25s ease-out,  background-color .15s ease-out, box-shadow .15s ease-out;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px; }
  .form-radio input:checked + label {
    background-color: #1da0f2;
    color: #FFF;
    border-color: #1da0f2;
    z-index: 1; }
  .form-radio input:focus + label {
    outline: none; }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center">{{ __('Registration') }}</div>

                <div class="card-body pb-0">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-radio">
                            @if (empty($role))
                                <input type="radio" name="member_level" value="0" id="student" checked="checked"/>
                                <label for="student">Student</label>
                                <input type="radio" name="member_level" value="1" id="instructor"/>
                                <label for="instructor">Instructor</label>
                            @else
                                <input type="radio" name="member_level" value="0" id="student"/>
                                <label for="student">Student</label>
                                <input type="radio" name="member_level" value="1" id="instructor" checked="checked"/>
                                <label for="instructor">Instructor</label>
                            @endif
                        </div>                        

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}

                            <div class="col-md-12">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-6 mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer">
                    <div class="col-md-13" style="font-size: 13px; text-align: center;">
                        Already have an account?
                        <a href="login" class="active" id="login-form-link">Sign In</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
