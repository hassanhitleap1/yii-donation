<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'description';
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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 med_toppadder70">
                <div class="abt_heading_wrapper abt_2_heading">
                    <h1 class="med_bottompadder20"><?= Html::encode($page->title) ?>.</h1>
                    <img src="<?= Yii::getAlias('@web')?>/theme/images/line.png" alt="title" class="med_bottompadder20">
                </div>
                <div class="abt_txt">
                    <p class="med_toppadder20">
                        <?= $page->body?>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

