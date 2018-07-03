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
                    <h1> Credit Agents</h1>
                    <small> direct bank deposit</small>
                    <ul class="link hidden-xs">
                        <li><a href="{{route('adminHome')}}"><i class="fa fa-home"></i>Home</a></li>
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
                                <h2>Credit Agent</h2>
                                @include('includes.flash')
                            </div>
                            <div class="card-content">
                                <form class="form-horizontal" method="post" action="{{route('creditPayAgent')}}">
                                    {{ csrf_field() }}
                                    <h2 class="text-center">Pay Agents</h2>
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Email</label>
                                            <div class="col-md-4">
                                                <div class="input-field">


                                                    <input name="email" id="email" type="text" value="{{$user->email}}"
                                                           required
                                                           class="validate form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                           placeholder="Email">

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Pay For</label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input name="payment_for" id="payment_for" type="text" value="{{old('payment_for')  }}"

                                                           class="validate form-control{{ $errors->has('payment_for') ? ' is-invalid' : '' }}"
                                                           placeholder="Payment for">

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('payment_for') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ./Text input-->
                                        <!-- Text input-->

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Amount</label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input name="amount" required type="number" class="validate form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}"
                                                           placeholder="Amount Paid">
                                                    @if ($errors->has('amount'))
                                                        <span class="invalid-feedback">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"></label>
                                            <div class="col-md-4">
                                                <button type="submit" onclick="submit();" class="btn btn-success">Submit <span class="glyphicon glyphicon-send"></span>
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