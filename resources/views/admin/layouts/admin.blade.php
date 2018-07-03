<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VilCaz</title>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.gif')}}">
    <!-- Start Global Mandatory Style
         =====================================================================-->
    <!-- jquery-ui css -->
    <link href="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- materialize css -->
    <link href="{{asset('assets/plugins/materialize/css/materialize.min.css')}}" rel="stylesheet">
    <!-- Bootstrap css-->
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Animation Css -->
    <link href="{{asset('assets/plugins/animate/animate.css')}}" rel="stylesheet" />
    <!-- Material Icons CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Monthly css -->
    <link href="{{asset('assets/plugins/monthly/monthly.css')}}" rel="stylesheet" type="text/css" />
    <!-- tingle css -->
    <link href="{{asset('assets/plugins/tingle/dist/tingle.css')}}" rel="stylesheet" type="text/css" />
    <!-- ssi-modal css -->
    <link href="{{asset('assets/plugins/ssi-modal/ssi-modal.css')}}" rel="stylesheet" type="text/css" />
    <!-- simplebar scroll css -->
    <link href="{{asset('assets/plugins/simplebar/dist/simplebar.css')}}" rel="stylesheet" type="text/css" />
    <!-- mCustomScrollbar css -->
    <link href="{{asset('assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom CSS -->
    <link href="{{asset('assets/dist/css/stylematerial.css')}}" rel="stylesheet">
</head>

<body>
<div id="wrapper">
    <!--navbar top-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <!-- Logo -->
        <a class="navbar-brand pull-left" href="{{route('adminHome')}}">
            <img src="{{asset('assets/img/vilcaz-small.png')}}" class="img-responsive" style="max-width:150px;" alt="logo" >
        </a>
        <a id="menu-toggle">
            <i class="material-icons">apps</i>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav navbar-left hidden-xs">
                <li class="top-search "><a href="#search"><i class="material-icons">search</i></a></li>
                <li>
                    <div id="search" class="top-search">
                        <button type="button" class="close">x</button>
                        <form>
                            <input type="search" value="" placeholder="type For searching..." />
                            <button type="submit" class="btn">Search</button>
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="navbar navbar-right">
                <!--Notification-->
                <li class="dropdown">
                    <a class="dropdown-toggle btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off bolder" style="color:white; font-size: 15px;  " ></i>
                    </a>
                </li>

                <!--user profile-->
                <li class="dropdown">
                    <a class='dropdown-button user-pro' href='#' data-activates='dropdown-user'>
                        <img src="{{asset('assets/dist/img/avatar5.png')}}" class="img-circle" height="45" width="50" alt="User Image">
                    </a>
                    <ul id='dropdown-user' class='dropdown-content'>
                        <li>
                            <a href="#!"><i class="material-icons">perm_identity</i> View profile</a>
                        </li>
                        <li>
                            <a href="#!"><i class="material-icons">settings</i> Settings</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">lock</i> Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </li>
                    </ul>
                </li>
                <!-- /.user profile -->
            </ul>
        </div>
    </nav>
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="waves-effect" data-simplebar>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="list-header">Admin</li>
                    <li class="active-link"><a href="{{route('adminHome')}}"><i class="material-icons">dashboard</i>Dashboard</a></li>
                    <li>
                        <a><i class="material-icons">people</i>Members<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{route('adminAllMembers')}}">All Members</a></li>
                            <li><a href="{{route('credited')}}">Credited</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a><i class="material-icons">email</i>Mailbox<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active-link"><a href="{{route('mailBox')}}">Mailbox</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a><i class="material-icons">people</i>Agents<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active-link"><a href="{{route('allAgents')}}">All Agents</a></li>
                            <li class="active-link"><a href="{{route('createAgent')}}">New Agent</a></li>
                        </ul>
                    </li>

                    <li class="side-last"></li>
                </ul>
                <!-- ./sidebar-nav -->
            </div>
            <!-- ./sidebar -->
        </div>
        <!-- ./sidebar-nav -->
    </div>
    <!-- ./sidebar-wrapper -->

    @yield('content')



</div>
<!-- ./page-wrapper -->
<!-- Preloader -->
<div id="preloader">
    <div class="preloader-position">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-teal">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<meta name="_token" content="{!! csrf_token() !!}"/>

<!-- Start Core Plugins
     =====================================================================-->
<!-- jQuery -->
<script src="{{asset('assets/plugins/jQuery/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- materialize  -->
<script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}" type="text/javascript"></script>
<!-- metismenu-master -->
<script src="{{asset('assets/plugins/metismenu-master/dist/metisMenu.min.js')}}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<!-- m-custom-scrollbar -->
<script src="{{asset('assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}" type="text/javascript"></script>
<!-- scroll -->
<script src="{{asset('assets/plugins/simplebar/dist/simplebar.js')}}" type="text/javascript"></script>
<!-- tingle js -->
<script src="{{asset('assets/plugins/tingle/dist/tingle.js')}}" type="text/javascript"></script>
<!-- ssi-modal js -->
<script src="{{asset('assets/plugins/ssi-modal/ssi-modal.min.js')}}" type="text/javascript"></script>
{{--Datatables--}}
<script src="{{asset('assets/plugins/datatables/dataTables.min.js')}}" type="text/javascript"></script>

<!-- custom js -->
<script src="{{asset('assets/dist/js/custom.js')}}" type="text/javascript"></script>
<!-- End Core Plugins
     =====================================================================-->
<!-- Start Page Lavel Plugins
     =====================================================================-->
<!-- Sparkline js -->
<script src="{{asset('assets/plugins/sparkline/sparkline.min.js')}}" type="text/javascript"></script>
<!-- Counter js -->
<script src="{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<!-- ChartJs JavaScript -->
<script src="{{asset('assets/plugins/chartJs/Chart.min.js')}}" type="text/javascript"></script>
<!-- Monthly js -->
<script src="{{asset('assets/plugins/monthly/monthly.js')}}" type="text/javascript"></script>

<!-- End Page Lavel Plugins
     =====================================================================-->
<!-- Start Theme label Script
     =====================================================================-->
<!-- main js-->
<script src="{{asset('assets/dist/js/main.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<!-- Custom Js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- End Theme label Script
     =====================================================================-->
<script>
    $(document).ready(function () {
        "use strict";
        // Message
        function slscroll() {
            $('.chat_list , .activity-list , .message_inner').slimScroll({
                size: '3px',
                height: '320px',
                allowPageScroll: true,
                railVisible: true
            });
        }
        slscroll();
        function chatscroll() {
            $('.chat_list').slimScroll({
                size: '3px',
                height: '290px'
            });
        }
        chatscroll();

        //monthly calender
        $('#m_calendar').monthly({
            mode: 'event',
            //jsonUrl: 'events.json',
            //dataType: 'json'
            xmlUrl: 'events.xml'
        });

        //panel refresh
        $.fn.refreshMe = function (opts) {
            var $this = this,
                defaults = {
                    ms: 1500,
                    started: function () {},
                    completed: function () {}
                },
                settings = $.extend(defaults, opts);

            var panelToRefresh = $this.parents('.panel').find('.refresh-container');
            var dataToRefresh = $this.parents('.panel').find('.refresh-data');
            var ms = settings.ms;
            var started = settings.started;		//function before timeout
            var completed = settings.completed;	//function after timeout

            $this.click(function () {
                $this.addClass("fa-spin");
                panelToRefresh.show();
                started(dataToRefresh);
                setTimeout(function () {
                    completed(dataToRefresh);
                    panelToRefresh.fadeOut(800);
                    $this.removeClass("fa-spin");
                }, ms);
                return false;
            });
        };

        $(document).ready(function () {
            $('.refresh, .refresh2').refreshMe({
                started: function (ele) {
                    ele.html("Getting new data..");
                },
                completed: function (ele) {
                    ele.html("This is the new data after refresh..");
                }
            });
        });

        //line chart
        var ctx = document.getElementById("lineChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: "Total income",
                    borderColor: "#73879C",
                    borderWidth: "1",
                    backgroundColor: "#73879C",
                    data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                }, {
                    label: "Total Expense",
                    borderColor: "rgba(26, 187, 156, 0.64)",
                    borderWidth: "1",
                    backgroundColor: "rgba(26, 187, 156, 0.64)",
                    pointHighlightStroke: "rgba(26, 187, 156, 0.64)",
                    data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                }]
            },
            options: {
                responsive: true,
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                }

            }
        });


    });
</script>


<script>
    "use strict";
    function modelsuprise() {
        //Modal Tiny no footer
        var modalTinyNoFooter = new tingle.modal({
            onClose: function () {
                console.log('close');
            },
            onOpen: function () {
                console.log('open');
            },
            beforeClose: function () {
                console.log('before close');
                return true;
            },
            cssClass: ['class1', 'class2']
        });


        var modalTinyBtn = new tingle.modal({
            footer: true
        });

        var modalTinyBtn2 = new tingle.modal({
            footer: true
        });
        var btn2 = document.querySelector('.js-tingle-modal-2');
        var btn3 = document.querySelector('.js-tingle-modal-3');

        btn2.addEventListener('click', function () {
            modalTinyBtn.open();
        });

        btn3.addEventListener('click', function () {
            modalTinyBtn2.open();
        });

        modalTinyBtn.setContent(document.querySelector('.tingle-demo-tiny').innerHTML);
        modalTinyBtn2.setContent(document.querySelector('.tingle-demo-tiny2').innerHTML);

        modalTinyBtn.addFooterBtn('Continue', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function () {
//            alert('click on primary button!');
            payWithPaystack();
        });


        modalTinyBtn2.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function () {
            modalTinyBtn2.close();
        });






    }
    modelsuprise();
    //basic model
    function main() {
        var $body = $('body');
        $('#modal').click(function () {
            ssi_modal.show({
                content: 'Hello World'
            });
        });

    }

    main();
</script>

<script>
    function payWithPaystack(){
        var email = $("#user_email").val();

        var name = $("#user_full_name").val();
        var name_arr = name.split(' ')
        var first = name_arr[0];
        var last = name_arr[1];
        var voucher_amount = $("#pay_amount").val() * 100;

//        alert(voucher_amount);


        var handler = PaystackPop.setup({
            key: 'pk_live_b35ccca36d5bb37bb457e64cc835e2d8f9e0d52c',
            email: email,
            amount: voucher_amount,
            ref: 'ViliqCaz'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            firstname: first,
            lastname: last,
            metadata: {
                custom_fields: [
                    {
                        display_name: first,
                        variable_name: "mobile_number",
                        value: "+2348038487703"
                    }
                ]
            },
            callback: function(response){
//                verifyTransaction(response.reference);
                alert('Transaction Successful. transaction reference is ' + response.reference);

                var message = verifyTransaction(response.reference);
                alert(message);
            },
            onClose: function(){
                alert('Transaction Terminated Successfully');
            }
        });
        handler.openIframe();
    }


    //    $("#me").click(function () {
    //        verifyTransaction();
    //    });

    function verifyTransaction(ref) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "{{route('verifyTransactionRef')}}",
            dataType: 'json',
            data: {'reference': ref},
            success: function (data) {


                if (data.status !== null) {
                    return data;
                } else {

                    return "failed to credit Voucher";

                }
            }

        });
    }

    // Start of jquery datatable
    $('#data').DataTable({
        "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
        "lengthMenu": [
            [6, 25, 50, -1],
            [6, 25, 50, "All"]
        ],
        "iDisplayLength": 6
    });

    function copyToClipboard() {

        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($("#reflink").attr('data-link')).select();
        document.execCommand("copy");
        $temp.remove();

        alert('referral link copied');

    }


</script>
{{--<script src="{{asset('assets/js/custom.js')}}"></script>--}}
</body>
</html>