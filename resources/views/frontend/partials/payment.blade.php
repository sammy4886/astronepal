@extends('frontend.main')
@section('content')
    <!--Breadcrumb start-->
    <div class="ast_pagetitle">
        <div class="ast_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Payment Options</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        {{--<li><a href="{{url('/'}}">home</a></li>--}}
                        {{--<li><a href="{{url('/payment'}}">Payment Options</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <div class="ast_contact_wrapper ast_toppadder70 ast_bottompadder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>Beneficiary <span>Account</span></h1>
                        <p>Anil Chalise</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ast_contact_info">
                        <span><i class="fa fa-money" aria-hidden="true"></i></span>
                        <h4>Account</h4>
                        <p>LT423500010003335107<br>SWIFT: EVIULT21XXX</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ast_contact_info">
                        <span><i class="fa fa-bank" aria-hidden="true"></i></span>
                        <h4>Bank name</h4>
                        <p><a href="#">Paysera, JSC</a><br><a href="#"> Mėnulio st. 7, Vilnius,</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ast_contact_info">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <h4>bank address</h4>
                        <p>Mėnulio st. 7, Vilnius,LT-04326, Lithuania</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection