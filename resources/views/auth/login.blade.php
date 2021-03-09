@extends('layouts.guest')



@if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

<div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card-login">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a  class="logo logo-admin ">Login</a>
                    </h3>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <div class="col-12" value="{{ __('Email') }}">
                                    <input class="form-control-login" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12" value="{{ __('Password') }}">
                                    <input class="form-control-login" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">{{ __('Remember me') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-small waves-effect waves-light" type="submit">{{ __('Masuk') }}</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> <small>{{ __('Forgot your password?') }}</small></a>
                                    @endif
                                </div>
                            </div>
                        </form>
                       
                    </div>
                    
                </div>
                <img src="assets\images\3.svg" alt="" style="position: fixed;right: 0px;bottom: 0px; float: left;">
            </div>
        </div>