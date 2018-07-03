@extends('layouts.app')

@section('content')
    <div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-dark-light">
        <div class="container" style="margin-top: 160px;">
            <div class="text-center">
                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                    <span>LOGIN</span>
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-hero card-primary animated fadeInUp animation-delay-7">
                    <div class="card-block">
                        <h1 class="color-primary text-center">Login</h1>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Keep me Logged In') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary btn-raised">
                                            {{ __('Login') }}
                                        </button>

                                        <a class="btn btn-link btn-raised" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="text-center mt-4">
                            <h5>Not Reistered?</h5>
                           <a href="{{route('register')}}" class="btn btn-block btn-lg btn-raised btn-success">Create Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


