@extends('layouts.app')

@section('content')
    {{--<div class="modal myModal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
        {{--<div class="modal-dialog animated zoomIn animated-3x" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header shadow-2dp no-pb">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--<span aria-hidden="true">--}}
                  {{--<i class="zmdi zmdi-close"></i>--}}
                {{--</span>--}}
                    {{--</button>--}}
                    {{--<div class="modal-title text-center">--}}
                        {{--<h3 class="no-m ms-site-title">--}}
                            {{--NOTICE--}}
                        {{--</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="tab-content">--}}
                        {{--<div class="card card-primary animated zoomInUp animation-delay-5">--}}
                            {{--<div class="card-block">--}}
                                {{--<p>--}}
                                    {{--<strong>Dear user,</strong> We are sorry that the website was offline for some days due to the massive upgrade--}}
                                    {{--we did to give you a better service. We are back fully online and you can buy as much vouchers as you can now before the ivo is over. Thanks--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<header class="ms-hero ms-hero-black mb-6" style="">--}}


        {{--<div class="intro-full ms-hero-img-room ms-hero-bg-dark color-white ms-bg-fixed">--}}
            {{--<div class="intro-full-content index-1">--}}
                {{--<div class="container">--}}
                    {{--<div class="text-center mb-4">--}}
                        {{--<center>--}}

                            {{--<a class="hidden-xs mt-3" href="{{url('/')}}" style="margin-top: 30px;">--}}
                                {{--<img src="{{asset('assets/img/logo-500.png')}}" class="img img-responsive"--}}
                                     {{--style="max-width: 300px;" alt="">--}}
                            {{--</a>--}}

                            {{--<a class="visible-xs" href="{{url('/')}}" style="margin-top: 30px;">--}}
                                {{--<img src="{{asset('assets/img/logo-500.png')}}" class="img img-responsive"--}}
                                     {{--style="max-width: 150px;" alt="">--}}
                            {{--</a>--}}
                        {{--</center>--}}


                        {{--<div class="clearfix"></div>--}}

                        {{--<br> <br>--}}

                        {{--<div class="">--}}
                            {{--<h1 class="color-primary no-mt mb-4 animated zoomInDown animation-delay-7">--}}
                                {{--<span class="color-primary">VilCaz Voucher</span>--}}
                            {{--</h1>--}}

                            {{--<ul class="list-unstyled list-hero">--}}
                                {{--<li>--}}
                                    {{--<span class="color-warning animated fadeInRightTiny animation-delay-7">...the digital voucher of the millennium</span>--}}
                                {{--</li>--}}
                            {{--</ul>--}}

                        {{--</div>--}}
                        {{--<div class="text-center mb-2">--}}
                            {{--<a id="go-intro-full-next" href="{{route('register')}}"--}}
                               {{--class="btn btn-xlg btn-raised btn-white color-primary animated zoomInUp animation-delay-12">--}}
                                {{--<i class="fa fa-rocket"></i> Let's go!</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</header>--}}

    <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
        <i class="zmdi zmdi-account"></i>
        <div class="ripple-container"></div></a>

    <header class="ms-hero ms-hero-black mb-6">
        <div id="carousel-header" class="carousel carousel-header slide" data-ride="carousel" data-interval="5000" style="margin-top:20px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-header" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-header" data-slide-to="1"></li>
                <li data-target="#carousel-header" data-slide-to="2"></li>
                <li data-target="#carousel-header" data-slide-to="3"></li>
                <li data-target="#carousel-header" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-7">
                                <div class="carousel-caption">
                                    <h1 class="color-primary no-mt mb-2 animated zoomInDown animation-delay-7">Vilcaz Voucher</h1>
                                    <ul class="list-unstyled list-hero">
                                        <li>
                                            <i class="animated flipInX animation-delay-6 color-warning zmdi zmdi-money-box"></i>
                                            <span class="color-warning animated fadeInRightTiny animation-delay-7">The digital voucher of the millennium that turns users into instant millionaires!</span>
                                        </li>
                                        <li>
                                            <i class="animated flipInX animation-delay-8 color-info zmdi zmdi-globe"></i>
                                            <span class="color-info animated fadeInRightTiny animation-delay-9">The world goes fully digital in a few years, join us now and become a millennium user!</span>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="{{route('register')}}" class="btn btn-primary btn-xlg btn-raised animated flipInX animation-delay-16">
                                            <i class="zmdi zmdi-account-add"></i> Join Now!</a>
                                        <a href="{{url('/compensation')}}" class="btn btn-warning btn-xlg btn-raised animated flipInX animation-delay-18">
                                            <i class="zmdi zmdi-eye"></i> checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5">
                                <img src="{{asset('assets/img/logo-500.png')}}" alt="..." class="img-responsive mt-6 center-block text-center animated zoomInDown animation-delay-5" style="max-width:300px;"> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-7">
                                <div class="carousel-caption">
                                    <h1 class="color-primary no-mt mb-2 animated zoomInDown animation-delay-7">SHOPPING REDEFINED</h1>
                                    <ul class="list-unstyled list-hero">

                                        <li>
                                            <i class="animated flipInX animation-delay-10 color-success zmdi zmdi-shopping-basket"></i>
                                            <span class="color-danger animated fadeInRightTiny animation-delay-11">
                                                <h3>Shop With 100% VilCaz!</h3>
                                            </span>
                                        </li>

                                        <li>
                                            <i class="animated flipInX animation-delay-10 color-success zmdi zmdi-delete"></i>
                                            <span class="color-success animated fadeInRightTiny animation-delay-11">Nothing is more expensive than a missed opportunity and nothing worse than missing an opportunity that could have changed your life. </span>
                                        </li>
                                        <li>
                                            <i class="animated flipInX animation-delay-8 color-danger zmdi zmdi-cocktail"></i>
                                            <span class="color-danger animated fadeInRightTiny animation-delay-9">Open your mind to the possibilities that surround you, purchase VilCaz Voucher now!</span>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="{{route('register')}}" class="btn btn-primary btn-xlg btn-raised animated flipInX animation-delay-16">
                                            <i class="zmdi zmdi-account-add"></i>Start Now </a>
                                        <a href="{{url('/compensation')}}" class="btn btn-warning btn-xlg btn-raised animated flipInX animation-delay-18">
                                            <i class="zmdi zmdi-eye"></i> See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5">
                                <img src="{{asset('assets/img/smiles.jpg')}}" alt="..." class="img-responsive mt-6 center-block text-center animated zoomInRight animation-delay-5"> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                            <div class="well well-lg text-center color-primary">
                                <h1>
                                    IVO TOKEN SALE; STAGE 3 <i class=""></i><br>
                                    <small>(July 1st - July 31st, 2018)</small>
                                </h1>
                                {{--<h2 class="text-center">--}}
                                    {{--@ <i>&#x20a6;30 per voucher</i>--}}
                                {{--</h2>--}}
                            </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card card-primary">
                                    <div class="card-block text-center">
                                        <h4 class="color-primary uppercase">Current Voucher Value</h4>
                                        <hr>
                                        <p class="color-dark">1 voucher = &#x20a6;{{config('global.voucher_value')}}</p>
                                        <a href="{{route('login')}}" class="btn btn-raised btn-default"><i
                                                    class="fa fa-money"></i> Buy Voucher</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card card-royal">
                                    <div class="card-block text-center">
                                        <h4 class="color-primary uppercase">Estimated value in 3 months</h4>
                                        <hr>
                                        <p class="color-dark">1 voucher = &#x20a6;{{config('global.voucher_value') + config('global.voucher_value_in_3_months')}}</p>
                                        <a href="#" class="btn btn-raised btn-default"  data-toggle="modal" data-target="#ms-account-modal"><i
                                                    class="fa fa-calculator"></i> Check the Calculator</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card card-warning">
                                    <div class="card-block text-center">

                                        <h4 class="color-primary uppercase">See Compensation plan</h4>
                                        <hr>
                                        <p class="color-dark">Refer and earn more</p>
                                        <a href="{{url('/compensation')}}" class="btn btn-raised btn-default"><i
                                                    class="fa fa-eye"></i> Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="mt-6 color-dark">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <?php
                                    $registeredMembers = \App\Member::all()->count();
                                    $vouchersSold = \App\VoucherSales::all()->sum('voucher_quantity');
                                    $userAdded = 0;
                                    $voucherAdded = 0;
                                ?>
                                <div class="card card-warning-inverse card-block text-center wow zoomInUp animation-delay-3">
                                    <h2 class="counter">{{ number_format((float) ($userAdded + 2417+$registeredMembers)) }}</h2>
                                    <i class="fa fa-4x fa-group"></i>
                                    <p class="mt-2 no-mb lead small-caps">REGISTERED USERS</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card card-royal-inverse card-block text-center wow zoomInUp animation-delay-2">
                                    <h2 class="counter">{{ number_format((float) ($voucherAdded +1470550+$vouchersSold)) }}</h2>
                                    <i class="fa fa-4x fa-money"></i>
                                    <p class="mt-2 no-mb lead small-caps">VOUCHERS SOLD</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card card-success-inverse card-block text-center wow zoomInUp animation-delay-5">
                                    <h2 class="counter">282</h2>
                                    <i class="fa fa-4x fa-briefcase"></i>
                                    <p class="mt-2 no-mb lead small-caps">ACCREDITED COMPANIES</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{route('register')}}" class="btn btn-primary btn-xlg btn-raised animated flipInX animation-delay-16">
                                <i class="zmdi zmdi-account-add"></i> Join Now!</a>
                            <a href="{{url('/compensation')}}" class="btn btn-warning btn-xlg btn-raised animated flipInX animation-delay-18">
                                <i class="zmdi zmdi-eye"></i> checkout</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-7">
                                <div class="carousel-caption">
                                    <img src="{{asset('assets/img/maps.png')}}" alt="" class="img-responsive mt-6 center-block animated zoomInDown animation-delay-7">
                                    <div class="space-mt-2"></div>
                                    <h1 class="color-primary no-mt mb-2 animated zoomInDown animation-delay-7">Used All over West Africa</h1>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5">
                                <img src="{{asset('assets/img/voucher22.png')}}" style="max-width:380px;" alt="..." class="img-responsive mt-6 center-block text-center animated zoomInRight animation-delay-5"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a href="#carousel-header" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary left carousel-control" role="button" data-slide="prev">
                <i class="zmdi zmdi-chevron-left"></i>
            </a>
            <a href="#carousel-header" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary right carousel-control" role="button" data-slide="next">
                <i class="zmdi zmdi-chevron-right"></i>
            </a>
        </div>
    </header>
    <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
            <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
    </div>
    <div class="bg-light index-1 intro-full-next pt-6">
        <div class="container" id="intro-next">
            <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">What is <span
                        class="color-primary">VilCaz Voucher</span>? </h2>
            <div class="col-sm-6">
                <p class="lead text-justify aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4">
                    <span class="color-primary">VilCaz Voucher</span> is a digital voucher that is programmed to
                    appreciate
                    in value every month and designed to be used in exchange for goods and
                    services in West Africa countries.
                    <br><br>
                    It is like a currency that can be
                    used instead
                    of the Naira or any other denomination but it is a virtual voucher which means it can only be
                    digitally used as it is not a physical
                    voucher. It is designed with some features of crypto currencies
                    and existing vouchers but it does not specifically lean toward either as it is a voucher of its own
                    kind. 

                </p>
            </div>

            <div class="col-sm-6">
                <p class="lead text-justify aco wow fadeInUp animation-delay-7 mw-800 center-block mb-4">
                    <span class="color-primary">VilCaz Voucher</span> is specifically designed for the benefit of our
                    day to day services and purchases,
                    daily needs like provisions, toiletries,
                    foodstuffs, cosmetics, fashion accessories, domestic travel tickets, etc will be easily purchased at
                    any outlet that has the logo of "<span class="color-primary">VilCaz Voucher</span> Accepted Here".
                    Outlets such as convenient stores, pharmacies, restaurants, supermarkets, cinemas, hotels, Fuel
                    stations, electronic stores, android stores, hair salons,
                    barbers' shops, boutiques and cosmetics stores and many other services like air flight tickets, road
                    fare tickets, laundry and dry cleaning services in all
                    over West Africa countries will be accepting <span class="color-primary">VilCaz Voucher</span> at
                    the current value at the time of
                    use. 
                </p>
            </div>


            <h4 class="text-center uppercase">
               <strong class="text-danger">THE VOUCHER IS AN INVESTMENT THAT INCREASES IN VALUE BETWEEN 5% - 10% EVERY MONTH BASED ON THE MATHEMATICAL ALGORITHM IT HAS BEEN PROGRAMMED WITH! </strong>
            </h4>
            {{--<div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4">--}}
            {{--<div class="text-center card-block">--}}
            {{--<span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">--}}
            {{--<i class="zmdi zmdi-cloud-outline"></i>--}}
            {{--</span>--}}
            {{--<h4 class="color-info">A feature title</h4>--}}
            {{--<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>--}}
            {{--<a href="javascript:void(0)" class="btn btn-info btn-raised">Action here</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8">--}}
            {{--<div class="text-center card-block">--}}
            {{--<span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">--}}
            {{--<i class="zmdi zmdi-desktop-mac"></i>--}}
            {{--</span>--}}
            {{--<h4 class="color-warning">A feature title</h4>--}}
            {{--<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>--}}
            {{--<a href="javascript:void(0)" class="btn btn-warning btn-raised">Action here</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-10">--}}
            {{--<div class="text-center card-block">--}}
            {{--<span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">--}}
            {{--<i class="zmdi zmdi-download"></i>--}}
            {{--</span>--}}
            {{--<h4 class="color-success">A feature title</h4>--}}
            {{--<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>--}}
            {{--<a href="javascript:void(0)" class="btn btn-success btn-raised">Action here</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-6">--}}
            {{--<div class="text-center card-block">--}}
            {{--<span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">--}}
            {{--<i class="zmdi zmdi-flower-alt"></i>--}}
            {{--</span>--}}
            {{--<h4 class="color-danger">A feature title</h4>--}}
            {{--<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>--}}
            {{--<a href="javascript:void(0)" class="btn btn-danger btn-raised">Action here</a>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
        <!-- container -->
        <section id="purposes" class="mt-6">
            <div class="wrap ms-hero-img-meeting ms-hero-bg-info color-white ms-bg-fixed">
                <div class="container">
                    <div class="text-center mb-4">
                        <h1 class="wow zoomInDown">Purposes and Benefits</h1>
                        <h3 class="wow zoomInDown">Why
                            <span class="text-normal"> <span class="color-primary">VilCaz Voucher</span></span>?
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="wow fadeInUp animation-delay-3">
                                Most gift vouchers and gifts cards are usually designed for use by one store for only
                                its customers to be used for purchases
                                in only its stores' outlets. But <span class="color-primary">VilCaz Voucher</span> is
                                designed for use in all outlets of
                                different stores and organizations offering
                                consumption services. They are usually also designed to be used only in western
                                countries like Europe, US and Asia with the exclusion
                                of major parts of Africa which incidentally is always a major stakeholder
                                in innovations like this. Hence the need to create a shopping voucher that could be
                                easily used in the West Africa countries.
                            </p>
                            <p class="wow fadeInUp animation-delay-4">
                                It will be easier to transact business within West African Countries in both online and
                                offline purchases and sales.
                                Also <span class="color-primary">VilCaz Voucher</span> will be appreciating in value
                                daily till the day of use.
                                It is designed to be used to pay for goods and services at the future value which will
                                be more than the value purchased.
                            </p>

                            <p>
                                Bulk purchases of <span class="color-primary">VilCaz Voucher</span> is recommended
                                because after the Initial Voucher
                                Offering (IVO), its value increases
                                daily based on the mathematical algorithm it was programmed with.
                                The amount it was bought will not be the same amount it will be used to exchange for
                                goods and services.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <h3>Why we are here</h3>
                            <div class="panel-group ms-collapse color-dark" id="accordion2" role="tablist"
                                 aria-multiselectable="true">
                                <div class="panel panel-info wow fadeInUp animation-delay-2">
                                    <div class="panel-heading" role="tab" id="headingOne2">
                                        <h4 class="panel-title">
                                            <a class="withripple" role="button" data-toggle="collapse"
                                               data-parent="#accordion2" href="#collapseOne2" aria-expanded="true"
                                               aria-controls="collapseOne2">
                                                <i class="fa fa-globe"></i> Mission</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingOne2">
                                        <div class="panel-body in">
                                            <p>
                                                To provide the users a stress-free and value added means of exchange!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info wow fadeInUp animation-delay-5">
                                    <div class="panel-heading" role="tab" id="headingTwo2">
                                        <h4 class="panel-title">
                                            <a class="collapsed withripple" role="button" data-toggle="collapse"
                                               data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false"
                                               aria-controls="collapseTwo2">
                                                <i class="fa fa-lightbulb-o"></i> Vision </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingTwo2">
                                        <div class="panel-body">
                                            <p>

                                                To create a foremost and most efficient means of exchange for the millennium users.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info wow fadeInUp animation-delay-7">
                                    <div class="panel-heading" role="tab" id="headingThree3">
                                        <h4 class="panel-title">
                                            <a class="collapsed withripple" role="button" data-toggle="collapse"
                                               data-parent="#accordion2" href="#collapseThree2" aria-expanded="false"
                                               aria-controls="collapseThree2">
                                                <i class="fa fa-lightbulb-o"></i> Philosophy</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree2">
                                        <div class="panel-body">
                                            <p>
                                                Everyone deserves the right to enjoy the right value for their shopping through convenience. 
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 color-dark">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card card-warning-inverse card-block text-center wow zoomInUp animation-delay-3">
                                    <h2 class="counter">{{ number_format((float) ($userAdded + 2417+$registeredMembers)) }}</h2>
                                    <i class="fa fa-4x fa-group"></i>
                                    <p class="mt-2 no-mb lead small-caps">REGISTERED USERS</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card card-royal-inverse card-block text-center wow zoomInUp animation-delay-2">
                                    <h2 class="counter">{{ number_format((float) ($voucherAdded+1470550+$vouchersSold)) }}</h2>
                                    <i class="fa fa-4x fa-money"></i>
                                    <p class="mt-2 no-mb lead small-caps">VOUCHERS SOLD</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card card-success-inverse card-block text-center wow zoomInUp animation-delay-5">
                                    <h2 class="counter">282</h2>
                                    <i class="fa fa-4x fa-briefcase"></i>
                                    <p class="mt-2 no-mb lead small-caps">ACCREDITED COMPANIES</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center color-white mw-800 center-block mt-4">

                            <a href="{{url('/register')}}"
                               class="btn btn-raised btn-xlg btn-white color-info wow flipInX animation-delay-5">
                                <i class="fa fa-space-shuttle"></i> START NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="row">
                <div class="wrap ms-hero-img-room ms-hero-bg-primary color-white ms-bg-fixed">
                    <div class="container">
                        <div class="jumbotron">
                            <div class="well well-lg text-center color-primary">
                                <h1>
                                    IVO TOKEN SALE; STAGE 3 <i class=""></i><br>
                                    <small>(July 1st - July 31st, 2018)</small>
                                </h1>
                                <h2 class="text-center">
                                    @ <i>&#x20a6;{{config('global.voucher_value')}} per voucher</i>
                                </h2>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="col-sm-4">
                            <div class="card card-primary">
                                <div class="card-block text-center">
                                    <h4 class="color-primary uppercase">Current Voucher Value</h4>
                                    <hr>
                                    <p class="color-dark">1 voucher = &#x20a6;{{config('global.voucher_value')}}</p>
                                    <a href="{{route('login')}}" class="btn btn-raised btn-default"><i
                                                class="fa fa-money"></i> Buy Voucher</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-royal">
                                <div class="card-block text-center">
                                    <h4 class="color-primary uppercase">Estimated value in 3 months</h4>
                                    <hr>
                                    <p class="color-dark">1 voucher = &#x20a6;{{config('global.voucher_value') + config('global.voucher_value_in_3_months')}}</p>
                                    <a href="#" class="btn btn-raised btn-default"  data-toggle="modal" data-target="#ms-account-modal"><i
                                                class="fa fa-calculator"></i> Check the Calculator</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-warning">
                                <div class="card-block text-center">

                                    <h4 class="color-primary uppercase">See Compensation plan</h4>
                                    <hr>
                                    <p class="color-dark">Refer and earn more</p>
                                    <a href="{{url('/compensation')}}" class="btn btn-raised btn-default"><i
                                                class="fa fa-eye"></i> Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <section id="pricing">
            <div class="wrap ms-hero-img-airplane ms-hero-bg-royal ms-bg-fixed">
                <div class="container">
                    <div class="text-center mb-4">
                        <h2 class="uppercase color-white wow fadeInDown animation-delay-2">
                            Eligible Countries & Acceptable Currency
                        </h2>
                        <p class="lead uppercase color-light wow fadeInDown animation-delay-2">Our vouchers can be used
                            here</p>
                    </div>
                    <div class="row">
                        <p class="lead text-center aco  fadeInUp animation-delay-7 mw-800 center-block mb-4"
                           style="color: #ffffff!important;">
                            Countries that are eligible to participate in the IVO token sale of <span
                                    class="color-primary">VilCaz Voucher</span> are the West African countries.
                            This is because we are able to make arrangements with companies willing to accept
                            this voucher in exchange for their goods and services only in West Africa, other African
                            countries will be factored into using the vouchers as time goes on.

                            These countries are 18 in number and they are: <strong> BENIN,  BURKINA FASO, CAPE VERDE,
                                GAMBIA, GHANA, GUINEA, GUINEA-BISSAU,
                                IVORY COAST, LIBERIA, MALI, MAURITANIA, NIGER, NIGERIA, SAINT HELENA, SENEGAL, SIERRA
                                LEONE, SÃO TOMÉ & PRINCIPE, TOGO.</strong>

                            The acceptable currency is Naira. So the exchange rate of the Nigerian Naira will be used
                            for payment by other countries. 
                        </p>
                    </div>
                </div>
                <!--container -->
            </div>
            <div class="btn-back-top">
                <a href="#" data-scroll id="back-top"
                   class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
                    <i class="zmdi zmdi-long-arrow-up"></i>
                </a>
            </div>
        </section>
    </div>

    </div>
    <!-- sb-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-momentum-scrolling sb-style-overlay">
        <header class="ms-slidebar-header">
            <div class="ms-slidebar-login">
                <a href="{{url('/login')}}" class="withripple">
                    <i class="zmdi zmdi-account"></i> Login</a>
                <a href="{{url('register')}}" class="withripple">
                    <i class="zmdi zmdi-account-add"></i> Register</a>
            </div>
            <div class="ms-slidebar-title">
                <form class="search-form">
                    <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q"/>
                    <label for="search-box-slidebar">
                        <i class="zmdi zmdi-search"></i>
                    </label>
                </form>
                <div class="ms-slidebar-t">

                </div>
            </div>
        </header>

        {{--sidebaer--}}
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
            <li>
                <a data-scroll class="link" href="{{url('/')}}">
                    <i class="zmdi zmdi-home"></i> Home</a>
            </li>
            <li>
                <a data-scroll class="link" href="javascript:void(0);">
                    <i class="fa fa-chevron-circle-right"></i> About</a>
            </li>
            <li>
                <a data-scroll class="link" href="{{url('/whitepaper')}}">
                    <i class="fa fa-chevron-circle-right"></i> Whitepaper</a>
            </li>
            <li>
                <a data-scroll class="link" href="javascript:void(0);">
                    <i class="zmdi zmdi-money-box"></i> Referral Bonus</a>
            </li>
            <li>
                <a data-scroll class="link" href="javascript:void(0);">
                    <i class="zmdi zmdi-email"></i> Contact</a>
            </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
            <h4 class="ms-slidebar-block-title">Social Links</h4>
            <div class="ms-slidebar-social">
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                    <span class="badge badge-pink">12</span>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                    <span class="badge badge-pink">4</span>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-youtube">
                    <i class="zmdi zmdi-youtube"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm btn-instagram">
                    <i class="zmdi zmdi-instagram"></i>
                </a>
            </div>
        </div>
    </div>

@endsection


