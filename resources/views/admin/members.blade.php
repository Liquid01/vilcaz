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
                                <i class="fa fa-group fa-lg"></i>
                                <h2>Members</h2>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="data" class="table table-bordered table-striped table-hover">
                                        <thead>

                                        <tr>
                                            <th>NAME</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Registered Date</th>
                                            <th>Vouchers</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>{{$accum = \App\VoucherSales::where('username', $user->username)->sum('voucher_quantity')}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <!-- Dropdown Trigger -->
                                                    <a class="dropdown-button btn" href="#" data-activates="maildropdown{{$user->id}}" style="">More <i class="fa fa-angle-down "></i></a>
                                                    <ul id="maildropdown{{$user->id}}" class="dropdown-content" style="width: 76.2333px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;">
                                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                                        <li><a href="#"><i class="fa fa-ban"></i> Delete</a></li>
                                                        <li><a href="{{route('sendOneMail', $user->email)}}"><i class="fa fa-trash-o"></i> Send Mail</a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> Block</a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i> Details</a></li>
                                                    </ul>
                                                    <!-- Dropdown Structure -->

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