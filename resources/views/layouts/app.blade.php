<!-- Right Side Of Navbar -->
{{--<ul class="navbar-nav ml-auto">--}}
{{--<!-- Authentication Links -->--}}
{{--@guest--}}
{{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
{{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
{{--@else--}}
{{--<li class="nav-item dropdown">--}}
{{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--{{ __('Logout') }}--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--@csrf--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--@endguest--}}
{{--</ul>--}}



<!-- header starts -->
@include('includes.header')


@yield('content')


<!-- footer starts -->

@include('includes.footer')

<!-- footer ends -->

<meta name="_token" content="{!! csrf_token() !!}"/>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/configurator.min.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/tinymce/src/assets/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/js/jssocials/jssocials.min.js') }}"></script>
<script src="{{ asset('assets/js/over.js') }}"></script>
<script src="{{ asset('assets/js/over.min.js') }}"></script>
<script src="{{ asset('assets/js/lead-full.js') }}"></script>
<script src="{{ asset('assets/js/generic.js') }}"></script>


<script src="{{asset('assets/js/custom.js')}}"></script>


<script>
    function payWithPaystack(){
        var handler = PaystackPop.setup({
            key: 'pk_live_b35ccca36d5bb37bb457e64cc835e2d8f9e0d52c',
            email: 'achimuguaemmanuel01@gmail.com',
            amount: 10000 * 100,
            ref: 'ViliqCaz'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            firstname: 'Emmanue',
            lastname: 'Achimugu',
            metadata: {
                custom_fields: [
                    {
                        display_name: "Emmanuel",
                        variable_name: "mobile_number",
                        value: "++2348038487703"
                    }
                ]
            },
            callback: function(response){
                alert('Transaction Successful. transaction reference is ' + response.reference);
            },
            onClose: function(){
                alert('Transaction Terminated Successfuly');
            }
        });
        handler.openIframe();
    }


    $(document).ready(function () {
        $('.myModal').modal('show');
    });
</script>


</body>
</html>
