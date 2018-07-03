@extends('layouts.app')

@section('content')
    <div class="ms-hero-page-override ms-hero-img-airplane ms-bg-fixed ms-hero-bg-dark-light">
        <div class="container" style="margin-top:150px;">
            <div class="text-center">
                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                    Register</h1>
                <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">
                    Do not wait more register now! Access great benefit from
                    <span class="color-info">exclusive membership</span> conditions.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card card-primary card-hero animated fadeInUp animation-delay-7">
            <div class="card-block">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        @if(isset($referrer) && $referrer !== null)
                            <div class="form-group row">
                                <label for="referrer"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Referrer') }}</label>

                                <div class="col-md-6">
                                    <input id="referrer" type="text" disabled
                                           class="form-control{{ $errors->has('referrer') ? ' is-invalid' : '' }}"
                                           name="referrer" value="{{$referrer->username}}" required>
                                    <small class="success">{{$referrer->name}}</small>
                                    @if ($errors->has('referrer'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('referrer') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <input type="hidden" name="ref" id="ref" value="{{$referrer->username}}">
                            </div>
                        @endif





                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                       value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text"
                                       class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                       name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="number"
                                       class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"
                                       value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 0;">
                            <!-- inline style is just to demo custom css to put checkbox below input above -->
                            <div class="col-md-offset-2 col-md-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Terms and condition
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-offset-6">
                                <button type="submit" class="btn btn-primary btn-raised btn-block pull-right">
                                    {{ __('Create Wallet') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
