@extends('layouts.main')

@section('content')

<!--header wrapper end-->
<!--slider wrapper start-->
<div class="slider_main_wrapper">
    <div class="cc_slider_img_section">
        <div class="owl-carousel owl-theme">
            <div class="item cc_main_slide4">
                <div class="med_img_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="cc_slider_cont1_wrapper">
                                <div class="cc_slider_cont1">
                                    <div class="medi">
                                        <h1 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">Corona<span>Virus</span></h1></div>
                                    <h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">Whats Is Covid-19?</h2>
                                    <p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">3D medical animation, depicting the shape of coronavirus as well as the cross-sectional view. Image shows the major elements including the Spike S protein, HE protein, viral envelope, and helical RNA</p>
                                    <ul>
                                        <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">donate</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item cc_main_slide5">
                <div class="med_img_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="cc_slider_cont1_wrapper">
                                <div class="cc_slider_cont1">
                                    <div class="medi">
                                        <h1 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">Protect<span>yourself</span></h1></div>
                                    <h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">advice for the public</h2>
                                    <p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">Maintain at least 1 metre (3 feet) distance between yourself and anyone who is coughing or sneezing.</p>
                                    <ul>
                                        <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">READ MORE</a></li>
                                        <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">PURCHASE</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item cc_main_slide6">
                <div class="med_img_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="cc_slider_cont1_wrapper">
                                <div class="cc_slider_cont1">
                                    <div class="medi">
                                        <h1 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">Corona<span>services</span></h1></div>
                                    <h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">SYMPTOMS OF CORONAVIRUS DISEASE 2019</h2>
                                    <p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">COVID-19 is a respiratory disease and most infected people will develop mild to moderate symptoms and recover without requiring special treatment.</p>
                                    <ul>
                                        <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">READ MORE</a></li>
                                        <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">PURCHASE</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--slider wrapper end-->
<!--category wrapper start-->
<div class="category_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="cat_about">
                    <div class="icon_wrapper">
                        <img src="{{asset('theme/images/corona/icon1.png')}}" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_img">
                        <img src="{{asset('theme/images/corona/icon_11.png')}}" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_txt">
                        <h1>OVERVIEW</h1>
                        <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
                        <a href="about_us_corona.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="cat_about">
                    <div class="icon_wrapper">
                        <img src="{{asset('theme/images/corona/icon2.png')}}" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_img">
                        <img src="{{asset('theme/images/corona/icon_2.png')}}" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_txt">
                        <h1>PREVENTION</h1>
                        <p>To prevent infection and to slow transmission of COVID-19! </p>
                        <a href="prevention.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="cat_about">
                    <div class="icon_wrapper">
                        <img src="{{asset('theme/images/corona/icon3.png')}}" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_img cat_img_3">
                        <img src="{{asset('theme/images/corona/icon_3.png')}}" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_txt">
                        <h1>SYMPTOMS</h1>
                        <p>The COVID-19 virus affects different people in different ways.</p>
                        <a href="symptoms.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--category wrapper end-->
<!--about us wrapper start-->
<div class="about_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="abt_img abt_box">
                    <img src="{{asset('theme/images/corona/abt_img.jpg')}}" alt="img" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 abt_section">
                <div class="abt_heading_wrapper">
                    <h1 class="med_bottompadder20">How COVID-19 Spreads</h1>
                    <img src="{{asset('theme/images/line.png')}}" alt="title" class="med_bottompadder20">
                </div>
                <div class="abt_txt">
                    <h3>Person-to-person spread</h3>
                    <p class="med_toppadder20">The virus is thought to spread mainly from person-to-person. Between people who are in close contact with one another (within about 6 feet). Through respiratory droplets produced when an infected person coughs or sneezes. These droplets can land in the mouths or noses of people who are nearby or possibly be inhaled into the lungs.</p>
                </div>
                <div class="abt_chk med_toppadder30">
                    <div class="content">
                        <ul>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Spread from contact</span></li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>How easily the virus spreads</span></li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Who should be tested</span></li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>How to get tested Covid-19</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--about us wrapper end-->


<!--vedio wrapper start-->
<div class="vedio_wrapper">
    <div class="vedio_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="vedio_heading_wrapper wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="med_bottompadder20">Protect yourself: advice for the public</h1>
                    <img src="{{asset('theme/images/Icon_team.png')}}" alt="line" class="med_bottompadder20">
                    <p>Symptoms of Coronavirus 2019</p>
                    <h4><a class="popup-youtube" href="https://www.youtube.com/embed/BtN-goy9VOY"><img src="{{asset('theme/images/corona/play-icon.png')}}" alt="Play"> play video</a></h4>
                    <div class="video_btn_wrapper right">
                        <ul>
                            <li><a class="btn" href="about_us_corona.html">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- counter wrapper start-->
<div class="counter_section">
    <div class="counter-section med_bottommargin100 section-padding" data-stellar-background-ratio="0.5">
        <div class="container text-center">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="icon">
                        <a href="#"><img src="{{asset('theme/images/png/success.png')}}" alt="img" class="img-responsive"></a>
                    </div>
                    <div class="count-description">
                        <span class="timer">187</span>
                        <h5 class="con2">Total Countries</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="icon">
                        <a href="#"><img src="{{asset('theme/images/png/patient.png')}}" alt="img" class="img-responsive"></a>
                    </div>
                    <div class="count-description">
                        <span class="timer">294110</span>
                        <h5 class="con1">Confirmed cases</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="icon">
                        <a href="#"><img src="{{asset('theme/images/png/doctor.png')}}" alt="img" class="img-responsive"></a>
                    </div>
                    <div class="count-description">
                        <span class="timer">12944</span>
                        <h5 class="con2">Confirmed deaths</h5>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="icon">
                        <a href="#"><img src="{{asset('theme/images/png/heart.png')}}" alt="img" class="img-responsive"></a>
                    </div>
                    <div class="count-description">
                        <span class="timer">1020200</span>
                        <h5 class="con4">Quarantine People</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- counter wrapper end-->
@endsection
