<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Paymants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paymants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cc_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cc_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cc_phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billing_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_shipping')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_shipping')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state_shipping')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postal_code_shipping')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_shipping')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'products_per_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_charges')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'msg_lang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reference_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'return_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cms_with_version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
