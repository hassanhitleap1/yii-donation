@extends('layouts.main')

@section('content')

<!-- med_tittle_section-->
<div class="med_tittle_section">
    <div class="med_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="med_tittle_cont_wrapper">
                    <div class="med_tittle_cont">
                        <h1>Contact Us</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a>
                            </li>
                            <li>Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- med_tittle_section End-->
<!--contact us section start -->
<div class="contact_us_section med_toppadder100 med_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="choose_heading_wrapper med_bottompadder30">
                    <h1 class="med_bottompadder20">Contact us</h1>
                    <img src="{{asset('theme/images/line.png')}}" alt="title" class="med_bottompadder20">
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                </div>

                <form  method="POST" action="{{route('connect')}}">
                    @csrf
                    <div class="cont_main_section">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="contect_form1 dc_cont_div">
                                    <input type="text" name="full_name" placeholder="Full Name"   class="require">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="contect_form1 dc_cont_div">
                                    <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="contect_form1 dc_cont_div">
                                    <input type="text" name="contact_no" placeholder="Phone" class="require">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="contect_form1 dc_cont_div">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contect_form4 dc_cont_div">
                                    <textarea rows="5" name="message" placeholder="Message" class="require"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="response"></div>
                                <div class="contact_btn_wrapper med_toppadder30">
                                    <button type="button" class="submitForm">submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection
