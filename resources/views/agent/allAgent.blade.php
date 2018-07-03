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
                    <h1> Agents</h1>
                    <small> Sales Agents</small>
                    <ul class="link hidden-xs">
                        <li><a href="{{route('adminHome')}}"><i class="fa fa-home"></i>Dashboard</a></li>
                        <li><a href="{{route('allAgents')}}">aents</a></li>
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
                                <h2>Agents</h2>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="data" class="table table-bordered table-striped table-hover">
                                        <thead>

                                        <tr>
                                            <th>NAME</th>
                                            <th>Email</th>
                                            <th>Sold</th>
                                            <th>Amount</th>
                                            <th>Paid</th>
                                            <th>Balance</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($agents as $agent)
                                            <tr>
                                                <td>{{$agent->name}}</td>
                                                <td>{{$agent->email}}</td>
                                                <td>{{number_format((float)$quantity = \App\VoucherSales::where('created_by', $agent->username)->sum('voucher_quantity'), 2)}}</td>
                                                <td>{{number_format((float)$amount = \App\VoucherSales::where('created_by', $agent->username)->sum('sales_amount'), 2)}}</td>
                                                <td>{{number_format((float)$paid = \App\Payment::where('email', $agent->email)->sum('amount_paid'), 2)}}</td>
                                                <td>{{number_format((float)$amount - $paid, 2)}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <!-- Dropdown Trigger -->
                                                        <a class="dropdown-button btn" href="#" data-activates="maildropdown{{$agent->id}}" style="">More <i class="fa fa-angle-down "></i></a>
                                                        <ul id="maildropdown{{$agent->id}}" class="dropdown-content" style="width: 76.2333px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;">
                                                            <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                                            <li><a href="{{route('creditAgent', $agent->email)}}"><i class="fa fa-ban"></i> Credit</a></li>
                                                            <li><a href="{{route('sendOneMail', $agent->email)}}"><i class="fa fa-trash-o"></i> Send Mail</a></li>
                                                            <li><a href="#"><i class="fa fa-trash-o"></i> Block</a></li>
                                                            <li><a href="#"><i class="fa fa-trash-o"></i> Details</a></li>
                                                        </ul>
                                                        <!-- Dropdo wn Structure -->

                                                    </div>
                                                </td>
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