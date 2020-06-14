<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymantsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paymants-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cc_first_name') ?>

    <?= $form->field($model, 'cc_last_name') ?>

    <?= $form->field($model, 'cc_phone_number') ?>

    <?= $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'billing_address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'postal_code') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'address_shipping') ?>

    <?php // echo $form->field($model, 'city_shipping') ?>

    <?php // echo $form->field($model, 'state_shipping') ?>

    <?php // echo $form->field($model, 'postal_code_shipping') ?>

    <?php // echo $form->field($model, 'country_shipping') ?>

    <?php // echo $form->field($model, 'products_per_title') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'unit_price') ?>

    <?php // echo $form->field($model, 'other_charges') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'msg_lang') ?>

    <?php // echo $form->field($model, 'reference_no') ?>

    <?php // echo $form->field($model, 'site_url') ?>

    <?php // echo $form->field($model, 'return_url') ?>

    <?php // echo $form->field($model, 'cms_with_version') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
