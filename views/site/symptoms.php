<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;


$this->title = 'symptoms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="med_tittle_section">
    <div class="med_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="med_tittle_cont_wrapper">
                    <div class="med_tittle_cont">
                        <h1><?= Html::encode($this->title) ?></h1>
                        <ol class="breadcrumb">
                            <li>
                                <?= Html::a('Home', ['site/index']) ?>
                            </li>
                            <li><?= Html::encode($this->title) ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- med_tittle_section End -->
<!--about us section start-->
<div class="about_us_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_img">
                    <img src="<?= Yii::getAlias('@web')?>/theme/images/corona/about_us_bg.jpg" alt="img" class="img-responsive">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 med_toppadder70">
                <div class="abt_heading_wrapper abt_2_heading">
                    <h1 class="med_bottompadder20">About Corona Virus.</h1>
                    <img src="<?= Yii::getAlias('@web')?>/theme/images/line.png" alt="title" class="med_bottompadder20">
                </div>
                <div class="abt_txt">
                    <h3>PERSON-TO-PERSON SPREAD</h3>
                    <p class="med_toppadder20">COVID-19 virus named Corona disease is an infectious disease caused by a new virus. The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.</p>

                    <p class="med_toppadder20">Coronaviruses are a large group of viruses that cause diseases in humans. The viruses can cause mild respiratory infections in humans, such as the common cold, which may lead to severe illnesses, such as pneumonia. There is currently no vaccine to prevent coronavirus disease in 2019 (COVID-19).</p>

                </div>
                <div class="abt_chk med_toppadder30 abt_txt">
                    <h3>How to protect</h3>
                    <div class="content">
                        <ul>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Wash Your Hands For 20sec.</span>
                            </li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Mouth When Sneezing.</span>
                            </li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Wear a Mask if Available.</span>
                            </li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Spread From Contact</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

