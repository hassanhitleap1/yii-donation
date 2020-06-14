<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymantsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Paymants');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paymants-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Paymants'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cc_first_name',
            'cc_last_name',
            'cc_phone_number',
            'phone_number',
            //'email:email',
            //'billing_address',
            //'city',
            //'state',
            //'postal_code',
            //'country',
            //'address_shipping',
            //'city_shipping',
            //'state_shipping',
            //'postal_code_shipping',
            //'country_shipping',
            //'products_per_title',
            //'quantity',
            //'unit_price',
            //'other_charges',
            //'amount',
            //'discount',
            //'currency',
            //'title',
            //'msg_lang',
            //'reference_no',
            //'site_url:url',
            //'return_url:url',
            //'cms_with_version',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
