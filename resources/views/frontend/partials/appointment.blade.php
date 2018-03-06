<!--Appointment Start-->
<div class="ast_journal_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                @endif
                <div class="ast_journal_box_wrapper">

                                             <h3>Book An Appointment</h3>
                    {{ Form::open(['route' =>'appointment.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
                    <form method="post" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>name</label>
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>email</label>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>mobile number</label>
                            <input type="number" name="number" placeholder="Mobile Number">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>gender</label>
                            <div class="col-sm-7">
                                <div class="radio radio-styled">
                                    <label>
                                        <input type="radio" name="gender" value="MALE" style="height:15px">
                                        <span>Male</span>
                                    </label>
                                </div>
                                <div class="radio radio-styled">
                                    <label>
                                        <input type="radio" name="gender" value="FEMALE" style="height:15px">
                                        <span>Female</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Payment Option</label>
                            {{--<select>--}}
                                {{--<option value="1" name="payment"> Esewa </option>--}}
                                {{--<option value="2" name="payment">Skrill</option>--}}
                                {{--<option value="3" name="payment">Bank Deposit </option>--}}
                            {{--</select>--}}
                            <div class="col-sm-7" >
                                <div class="radio radio-styled">
                                    <label>
                                        <input type="radio" name="payment" value="Esewa"style="height:15px";>
                                        <span>Esewa</span>
                                    </label>
                                </div>
                                <div class="radio radio-styled" >
                                    <label>
                                        <input type="radio" name="payment" value="Skrill" style="height:15px; ">
                                        <span>Skrill</span>
                                    </label>
                                </div>
                                <div class="radio radio-styled">
                                    <label>
                                        <input type="radio" name="payment" value="Bank Deposit" style="height:15px";>
                                        <span>Western Union</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{--<label></label>--}}
                                        <input type="number" name="tnumber" placeholder="Please Enter Payment Transaction Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<label>way to reach</label>--}}
                            {{--<select>--}}
                                {{--<option value="1">Phone </option>--}}
                                {{--<option value="2">Email</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<label>Preferred  Date</label>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                                    {{--<input type="text" placeholder="Date">--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                                    {{--<input type="text" placeholder="Month">--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                                    {{--<input type="text" placeholder="Year">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<label>Preferred Time</label>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                                    {{--<input type="text" placeholder="Hrs">--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                                    {{--<input type="text" placeholder="Mins">--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
                                    {{--<input type="text" placeholder="Sec">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<label>address</label>--}}
                            {{--<textarea placeholder="Address" rows="4"></textarea>--}}
                        {{--</div>--}}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Reason for appointment</label>
                            <textarea placeholder="Message" name="message" rows="4"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="ast_btn pull-right">make an appointment</button>
                        </div>
                    </form>
                    {{form::close()}}
                </div>
            </div>
        </div>

    </div>
</div>
<!--Appointment End-->
@push('styles')
    <link rel="stylesheet" href="{{ asset('/backend/css/bootstrap-select.min.css') }}">
@endpush