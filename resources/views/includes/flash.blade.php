@if (session('success'))
    <div class="alert alert-success alert-dismissible">
        {{ session('success') }}
    </div>
@endif

@if (session('failed'))
    <div class="alert alert-danger alert-dismissible">
        {{ session('failed') }}
    </div>
@endif

@if (session('sales'))
    <div class=" row alert alert-success alert-dismissible">
        <div class="col-md-6 col-sm-6">
            <p style="font-weight: bold;">{{session('sales')->Quantity}} &nbsp; Pins Sold successfully! With
                ID: {{session('sales')->Code}}</p>
        </div>
        <div class="col-md-3 col-sm-3">
            With Amount: &nbsp; NGN {{session('sales')->Amount}}
        </div>

        <div class="col-md-2 col-sm-2">
            <a href="{{route('storeInvoice', session('sales')->Code)}}" class="btn btn-primary btn-raised pull-right"
               style="margin: 0px!important;">Details</a>
        </div>
    </div>
@endif


{{--@if (session('store_name'))--}}
{{--<div class="alert alert-primary ">--}}
{{--<h3 class="text-center">{{ session('store_name') }}</h3>--}}
{{--</div>--}}
{{--@endif--}}


