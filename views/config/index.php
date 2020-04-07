<?php

use app\models\Config;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'config';
$this->params['breadcrumbs'][] = $this->title;

/* @var $this yii\web\View */
/* @var $model app\models\Config */
/* @var $form yii\widgets\ActiveForm */
$dataModel=Config::find()->where(['id'=> 1])->one();
if($dataModel==null){
    $confirmed_cases=100;
    $confirmed_deaths=200;
    $quarantine_people=2100;
}else{
    $confirmed_cases=$dataModel->confirmed_cases;
    $confirmed_deaths=$dataModel->confirmed_deaths;
    $quarantine_people=$dataModel->quarantine_people;
}

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
                    <h1 class="med_bottompadder20"><?= Html::encode($this->title) ?>.</h1>
                    <img src="<?= Yii::getAlias('@web')?>/theme/images/line.png" alt="title" class="med_bottompadder20">
                </div>
                <div class="abt_txt">
                    <p class="med_toppadder20">



                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'confirmed_cases')->textInput(['value'=>$confirmed_cases]) ?>

                    <?= $form->field($model, 'confirmed_deaths')->textInput(['value'=>$confirmed_deaths]) ?>

                    <?= $form->field($model, 'quarantine_people')->textInput(['value'=>$quarantine_people]) ?>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>

            </div>
        </div>
    </div>
</div>
