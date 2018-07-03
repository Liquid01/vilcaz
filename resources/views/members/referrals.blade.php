@extends('admin.layouts.app');

@section('content')
    <!-- Page content -->
    <div id="page-content-wrapper">
        <div class="page-content">
            <!-- Content Header (Page header) -->
            <section class="content-header z-depth-1">
                <div class="header-icon">
                    <i class="fa fa-group"></i>
                </div>
                <div class="header-title">
                    <h1> Referrals</h1>
                    <small> Downlines</small>
                    <ul class="link hidden-xs">
                        <li><a href="{{route('adminHome')}}"><i class="fa fa-home"></i>Dashboard</a></li>
                        <li><a href="{{route('myReferrals')}}">referrals</a></li>
                    </ul>
                </div>
            </section>
            <!-- page section -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Data tables -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-group fa-lg"></i>
                                <h2>Direct (First Gen.) Referrals</h2>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="data" class="table table-bordered table-striped table-hover">
                                        <thead>

                                        <tr>
                                            <th>NAME</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>purchased</th>
                                            <th>Bonus</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $c = 0; $sum = 0; ?>
                                        @foreach($referrals as $referral)
                                            <tr>
                                                <td>{{$referral->name}}</td>
                                                <td>{{$referral->username}}</td>
                                                <td>{{$referral->email}}</td>
                                                <td>
                                                    {{--<button class="btn btn-warning"><i class="fa fa-info-circle"></i>--}}
                                                    {{--Details--}}
                                                    {{--</button>--}}
                                                    {{\App\VoucherSales::where('username', $referral->username)->sum('sales_amount')}}
                                                </td>
                                                <td>
                                                    {{--<button class="btn btn-warning"><i class="fa fa-info-circle"></i>--}}
                                                    {{--Details--}}
                                                    {{--</button>--}}
                                                    {{$accum = \App\VoucherSales::where('username', $referral->username)->sum('sales_amount')*0.10}}

                                                </td>
                                            </tr>
                                            <?php    $sum += $accum; ?>



                                        @endforeach

                                        </tbody>

                                    </table>

                                    <div class="alert alert-primary text-center"
                                         style="font-weight: bolder; color: green; font-size: 20px;">
                                        Direct Referral Bonus:
                                        <?php
                                        $vilcaz = $sum / 50;

                                        echo number_format((float)$vilcaz, 2)

                                        ?>
                                        <img src="{{asset('assets/img/favicon.gif')}}" alt="" class="img-responsive" style="display: inline;">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- ./Data table -->

                    <!-- ./Data tables -->
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>

            <div class="container-fluid">
                <div class="row">
                    <!-- Data tables -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-group fa-lg"></i>
                                <h2>Second Level Referrals (Indirect)</h2>
                            </div>
                            <div class="card-content">

                                @if(isset($secondLevel) && sizeof($secondLevel) > 0)

                                    <div class="table-responsive">
                                        <table id="data2" class="table table-bordered table-striped table-hover">
                                            <thead>

                                            <tr>
                                                <th>NAME</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>purchased</th>
                                                <th>Bonus</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $c2 = 0; $sum2 = 0; ?>
                                            @foreach($secondLevel as $secondLevelRef)
                                                <tr>
                                                    <td>{{$secondLevelRef->name}}</td>
                                                    <td>{{$secondLevelRef->username}}</td>
                                                    <td>{{$secondLevelRef->email}}</td>
                                                    <td>
                                                        {{--<button class="btn btn-warning"><i class="fa fa-info-circle"></i>--}}
                                                        {{--Details--}}
                                                        {{--</button>--}}
                                                        {{\App\VoucherSales::where('username', $secondLevelRef->username)->sum('sales_amount')}}
                                                    </td>
                                                    <td>
                                                        {{--<button class="btn btn-warning"><i class="fa fa-info-circle"></i>--}}
                                                        {{--Details--}}
                                                        {{--</button>--}}
                                                        {{$accum2 =  \App\VoucherSales::where('username', $secondLevelRef->username)->sum('sales_amount')*0.8}}
                                                    </td>
                                                </tr>

                                                <?php    $sum2 += $accum2; ?>
                                            @endforeach


                                            </tbody>
                                        </table>
                                        <div class="alert alert-primary text-center"
                                             style="font-weight: bolder; color: green; font-size: 20px;">
                                            Second level Referral Bonus:
                                            <?php
                                            $vilcaz2 = $sum2 / 50;

                                            echo number_format((float)$vilcaz2, 2)

                                            ?>
                                            <img src="{{asset('assets/img/favicon.gif')}}" alt="" class="img-responsive" style="display: inline;">
                                        </div>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ./Data table -->

                    <!-- ./Data tables -->
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>

            <div class="container-fluid">
                <div class="row">
                    <!-- Data tables -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-group fa-lg"></i>
                                <h2>Third Level Referrals (Indirect)</h2>
                            </div>
                            <div class="card-content">

                                @if(isset($thirdLevel) && sizeof($thirdLevel) > 0)

                                    <div class="table-responsive">
                                        <table id="data3" class="table table-bordered table-striped table-hover">
                                            <thead>

                                            <tr>
                                                <th>NAME</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>purchased</th>
                                                <th>Bonus</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $c3 = 0; $sum3 = 0; ?>
                                            @foreach($thirdLevel as $thirdLevelRef)
                                                <tr>
                                                    <td>{{$thirdLevelRef->name}}</td>
                                                    <td>{{$thirdLevelRef->username}}</td>
                                                    <td>{{$thirdLevelRef->email}}</td>
                                                    <td>
                                                        {{--<button class="btn btn-warning"><i class="fa fa-info-circle"></i>--}}
                                                        {{--Details--}}
                                                        {{--</button>--}}
                                                        {{\App\VoucherSales::where('username', $thirdLevelRef->username)->sum('sales_amount')}}
                                                    </td>
                                                    <td>
                                                        {{--<button class="btn btn-warning"><i class="fa fa-info-circle"></i>--}}
                                                        {{--Details--}}
                                                        {{--</button>--}}
                                                        {{$accum3 = \App\VoucherSales::where('username', $thirdLevelRef->username)->sum('sales_amount')*0.15}}
                                                    </td>
                                                </tr>
                                                <?php    $sum3 += $accum3; ?>
                                            @endforeach


                                            </tbody>
                                        </table>

                                        <div class="alert alert-primary text-center"
                                             style="font-weight: bolder; color: green; font-size: 20px;">
                                            Second level Referral Bonus:
                                            <?php
                                            $vilcaz3 = $sum3/50;

                                            echo number_format((float)$vilcaz3, 2)

                                            ?>
                                            <img src="{{asset('assets/img/favicon.gif')}}" alt="" class="img-responsive" style="display: inline;">
                                        </div>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ./Data table -->

                    <!-- ./Data tables -->
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>

            <div class="container-fluid">
                <div class="row">
                    <!-- Data tables -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-group fa-lg"></i>
                                <h2>Fourth Level Referrals (Indirect)</h2>
                            </div>
                            <div class="card-content">

                                @if(isset($fourthLevel) && sizeof($fourthLevel) > 0)

                                    <div class="table-responsive">
                                        <table id="data4" class="table table-bordered table-striped table-hover">
                                            <thead>

                                            <tr>
                                                <th>NAME</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>purchased</th>
                                                <th>Bonus</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $c4 = 0; $sum4 = 0; ?>
                                            @foreach($fourthLevel as $fourthLevelRef)
                                                <tr>
                                                    <td>{{$fourthLevelRef->name}}</td>
                                                    <td>{{$fourthLevelRef->username}}</td>
                                                    <td>{{$fourthLevelRef->email}}</td>
                                                    <td>
                                                        {{--<button class="btn btn-warning"><i class="fa fa-info-circle"></i>--}}
                                                        {{--Details--}}
                                                        {{--</button>--}}
                                                        {{\App\VoucherSales::where('username', $fourthLevelRef->username)->sum('sales_amount')}}
                                                    </td>
                                                    <td>
                                                        {{--<button class="btn btn-warning"><i class="fa fa-info-circle"></i>--}}
                                                        {{--Details--}}
                                                        {{--</button>--}}
                                                        {{$accum4 = \App\VoucherSales::where('username', $fourthLevelRef->username)->sum('sales_amount')*0.15}}
                                                    </td>
                                                </tr>

                                                <?php    $sum4 += $accum4; ?>
                                            @endforeach


                                            </tbody>
                                        </table>

                                        <div class="alert alert-primary text-center"
                                             style="font-weight: bolder; color: green; font-size: 20px;">
                                            Second level Referral Bonus:

                                            <?php
                                            $vilcaz4 = $sum4/50;

                                            echo number_format((float)$vilcaz4, 2)

                                            ?>

                                            <img src="{{asset('assets/img/favicon.gif')}}" alt="" class="img-responsive" style="display: inline;">
                                        </div>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ./Data table -->

                    <!-- ./Data tables -->
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>
            <!-- ./page-content -->
        </div>
        <!-- ./page-content-wrapper -->
    </div>
    <!-- ./page-wrapper -->


@endsection