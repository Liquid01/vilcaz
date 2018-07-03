@extends('layouts.app')


@section('content')

    <div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
        <div class="container">
            <div class="text-center" style="margin-top:150px;">

                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                    CONTACT
                </h1>
                <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">
                    Where to find us
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card card-hero animated slideInUp animation-delay-8 mb-6">
            <div class="card-block">
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="card card-primary animated fadeInUp animation-delay-7">
                                    <div class="ms-hero-bg-primary ms-hero-img-mountain">
                                        <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Contact</h2>
                                    </div>
                                    <div class="card-block">
                                        <form class="form-horizontal">
                                            <fieldset>
                                                <div class="form-group">
                                                    <label for="inputName" class="col-md-2 control-label">Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="inputName" placeholder="Name"> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail" class="col-md-2 control-label">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email"> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputSubject" class="col-md-2 control-label">Subject</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="inputSubject" placeholder="Subject"> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textArea" class="col-md-2 control-label">Message</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" rows="5" id="textArea" placeholder="Your message..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-9 col-md-offset-2">
                                                        <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="card card-primary animated fadeInUp animation-delay-7">
                                    <div class="card-block">
                                        <div class="text-center mb-2">
                                            <center><img src="{{asset('assets/img/logo-200.png')}}" style="max-width:150px;" class="img img-responsive center "></center>

                                        </div>
                                        <address class="no-mb">
                                            <p>
                                                <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 16 Lasun Ogunbowale Street
                                            </p>
                                            <p>
                                                <i class="color-danger-light zmdi zmdi-bus mr-1"></i> Alegongo Bus Stop
                                            </p>

                                            <p>
                                                <i class="color-warning-light zmdi zmdi-map mr-1"></i> Akobo Ibadan
                                            </p>
                                            <p>
                                                <i class="color-warning-light zmdi zmdi-globe mr-1"></i> Oyo State, Nigeria
                                            </p>
                                            <p>
                                                <i class="color-info-light zmdi zmdi-email mr-1"></i>
                                                <a href="mailto:info@vilcazvoucher.com">info@vilcazvoucher.com</a>
                                            </p>
                                            <p>
                                                <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+2348 126 661 6764 </p>
                                            <p>
                                                <i class="color-success-light fa fa-fax mr-1"></i>+234 906 196 2799</p>
                                        </address>

                                        {{--<span class="zmdi zmdi-facebook">Vilcaz Voucher</span>--}}
                                        {{--<span class="zmdi zmdi-instagram">@vilcazvoucher</span>--}}
                                        {{--<span class="zmdi zmdi-twitter">@vilcaz_v</span>--}}
                                        {{--<span class="zmdi zmdi-linkedin">Vilcaz Voucher</span>--}}
                                    </div>
                                </div>
                                <div class="card card-primary animated fadeInUp animation-delay-7">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="zmdi zmdi-map"></i>Map</h3>
                                    </div>
                                    <iframe width="100%" height="340" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Akobo%2BIbadan&amp;ie=UTF8&amp;z=12&amp;t=m&amp;iwloc=near&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                <hr class="dotted">
            </div>
        </div>
    </div>
@endsection