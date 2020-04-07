<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\MainAsset;
use app\widgets\Alert;
use yii\helpers\Html;

MainAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--
Template Name:Couronne
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>">
<!-- Mirrored from webstrot.com/html/couronne/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 13:52:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images/corona/favicon.png" />
</head>

<body>
<?php $this->beginBody() ?>
<!-- preloader Start -->
<?= Alert::widget() ?>

<div id="preloader">

    <div id="status"><img src="<?= Yii::getAlias('@web')?>/theme/images/preloader.gif" id="preloader_image" alt="loader">
    </div>
</div>
<!--top header start-->
<div class="top_header_wrapper d-none d-sn-none d-md-block d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="top_header_add">
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Roma,Italy</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span>Email :</span> support@covid-19-italy.org</a></li>
                    </ul>
                </div>
                <div class="header_social">
                    <ul>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header menu wrapper-->
<div class="menu_wrapper header-area hidden-menu-bar stick">
    <div class="container nav-header">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 wow bounceInDown" data-wow-delay="0.3s">
                <div class="header_logo">
                    <a href="<?='/'?>" class="hidden-xs"><img src="<?= Yii::getAlias('@web')?>/theme/images/corona/logo2.png" alt="logo" title="logo" class="img-responsive  d-none d-sm-none d-md-block d-lg-block"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-10 col-xs-12">
                <div class="kv_navigation_wrapper">

                    <div class="et_navbar_search_wrapper d-none d-sm-none d-md-block d-lg-block ">
                        
                        <div id="search_open" class="et_search_box">
                            <input type="text" placeholder="Search here">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>

                    <div class="mainmenu  d-xl-block d-lg-block d-md-block d-sm-none d-none">
                        <ul class="main_nav_ul">
                           
                            <li class="has-mega gc_main_navigation">
                                <?= Html::a('Home &nbsp;', ['site/index'], ['class' => 'gc_main_navigation hover_color'])  ?> 
                            </li>
                            <li class="has-mega gc_main_navigation">
                                <?= Html::a('Corona &nbsp;', ['site/corona'], ['class' => 'gc_main_navigation hover_color']) ?> 
                               
                            </li>
                            <li class="has-mega gc_main_navigation">
                                <?= Html::a('contact us &nbsp;', ['site/contact'], ['class' => 'gc_main_navigation hover_color']) ?>
                            </li>

<!--                            <li class="has-mega gc_main_navigation"><a class="btn" href="https://pmny.in/AIEqYkgwh4gi" target="_blank">Donate &nbsp;</a> </li>-->

                        </ul>
                    </div>
                    <!-- mainmenu end -->
                </div>

            </div>

            <div class="rp_mobail_menu_main_wrapper d-block d-sm-block d-md-none d-lg-none d-xl-none">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="gc_logo logo_hidn d-block d-sm-block d-md-none d-lg-none d-xl-none">
                            <a href="#"><img src="<?= Yii::getAlias('@web')?>/theme/images/corona/logo.png" class="img-responsive" alt="logo"></a>
                        </div>
                    </div>

                    <div class="col-xl-6  d-block d-sm-block d-md-none d-lg-none d-xl-none">
                        <div id="toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                    <g>
                                        <g>
                                            <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#5271e4" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#5271e4" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#5271e4" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#5271e4" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#5271e4" />
                                        </g>
                                    </g>
                                </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sidebar">
                <h1>Covid 19 <span>Italy</span></h1>
                <div id="toggle_close">&times;</div>
                <div id='cssmenu' class="wd_single_index_menu">
                    <ul>
                        <li>
                          <?= Html::a('Home', ['site/index']) ?>
                        </li>
                        <li>
                        <?= Html::a('Corona', ['site/corona']) ?>
                        </li>
                        <li>
                         <?= Html::a('contact us', ['site/contact']) ?>
                        </li>
                    
<!--                        <li class="has-mega gc_main_navigation"><a class="btn" href="https://pmny.in/AIEqYkgwh4gi" target="_blank">Donate</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $content ?>

<!-- footer wrapper start-->
<div class="footer_wrapper">
    <div class="container">
        <div class="box_1_wrapper">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="address_main">
                        <div class="footer_widget_add">
                            <a href="<?='/'?>"><img src="<?= Yii::getAlias('@web')?>/theme/images/corona/index_2_logo.png" class="img-responsive" alt="footer_logo" /></a>

                        </div>
                        <div class="footer_box_add">
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Address : </span> Roma,Italy</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span>Email :</span>support@covid-19-italy.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer_1-->
        <div class="booking_box_div">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="footer_main_wrapper">
                        <div class="row">

                            <!--footer_2-->
                            <div class="col-xl-12 col-lg-12 col-md-21 col-sm-12 col-12 respons_footer_nav d-none d-sm-none d-md-block">
                                <div class="footer_heading footer_menu">
                                    <h1 class="med_bottompadder10">Links</h1>
                                    <img src="<?= Yii::getAlias('@web')?>/theme/images/line.png" class="img-responsive" alt="img" />
                                </div>
                                <div class="footer_ul_wrapper">

                                    <ul class="list-inline">
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                            <?= Html::a('description', ['site/description']) ?>
                                        </li>
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                            <?= Html::a('privacy policy', ['site/privacy-policy']) ?>
                                        </li>
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                            <?= Html::a('terms-conditions', ['site/terms-and-conditions']) ?>
                                        </li>
<!--                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">donate</a></li>-->
                                    </ul>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="footer_botm_wrapper">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="bottom_footer_copy_wrapper">
                                    <span>Copyright © 2020 -  <a href="#">covid-19-italy.org</span>
                                </div>
                                <div class="footer_btm_icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer_5-->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="up_wrapper">
                <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<!--footer wrapper end-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


