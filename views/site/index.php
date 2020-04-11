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
                                    <h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown"><?=Yii::t('app', 'What_is_Covid_19')?></h2>
                                        <p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">
                                            <?=Yii::t('app', 'Desc_Covid')?>
                                        </p>
                                    <ul>
                                        <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#"><?=Yii::t('app', 'Buy_Now')?></a></li>

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
                        <h1><?=Yii::t('app', 'PREVENTION')?></h1>
                        <p><?=Yii::t('app', 'PREVENTION_Desc')?> </p>
                            <a href="http://www.salute.gov.it/portale/salute/p1_2.html"><?= Yii::t('app', 'Read_More')?><i class="fa fa-long-arrow-right"></i></a>
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
                        <h1><?=Yii::t('app', 'SYMPTOMS')?></h1>
                        <p><?=Yii::t('app', 'PREVENTION_Desc')?></p>
                        <a href="http://www.salute.gov.it/portale/salute/p1_2.html"><?= Yii::t('app', 'Read_More')?><i class="fa fa-long-arrow-right"></i></a>

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
                    <h1 class="med_bottompadder20"><?=Yii::t('app', 'How_Covid19_Sparge')?></h1>
                    <img src="<?= Yii::getAlias('@web')?>/theme/images/line.png" alt="title" class="med_bottompadder20">
                </div>
                <div class="abt_txt">
                    <h3><?=Yii::t('app', 'Diffusion_From_Person_To_Perrson')?></h3>
                    <p class="med_toppadder20">
                        <?=Yii::t('app', 'Diffusion_From_Person_To_Perrson_Desc')?>
                    </p>
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
                        <h5 class="con1"><?=Yii::t('app', 'Confirmed_Cases')?></h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="icon">
                        <a href="#"><img src="<?= Yii::getAlias('@web')?>/theme/images/png/doctor.png" alt="img" class="img-responsive"></a>
                    </div>
                    <div class="count-description">
                        <span class="timer"><?=$confirmed_deaths?></span>
                        <h5 class="con2"><?=Yii::t('app', 'Dead_Confirm')?></h5>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="icon">
                        <a href="#"><img src="<?= Yii::getAlias('@web')?>/theme/images/png/heart.png" alt="img" class="img-responsive"></a>
                    </div>
                    <div class="count-description">
                        <span class="timer"><?=$quarantine_people?></span>
                        <h5 class="con4"><?=Yii::t('app', 'Quarantined_People')?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
