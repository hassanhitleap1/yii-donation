<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('app', 'Donation');
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
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
                                <?= Html::a(Yii::t('app', 'Home'), ['site/index']) ?>
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
                    <h1 class="med_bottompadder20"><?=Yii::t('app', 'Donation')?></h1>
                    <img src="<?= Yii::getAlias('@web')?>/theme/images/line.png" alt="title" class="med_bottompadder20">
                </div>
                <?php if (Yii::$app->session->hasFlash('success_donate')): ?>


                <?php else: ?>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1 dc_cont_div">

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1 dc_cont_div">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1 dc_cont_div">

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="contect_form1 dc_cont_div">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="contect_form1 dc_cont_div">

                            </div>
                        </div>

                    </div>



                    <div class="form-group">

                    </div>




                <?php endif; ?>
            </div>
        </div>

    </div>
</div>


<div class="payment-frm">
    <h5>Charge $25 USD with 2Checkout</h5>

    <!-- credit card form -->
    <form id="paymentFrm" method="post" action="paymentSubmit.php">
        <div>
            <label>NAME</label>
            <input type="text" name="name" id="name" placeholder="Enter name" required autofocus>
        </div>
        <div>
            <label>EMAIL</label>
            <input type="email" name="email" id="email" placeholder="Enter email" required>
        </div>
        <div>
            <label>CARD NUMBER</label>
            <input type="text" name="card_num" id="card_num" placeholder="Enter card number" autocomplete="off" required>
        </div>
        <div>
            <label><span>EXPIRY DATE</span></label>
            <input type="number" name="exp_month" id="exp_month" placeholder="MM" required>
            <input type="number" name="exp_year" id="exp_year" placeholder="YY" required>
        </div>
        <div>
            <label>CVV</label>
            <input type="number" name="cvv" id="cvv" autocomplete="off" required>
        </div>

        <!-- hidden token input -->
        <input id="token" name="token" type="hidden" value="">

        <!-- submit button -->
        <input type="submit" class="btn btn-success" value="Submit Payment">
    </form>
</div>



