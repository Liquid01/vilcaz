@extends('agent.layouts.admin');

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
                    <small> Credited members</small>
                    <ul class="link hidden-xs">
                        <li><a href="{{route('agentHome')}}"><i class="fa fa-home"></i>Dashboard</a></li>
                        <li><a href="{{route('agentAllMembers')}}">my members</a></li>
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
                                <h2>Credited Members</h2>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="data" class="table table-bordered table-striped table-hover">
                                        <thead>

                                        <tr>
                                            <th>NAME</th>
                                            <th>Email</th>
                                            <th>Voucher Quantity</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Payment</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($members as $member)
                                            <tr>
                                                <td>{{$member->name}}</td>
                                                <td>{{$member->email}}</td>
                                                <td>{{$member->voucher_quantity}}</td>
                                                <td>{{$member->voucher_unit_price}}</td>

                                                <td>{{number_format($member->sales_amount, 2)}}</td>
                                                <td>{{$member->created_at}}</td>
                                                <td>
                                                    @if($member->paid == 1)
                                                        {{"PAID"}}
                                                    @else
                                                        <a href="{{route('agentVoucherPayment')}}" class="btn btn-default"
                                                           data-amount="{{number_format($member->sales_amount, 2)}}">Pay</a>
                                                    @endif
                                                </td>
                                                {{--<td><a href="{{route('adminMemberDetails', $user->username)}}" class="btn btn-warning"><i class="fa fa-info"></i> Details</a></td>--}}
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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