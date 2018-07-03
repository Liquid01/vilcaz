@extends('admin.layouts.admin')


@section('content')
    <div id="page-content-wrapper">
        <div class="page-content">
            <!-- Content Header (Page header) -->
            <section class="content-header z-depth-1">
                <div class="header-icon">
                    <i class="fa fa-file-o"></i>
                </div>
                <div class="header-title">
                    <h1> Create Agent</h1>
                    <small> New Support</small>
                    <ul class="link hidden-xs">
                        <li><a href="{{route('adminHome')}}"><i class="fa fa-home"></i>Home</a></li>
                    </ul>
                </div>
            </section>
            <!-- page section -->

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-file-text-o fa-lg"></i>
                        <h2>
                            Basic Forms
                            @include('includes.flash')
                        </h2>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <form class="col s12 m-t-20" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-field form-input col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="name" class="validate {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                           value="{{ old('name') }}" required autofocus type="tel" >
                                    <label for="name"> Name</label>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-field form-input col s6">
                                    <i class="material-icons prefix">account_user</i>
                                    <input id="username" class="validate {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"
                                           value="{{ old('username') }}" required autofocus type="tel" >
                                    <label for="username"> Username</label>
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-field form-input col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required type="tel">
                                    <label for="email" class="active">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-field form-input col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="phone" class="validate {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"
                                           value="{{ old('phone') }}" required type="tel">
                                    <label for="phone">Telephone</label>
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-field form-input col s6">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="password" class="validate {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required type="password">
                                    <label for="password" class="active">Password</label>
                                </div>

                                <div class="f row mb-0">
                                    <div class="col-md-offset-6">
                                        <button type="submit" class="btn btn-primary btn-raised btn-block ">
                                            {{ __('Create Agent') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection