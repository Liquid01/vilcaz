@extends('admin.layouts.admin');

@section('content')


<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-envelope-open"></i>
            </div>
            <div class="header-title">
                <h1> Inbox</h1>
                <small> Mail Details</small>
                <ul class="link hidden-xs">
                    <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="{{route('mailBox')}}">Mail</a></li>
                </ul>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">
            <div class="row">
                <div class="mail-box">
                    <aside class="sm-side hidden-xs">
                        <div class="user-head">
                            <a class="inbox-avatar">
                                <img src="{{asset('assets/dist/img/avatar5.png')}}" class="border-green" width="60" height="50" alt="logo">
                            </a>
                            <div class="user-name">
                                <h5><a href="#">{{auth()->user()->name}}</a></h5>
                                {{--<span><a href="#"><span class="__cf_email__" data-cfemail="12537e60736852557f737b7e3c717d7f">[email&#160;protected]</span></a></span>--}}
                            </div>
                        </div>
                        <div class="inbox-body">
                            <a href="javascript:void(0);" class="btn btn-compose compose">
                                <i class="fa fa-edit"></i> Compose
                            </a>
                        </div>
                        <ul class="inbox-nav inbox-divider">
                            <li class="active">
                                <a href="#"><i class="fa fa-inbox"></i> Inbox
                                    {{--<span class="label label-danger pull-right">7</span>--}}
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="#"><i class="fa fa-bookmark-o"></i> Important</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-primary pull-right">15</span></a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#"><i class=" fa fa-trash-o"></i> Trash</a>--}}
                            {{--</li>--}}
                        </ul>
                        <ul class="nav nav-pills nav-stacked labels-info ">
                            <li>
                                <h4> recent chat</h4>
                            </li>
                            <li>
                                <p><i class=" fa fa-comments-o"></i> No recent chat</p>
                            </li>
                        </ul>
                    </aside>
                    <aside class="lg-side">
                        <div class="inbox-head">
                            <h3>Inbox</h3>
                            <form action="#" class="pull-right position">
                                <div class="input-append">
                                    <input type="text" class="sr-input" placeholder="Search Mail">

                                </div>
                            </form>
                        </div>
                        @include('includes.flash')
                        <div class="inbox-body">
                            <div class="mail-option">
                                <div class="btn-group composeOne">
                                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips ">
                                        <i class="fa fa-user-plus"> Send to one</i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                        <i class="fa fa-group"> Send to All</i>
                                    </a>
                                </div>
                            </div>
                            <table class="table table-bordered table-hover table-responsive">
                                <tbody class="mailContent">

                                @include('admin.sendMail')




                                </tbody>
                            </table>
                        </div>
                    </aside>
                </div>

            </div>
            <!-- ./row -->
        </div>
        <!-- ./cotainer -->
    </div>
    <!-- ./page-content -->
</div>


@endsection