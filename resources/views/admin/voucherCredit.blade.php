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
                    <h1> Credit User Vouchers</h1>
                    <small> direct bank deposit</small>
                    <ul class="link hidden-xs">
                        <li><a href="{{route('agentHome')}}"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="#">credit vouchers</a></li>
                    </ul>
                </div>
            </section>
            <!-- page section -->
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-file-o fa-lg"></i>
                                <h2>Send vouchers</h2>
                                @include('includes.flash')
                            </div>
                            <div class="card-content">
                                <form class="form-horizontal" method="post" action="{{route('postVoucher')}}">
                                    {{ csrf_field() }}
                                    <h2 class="text-center">Manual Voucher Credit</h2>
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Email</label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input name="email" type="text" value="{{old('email')}}"
                                                           required
                                                           class="validate form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                           placeholder="Email">

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                            <!-- ./Text input-->
                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-4">
                                    <div class="input-field">
                                        <input name="quantity" required type="number" class="validate form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                                               placeholder="Quantity">
                                        @if ($errors->has('quantity'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('quantity') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Voucher Amount</label>
                                <div class="col-md-4">
                                    <div class="input-field">
                                        <input name="dprice" type="text" value="{{config('global.voucher_value')}}" disabled
                                               class="validate form-control{{ $errors->has('dprice') ? ' is-invalid' : '' }}"
                                               placeholder="Voucher price">
                                        <input name="price" type="hidden" value="{{config('global.voucher_value')}}"
                                               class="validate form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                               placeholder="Voucher price">
                                        @if ($errors->has('price'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('price') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" onclick="submit();" class="btn btn-success">Submit <span
                                                class="glyphicon glyphicon-send"></span>
                                    </button>
                                </div>
                            </div>

                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection