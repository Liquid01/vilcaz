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
                                            <th>ACTION</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->created_at}}</td>
                                                <td><a href="{{route('adminMemberDetails', $user->username)}}" class="btn btn-warning"><i class="fa fa-info"></i> Details</a></td>
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