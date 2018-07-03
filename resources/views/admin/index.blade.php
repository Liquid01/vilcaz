@extends('admin.layouts.admin')

@section('content')
    <!-- Page content -->
    <div id="page-content-wrapper">

        @if(auth()->user()->verified())
            <div class="page-content">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="header-icon">
                        <i class="fa fa-tachometer"></i>
                    </div>
                    <div class="header-title">
                        <div class="row">
                            <div class="col-sm-4">
                                <h1> Welcome &nbsp; {{auth()->user()->name}}</h1>
                            </div>
                            <hr class=" visible-xs">
                            <div class="col-sm-6" STYLE="margin-top:15px;">
                                <div class="btn btn-info" id="reflink" onclick="copyToClipboard();" data-link="{{url('/register/'.auth()->user()->username)}}">Copy Referral Link</div>
                                {{--<span>Referral Link: <a href="{{url('/register/'.auth()->user()->username)}}"--}}
                                {{--target="_blank">{{url('/register/'.auth()->user()->username)}}</a> </span>--}}
                            </div>
                        </div>

                        <ul class="link hidden-xs">
                            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
                            <li><a href="{{url('home')}}">Dashboard</a></li>
                        </ul>
                    </div>
                </section>

                <div class="alert alert-success">
                    Your Account has been Verified
                </div>
                <!-- page section -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="panel cardbox bg-success">
                                <div class="panel-body card-item panel-refresh">
                                    <a class="refresh" href="#">
                                        <span class="fa fa-refresh"></span>
                                    </a>
                                    <div class="refresh-container"><i
                                                class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                    <div class="timer" data-to="{{\App\VoucherSales::all()->sum('voucher_quantity')}}" data-speed="1500">0</div>
                                    <div class="cardbox-icon">
                                        <i class="material-icons">loyalty</i>
                                    </div>
                                    <div class="card-details">
                                        <h4>Sold Vouchers</h4>
                                        <a href="{{route('creditVoucher')}}" class="btn royal darken-2 ">
                                            Credit Voucher
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="panel cardbox bg-warning">
                                <div class="panel-body card-item panel-refresh">
                                    <a class="refresh2" href="#">
                                        <span class="fa fa-refresh"></span>
                                    </a>
                                    <div class="refresh-container">
                                        <i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i>

                                    </div>
                                    <h2 class="pull-right" style="width:40%;"></h2>
                                    {{--<div class="timer" data-to="30" data-speed="1500">0</div>--}}
                                    <div class="cardbox-icon">
                                        <i class="material-icons">email</i>
                                    </div>
                                    <div class="card-details">
                                        <h4>Mails</h4>
                                        <a href="{{route('mailBox')}}" class="btn cyan sendMail">Send Mails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
                            {{--<div class="panel cardbox bg-dark">--}}
                                {{--<div class="panel-body card-item panel-refresh">--}}
                                    {{--<a class="refresh" href="#">--}}
                                        {{--<span class="fa fa-refresh"></span>--}}
                                    {{--</a>--}}
                                    {{--<div class="refresh-container"><i--}}
                                                {{--class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>--}}
                                    {{--<div class="timer" data-to="{{\App\Referral::where('referrer_id', auth()->user()->username)->count()}}" data-speed="1500">0</div>--}}
                                    {{--<div class="cardbox-icon">--}}
                                        {{--<i class="material-icons">email</i>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-details">--}}
                                        {{--<h4>Total Referrals</h4>--}}
                                        {{--<span>0% Higher than last week</span>--}}
                                        {{--<button class="btn cyan">New Referral</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
                            {{--<div class="panel cardbox bg-primary">--}}
                                {{--<div class="panel-body card-item panel-refresh">--}}
                                    {{--<a class="refresh" href="#">--}}
                                        {{--<span class="fa fa-refresh"></span>--}}
                                    {{--</a>--}}
                                    {{--<div class="refresh-container"><i--}}
                                                {{--class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>--}}

                                    {{--<div class="timer" data-to="0" data-speed="1500">0</div>--}}
                                    {{--<div class="cardbox-icon">--}}
                                        {{--<i class="material-icons">account_balance_wallet</i>--}}
                                    {{--</div>--}}
                                    {{--<div class="card-details">--}}
                                        {{--<h4>Wallet Balance</h4>--}}
                                        {{--<button class="btn royal darken-2 btn-demo js-tingle-modal-3">Send Voucher--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!-- ./counter Number -->
                        <!-- ./Messages -->




                        <!-- Tingle tiny content -->
                        <div class="tingle-demo tingle-demo-tiny">
                            <h1>Buy Voucher</h1>
                            <div class="card ">
                                <form class="">
                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                                    <div class="form-group is-empty ">
                                        <label for="quantity"
                                               class="col-sm-2 col-xs-12 control-label" style="font-size: 14px;">Quantity </label>
                                        <div class="col-sm-8 col-xs-9">
                                            <input class="form-control" min="500" disabled  step="500" value="500"
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
                                        <label class="text-center" id="voucher_amount"></label>
                                    </div>
                                    {{--<div class="form-group is-empty">--}}
                                    {{--<label for="duration"--}}
                                    {{--class="col-md-2 control-label" style="font-size: 14px;">Day(s)</label>--}}
                                    {{--<div class="col-md-9">--}}
                                    {{--</div>--}}
                                    {{--<span class="material-input"></span>--}}
                                    {{--</div>--}}
                                    <input id="duration" type="hidden" value="0">

                                    <input type="hidden" value="{{auth()->user()->email}}" name="user_email"
                                           id="user_email">
                                    <input type="hidden" value="{{auth()->user()->name}}" name="user_full_name"
                                           id="user_full_name">




                                    <input type="hidden" name="pay_amount" id="pay_amount">
                                </form>
                            </div>
                        </div>

                        <div class="tingle-demo tingle-demo-tiny2">
                            <h1>Send Voucher</h1>
                            <div class="card ">
                                <p class="well pt-1">

                                    The send button will be activated on July 1st 2018 for you to be exchanging for
                                    goods
                                    and services. Until then, buy as much vouchers as you can afford and watch them
                                    appreciate in value every day.
                                </p>
                            </div>
                        </div>
                        <!-- /Tingle tiny content -->
                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>
        @else
            <div class="overlay" style="position: absolute; top: 0px; left: 0px; z-index: 1000; background: #000; height: 100%; width: 100%; opacity:0.7;">
                <div class="container">
                    <div class="well text-center " style="position: absolute; top:25%; left: 20%;">
                        <Strong class="">
                            <p class="text-center alert alert-info">
                                Your Wallet has been created successfully but you have not verified your Email Address;
                            </p>
                            <p class="text-danger">
                                An email has been sent you with an activation link; verify by clicking  the "Verified
                                Account" Button from your Email Adress provided
                            </p>
                        </Strong>
                        <br> <br>

                        {{--<button class="btn btn-sm" id="resend">Resend Link</button>--}}
                    </div>
                </div>

            </div>

    @endif

    {{--<button id="me">send</button>--}}

    <!-- ./page-content -->
    </div>
    <!-- ./page-content-wrapper -->
@endsection



