<!-- Header Start -->
<div class="ast_top_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ast_contact_details">
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> +1800 326 3264</li>
                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> support@website.com</a></li>
                    </ul>
                </div>
                <div class="ast_autho_wrapper">
                    <ul>
                        <li><a href="{{url('/payment')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Payment Opions</a></li>
                        <li><a class="popup-with-zoom-anim" href="#signup-dialog"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
                    </ul>
                    {{--<div id="login-dialog" class="zoom-anim-dialog mfp-hide">--}}
                        {{--<h1>Login Form</h1>--}}
                        {{--<form>--}}
                            {{--<input type="text" placeholder="Email">--}}
                            {{--<input type="password" placeholder="Password">--}}
                            {{--<button type="submit" class="ast_btn">Payment</button>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    <div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
                        <h1>signup form</h1>
                        <form>
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <input type="text" placeholder="Mobile Number">
                            <select>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <button type="submit" class="ast_btn">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ast_header_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="ast_logo">
                    <a href="{{url('/')}}"><img src="images/header/logo.png" alt="Logo" title="Logo"></a>
                    <button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="ast_main_menu_wrapper">
                    <div class="ast_menu">
                        <ul>
                            <li><a href="{{('/')}}">home</a>
                                {{--<ul class="submenu">--}}
                                    {{--<li><a href="index.html">home V1</a></li>--}}
                                    {{--<li><a href="index2.html">home V2</a></li>--}}
                                {{--</ul>--}}
                            </li>
                            <li><a href="/about">about</a></li>
                            <li><a href="">services</a></li>
                            {{--<li><a href="">blog</a>--}}
                                {{--<ul class="submenu">--}}
                                    {{--<li><a href="#">blog</a>--}}
                                        {{--<ul class="submenu">--}}
                                            {{--<li><a href="blog.html">blog default</a></li>--}}
                                            {{--<li><a href="blog_rs.html">right sidebar</a></li>--}}
                                            {{--<li><a href="blog_ls.html">left sidebar</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="#">blog single</a>--}}
                                        {{--<ul class="submenu">--}}
                                            {{--<li><a href="blog_single.html">full width</a></li>--}}
                                            {{--<li><a href="blog_single_rs.html">right sidebar</a></li>--}}
                                            {{--<li><a href="blog_single_ls.html">left sidebar</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            <li><a href="">appointment</a></li>
                            {{--<li><a href="#">pages</a>--}}
                                {{--<ul class="submenu">--}}
                                    {{--<li><a href="">Astrologers</a></li>--}}
                                    {{--<li><a href="">horoscopes</a></li>--}}
                                    {{--<li><a href="">gemstones</a></li>--}}
                                    {{--<li><a href="">numerology</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            <li><a href="{{url('/contact')}}">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->