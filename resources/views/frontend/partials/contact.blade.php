@extends('frontend.main')
@section('content')

    <!--Breadcrumb start-->
    <div class="ast_pagetitle">
        <div class="ast_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>contact Us</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">home</a></li>
                        <li>//</li>
                        <li><a href="{{url('/contact')}}">contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <!--Content Us Start-->
    <div class="ast_contact_wrapper ast_toppadder70 ast_bottompadder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>get in <span>touch</span></h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected hummer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ast_contact_info">
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <h4>phone</h4>
                        <p>+977-984-155-3257</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ast_contact_info">
                        <span><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
                        <h4>email</h4>
                        <p><a href="#">astrokathmandu@gmail.com</a><br></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ast_contact_info">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <h4>address</h4>
                        <p>Aarubari, Kathmandu</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ast_contact_info">
                        <span><i class="fab fa-skype" aria-hidden="true"></i></span>
                        <h4>Skype</h4>
                        <p>astro.Kathmandu</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ast_contact_info">
                        <span><i class="fab fa-skype" aria-hidden="true"></i></span>
                        <h4>Viber</h4>
                        <p>+977-984-155-3257</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ast_mapnform_wrapper ast_toppadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>find & message <span>here</span></h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected hummer.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ast_contact_map">
            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">
                <div class="ast_contact_form">
                    <form>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>first name</label>
                            <input type="text" name="first_name" class="require">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>last name</label>
                            <input type="text" name="last_name" class="require">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>email</label>
                            <input type="text" name="email" class="require" data-valid="email" data-error="Email should be valid.">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>subject</label>
                            <input type="text" name="subject" class="require">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>message</label>
                            <textarea rows="5" name="message" class="require"></textarea>
                        </div>
                        <div class="response"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="ast_btn pull-right submitForm" type="button" form-type="contact">send</button>
                        </div>
                    </form>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.665591193351!2d-81.23677798444672!3d28.54976958245048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e7666b70c7639b%3A0x138d66cd5d424720!2sBloomfield+Dr%2C+Orlando%2C+FL+32825%2C+USA!5e0!3m2!1sen!2sin!4v1501822735922" allowfullscreen></iframe>
        </div>
    </div>



@endsection