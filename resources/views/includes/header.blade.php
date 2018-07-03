<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>VilCaz Vouchers - Welcome </title>
    <meta name="keywords" content="voucher, vilcaz, ivo, ico, cryptocurrency">
    <meta name="description"
          content=" VilCaz Voucher is a digital voucher that is programmed to appreciate in value every month and designed to be used in exchange for goods and services in West Africa countries.">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.gif')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/preload.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/width-boxed.min.css') }}" id="ms-boxed" disabled="">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets/css/jssocials.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jssocials-theme-classic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colorpicker.min.css') }}">

    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css"--}}
    {{--rel="stylesheet">--}}

    <meta property="fb:admins" content="patrick.u.olayi"/>
    <meta property="fb:admins" content="liquidsnake01"/>

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->

    <style type="text/css">
        .btn {
            border: 1px solid #f25f43;
        }
    </style>
</head>
<body>

<div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header shadow-2dp no-pb">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
                </button>
                <div class="modal-title text-center">
                    <h3 class="no-m ms-site-title">
                        Value Calculator
                    </h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="card card-primary animated zoomInUp animation-delay-5">
                        <div class="card-block">
                            <form class="form-horizontal">
                                <fieldset>
                                    {{--<div class="form-group is-empty">--}}
                                        {{--<label for="quantity"--}}
                                               {{--class="col-md-2 control-label">Quantity </label>--}}
                                        {{--<div class="col-md-9">--}}
                                            {{--<input class="form-control" min="500" step="50" id="voucher_quantity" placeholder="quantity"--}}
                                                   {{--type="number" formnovalidate required>--}}
                                        {{--</div>--}}
                                        {{--<span class="material-input"></span>--}}
                                    {{--</div>--}}

                                    <div class="form-group is-empty ">
                                        <label for="quantity"
                                               class="col-sm-2 col-xs-12 control-label" style="font-size: 14px;">Quantity </label>
                                        <div class="col-sm-8 col-xs-9">
                                            <input class="form-control" min="1"   step="1" value="1"
                                                   id="voucher_quantity" placeholder="quantity"
                                                   type="number" formnovalidate required style="background: #fff; color: #000;">
                                        </div>
                                        <div class="col-sm-2 col-xs-3">
                                            <div id="increase" data-increase="" class="quantity btn m btn-primary"
                                                 style="padding:5px;">
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <div id="deduct" data-deduct="" class="quantity btn  btn-primary"
                                                 style="padding:5px;">
                                                <i class="fa fa-minus"></i>
                                            </div>

                                            <br>
                                        </div>

                                    </div>


                                    <div class="form-group is-empty">
                                        <label for="duration"
                                               class="col-md-2 control-label" style="font-size: 14px;">Day(s)</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="duration" placeholder="days"
                                                   type="number" min="1"></div>
                                        <span class="material-input"></span>
                                    </div>

                                    <div class="form-group is-empty">
                                        <label for="amount"
                                               class="col-md-2 control-label">Amount</label>
                                        <div class="col-md-9">
                                            <div class="alert alert-royal alert-light alert-dismissible" id="voucher_amount" role="alert">
                                            </div>
                                            <span class="material-input"></span>
                                        </div>

                                        <input type="hidden"  name="pay_amount" id="pay_amount">

                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-2">


                                                <a href="{{route('login')}}" class="btn btn-raised btn-primary">
                                                    Buy
                                                </a>
                                                <button type="reset" id="calc_clear" class="btn btn-danger">Clear</button>
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



<a href="javascript:void(0)"
   class="ms-conf-btn ms-configurator-btn btn-circle btn-circle-raised btn-circle-primary animated rubberBand"
   style="right: 20px;">
    <i class="fa fa-user-circle-o"></i>
    <div class="ripple-container"></div>
</a>




<div id="ms-preload" class="ms-preload">
    <div id="status">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<div class="sb-site-container">

    <nav class="navbar ms-lead-navbar navbar-mode" id="navbar-lead" style="height: auto !important;">
        <div class="container container-full" id="home">
            <div class="navbar-header">
                <a class="mt-1" href="{{url('/')}}">
                    <img src="{{asset('assets/img/logo-200.png')}}" style="max-width:120px; margin-top:5px"
                         class=" img img-responsive"
                         alt="">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a data-scroll href="{{url('/')}}" class="active"   <?php if (isset($page) && $page == 'home') echo "style='color:#666; font-weight: bolder;'"; ?>
                        >Home
                        </a>
                    </li>
                    <li>
                        <a data-scroll href="{{url('/whitepaper')}}" <?php if (isset($page) && $page == 'whitepaper') echo "style='color:#666; font-weight: bolder;'"; ?>>Whitepaper</a>
                    </li>
                    <li>
                        <a data-scroll href="{{url('/compensation')}}" <?php if (isset($page) && $page == 'compensation') echo "style='color:#666; font-weight: bolder;'"; ?>>Compensation Plan</a>
                    </li>
                    <li>
                        <a data-scroll href="{{url('/contact')}}" <?php if (isset($page) && $page == 'contact') echo "style='color:#666; font-weight: bolder;'"; ?>>Contact</a>
                    </li>
                    <li>
                        <a data-scroll href="{{route('login')}}"<?php if (isset($page) && $page == 'compensation') echo "style='color:#666; font-weight: bolder;'"; ?>>Login</a>
                    </li>
                </ul>
            </div>
            <!-- navbar-collapse collapse -->
            <a href="#" class="sb-toggle-left btn-navbar-menu hidden-lg hidden-md visible-xs visible-sm"
               style="color: #666!important;">
                <i class="zmdi zmdi-menu"></i>
            </a>
        </div>
        <!-- container -->
    </nav>

    <div class="clearfix"></div>