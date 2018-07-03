@extends('admin.layouts.app')

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
                <?php
                $myVouchers = \App\VoucherSales::where('username', auth()->user()->username)->sum('voucher_quantity');
                //                dd($myVouchers);
                $vouchersSold = \App\VoucherSales::all()->sum('voucher_quantity');
                ?>
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
                                    <div class="timer" data-to="{{$myVouchers}}" data-speed="1500">0</div>
                                    <div class="cardbox-icon">
                                        <i class="material-icons">loyalty</i>
                                    </div>
                                    <div class="card-details">
                                        <h4>Total Vouchers</h4>
                                        <button class="btn royal darken-2 btn-demo js-tingle-modal-2 ">Buy Voucher
                                        </button>
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

                                    <h4 class="color-white mb-0" style="color: white!important; margin-bottom: 0px!important; font-weight:bolder">Voucher Value:
                                        <span class="">
                                              &#x20a6; {{ config('global.voucher_value') }}
                                        </span>
                                    </h4>
                                    {{--<h2 class="pull-right" style="width:40%;">NGN</h2>--}}
                                    {{--<div class="timer" data-to="" data-speed="1500">0</div>--}}
                                    <div class="cardbox-icon">
                                        <i class="material-icons">visibility</i>
                                    </div>
                                    <div class="card-details" style="margin-top: 10px!important;">
                                        <h4>Voucher Amount</h4>

                                        <h4 class="mt-1" style="margin-top:15px;">&#x20a6;
                                            &nbsp; {{number_format((float)$myVouchers *  config('global.voucher_value'))}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="panel cardbox bg-dark">
                                <div class="panel-body card-item panel-refresh">
                                    <a class="refresh" href="#">
                                        <span class="fa fa-refresh"></span>
                                    </a>
                                    <div class="refresh-container"><i
                                                class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i>
                                    </div>
                                    <h4 class="color-white mb-0" style="color: white!important; margin-bottom: 0px!important; font-weight:bolder">Total Referrals:
                                        <span class="">
                                              {{\App\Referral::where('referrer_id', auth()->user()->username)->count()}}
                                        </span>
                                    </h4>

                                    <div class="cardbox-icon">
                                        <i class="material-icons">email</i>
                                    </div>
                                        <div class="card-details" style="margin-top: 10px!important;">
                                            <h4>Total Bonus :
                                                <span class="bold text-right text-white">
                                                <span style="color: white; font-size: 17px; font-weight: bold;">
                                            <span>
                                                 <?php
                                                if (isset($referrals) && sizeof($referrals) > 0) {
//                                        var_dump($referrals);

                                                    $sum = 0;
//                                        echo'sum' . $sum;

                                                    foreach ($referrals as $referral) {
                                                        $accum = \App\VoucherSales::where('username', $referral->username)->sum('sales_amount') * 0.10;

                                                        $sum += $accum;
                                                    }

                                                    if (isset($secondLevel) && sizeof($secondLevel) > 0) {
                                                        foreach ($secondLevel as $secondLevelRef) {
                                                            $accum2 = \App\VoucherSales::where('username', $secondLevelRef->username)->sum('sales_amount') * 0.8;
                                                            $sum += $accum2;
                                                        }

                                                    }


                                                    if (isset($thirdLevel) && sizeof($thirdLevel) > 0) {
                                                        foreach ($thirdLevel as $thirdLevelRef) {
                                                            $accum3 = \App\VoucherSales::where('username', $thirdLevelRef->username)->sum('sales_amount') * 0.6;
                                                            $sum += $accum3;
                                                        }
                                                    }

                                                    if (isset($fourthLevel) && sizeof($fourthLevel) > 0) {
                                                        foreach ($fourthLevel as $fourthLevelRef) {
                                                            $accum4 = \App\VoucherSales::where('username', $fourthLevelRef->username)->sum('sales_amount') * 0.4;
                                                            $sum += $accum4;
                                                        }
                                                    }

                                                    $vilcaz = $sum / 50;
                                                    echo number_format((float)$vilcaz, 2);
                                                }
                                                ?>
                                                <img src="{{asset('assets/img/logo-20.png')}}" alt="" class="img-responsive" style="display: inline;">


                                            </span>

                                                </span>

                                            </span>
                                            </h4>
                                            <a href="{{route('myReferrals')}}"
                                               class="btn royal darken-2">See More
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="panel cardbox bg-primary">
                                <div class="panel-body card-item panel-refresh">
                                    <a class="refresh" href="#">
                                        <span class="fa fa-refresh"></span>
                                    </a>
                                    <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>

                                    {{--<div class="timer" data-to="0" data-speed="1500">0</div>--}}
                                    <div class="cardbox-icon">
                                        <i class="material-icons">account_balance_wallet</i>
                                    </div>

                                    <div class="card-details">
                                        <h4>Transfers</h4>
                                        <button class="btn royal darken-2 btn-demo js-tingle-modal-3">Send Voucher
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>


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
                                           class="col-sm-2 col-xs-12 control-label"
                                           style="font-size: 14px;">Quantity </label>
                                    <div class="col-sm-8 col-xs-9">
                                        <input class="form-control" min="1"  step="1" value="10"
                                               id="voucher_quantity" placeholder="quantity"
                                               type="number" formnovalidate required
                                               style="background: #fff; color: #000;">
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
        <div class="overlay"
             style="position: absolute; top: 0px; left: 0px; z-index: 1000; background: #000; height: 100%; width: 100%; opacity:0.7;">
            <div class="container">
                <div class="well text-center " style="position: absolute; top:25%; left: 20%;">
                    <Strong class="">
                        <p class="text-center alert alert-info">
                            Your Wallet has been created successfully but you have not verified your Email Address;
                        </p>
                        <p class="text-danger">
                            An email has been sent you with an activation link; verify by clicking the "Verified
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



