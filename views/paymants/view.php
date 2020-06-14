<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Paymants */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Paymants'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="paymants-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cc_first_name',
            'cc_last_name',
            'cc_phone_number',
            'phone_number',
            'email:email',
            'billing_address',
            'city',
            'state',
            'postal_code',
            'country',
            'address_shipping',
            'city_shipping',
            'state_shipping',
            'postal_code_shipping',
            'country_shipping',
            'products_per_title',
            'quantity',
            'unit_price',
            'other_charges',
            'amount',
            'discount',
            'currency',
            'title',
            'msg_lang',
            'reference_no',
            'site_url:url',
            'return_url:url',
            'cms_with_version',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
