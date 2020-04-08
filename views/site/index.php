<?php

/* @var $this yii\web\View */

$this->title = 'covid 19 Italy';

use yii\helpers\Html; ?>
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
                                    <h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">Che cos'è Covid-19?</h2>
                                    <p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">
                                        I virus della corona sono un grande gruppo di virus che possono causare malattie negli animali e nell'uomo. È noto che un certo numero di coronavirus causano infezioni respiratorie nell'uomo che vanno dal comune raffreddore a malattie più gravi come la sindrome respiratoria mediorientale e la sindrome respiratoria acuta grave (SARS). Il Coronavirus appena scoperto provoca il virus Corvid-19
                                    </p>
                                    <ul>
<!--                                        <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">donate</a></li>-->

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

            <div class="offset-md-2 offset-lg-2 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="cat_about">
                    <div class="icon_wrapper">
                        <img src="<?= Yii::getAlias('@web')?>/theme/images/corona/icon2.png" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_img">
                        <img src="<?= Yii::getAlias('@web')?>/theme/images/corona/icon_2.png" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_txt">
                        <h1>Prevenzione</h1>
                        <p>Per prevenire l'infezione e rallentare la trasmissione di COVID-19! </p>
                            <?= Html::a('Read More <i class="fa fa-long-arrow-right"></i>', ['site/prevention']) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="cat_about">
                    <div class="icon_wrapper">
                        <img src="<?= Yii::getAlias('@web')?>/theme/images/corona/icon3.png" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_img cat_img_3">
                        <img src="<?= Yii::getAlias('@web')?>/theme/images/corona/icon_3.png" alt="img" class="img-responsive">
                    </div>
                    <div class="cat_txt">
                        <h1>SINTOMI</h1>
                        <p>Il virus COVID-19 colpisce persone diverse in modi diversi..</p>
                        <?= Html::a('Read More <i class="fa fa-long-arrow-right"></i>', ['site/symptoms']) ?>
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
                    <img src="<?= Yii::getAlias('@web')?>/theme/images/corona/abt_img.jpg" alt="img" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 abt_section">
                <div class="abt_heading_wrapper">
                    <h1 class="med_bottompadder20">COME COVID19 SI SPARGE</h1>
                    <img src="<?= Yii::getAlias('@web')?>/theme/images/line.png" alt="title" class="med_bottompadder20">
                </div>
                <div class="abt_txt">
                    <h3>DIFFUSIONE DA PERSONA A PERSONA</h3>
                    <p class="med_toppadder20">Si pensa che il virus si diffonda principalmente da persona a persona. Tra le persone che sono in stretto contatto tra loro (entro circa 6 piedi). Attraverso goccioline respiratorie prodotte quando una persona infetta tossisce o starnutisce. Queste goccioline possono atterrare nella bocca o nel naso di persone che si trovano nelle vicinanze o che possono essere inalate nei polmoni..</p>
                </div>

            </div>
        </div>
    </div>
</div>
<!--about us wrapper end-->


<!-- counter wrapper start-->
<div class="counter_section">
    <div class="counter-section med_bottommargin100 section-padding" data-stellar-background-ratio="0.5">
        <div class="container text-center">
            <div class="row">
                
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="icon">
                        <a href="#"><img src="<?= Yii::getAlias('@web')?>/theme/images/png/patient.png" alt="img" class="img-responsive"></a>
                    </div>
                    <div class="count-description">
                        <span class="timer"><?=$confirmed_cases?></span>
                        <h5 class="con1">Casi confermati</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="icon">
                        <a href="#"><img src="<?= Yii::getAlias('@web')?>/theme/images/png/doctor.png" alt="img" class="img-responsive"></a>
                    </div>
                    <div class="count-description">
                        <span class="timer"><?=$confirmed_deaths?></span>
                        <h5 class="con2">Morti confermate</h5>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="icon">
                        <a href="#"><img src="<?= Yii::getAlias('@web')?>/theme/images/png/heart.png" alt="img" class="img-responsive"></a>
                    </div>
                    <div class="count-description">
                        <span class="timer"><?=$quarantine_people?></span>
                        <h5 class="con4">Persone in quarantena</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
