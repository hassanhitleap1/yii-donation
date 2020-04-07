<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
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

<!--contact us section start -->
<div class="contact_us_section med_toppadder100 med_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="choose_heading_wrapper med_bottompadder30">
                    <h1 class="med_bottompadder20">Contact us</h1>
                    <img src="<?= Yii::getAlias('@web')?>/theme/images/line.png" alt="title" class="med_bottompadder20">
                </div>
                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>


                <?php else: ?>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form1 dc_cont_div">
                            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="contect_form1 dc_cont_div">
                            <?= $form->field($model, 'email') ?>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1 dc_cont_div">
                                <?= $form->field($model, 'subject') ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1 dc_cont_div">
                                <?= $form->field($model, 'phone') ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="contect_form1 dc_cont_div">
                                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                            </div>
                        </div>

                    </div>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>


                <?php endif; ?>
            </div>
        </div>

    </div>
</div>



