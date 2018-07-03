@extends('admin.layouts.admin');

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
                    <h1> Member</h1>
                    <small> Registered members</small>
                    <ul class="link hidden-xs">
                        <li><a href="{{route('adminHome')}}"><i class="fa fa-home"></i>Dashboard</a></li>
                        <li><a href="{{route('adminAllMembers')}}">members</a></li>
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
                                        <i class="fa fa-address-card-o fa-lg"></i>
                                        <h2>Details</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="cards hovercards">
                                            <div class="cardheader">
                                                <img src="{{asset('assets/dist/img/bac.jpg')}}" alt="User Image"
                                                     width="335" height="135">
                                            </div>
                                            <div class="avatar">
                                                <img src="{{asset('assets/dist/img/avatar.png')}}" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <a target="_blank">{{$user->name}}</a>
                                                </div>
                                                <div class="desc bold">Referals: {{$referrals->count()}}</div>
                                                <div class="desc bold">Vouchers: {{$vouchers->sum('voucher_quantity')}}</div>
                                                {{--<div class="desc">Bdtask</div>--}}
                                            </div>
                                            {{--<div class="bottom">--}}
                                            {{--<a class="btn btn-twitter btn-sm" href="#">--}}
                                            {{--<i class="fa fa-twitter"></i>--}}
                                            {{--</a>--}}
                                            {{--<a class="btn btn-danger btn-sm" rel="publisher" href="#">--}}
                                            {{--<i class="fa fa-google-plus"></i>--}}
                                            {{--</a>--}}
                                            {{--<a class="btn btn-primary btn-sm" rel="publisher" href="#">--}}
                                            {{--<i class="fa fa-facebook"></i>--}}
                                            {{--</a>--}}
                                            {{--<a class="btn btn-warning btn-sm" rel="publisher" href="#">--}}
                                            {{--<i class="fa fa-behance"></i>--}}
                                            {{--</a>--}}
                                            {{--</div>--}}
                                            <hr><br>
                                            <a href="{{route('adminAllMembers')}}" class="btn btn-warning">Back</a>
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
            <!-- ./page-content -->
        </div>
        <!-- ./page-content-wrapper -->
    </div>
    <!-- ./page-wrapper -->
@endsection