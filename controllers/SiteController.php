<?php

namespace app\controllers;

use app\models\Config;
use app\models\Pages;
use app\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
       // Twocheckout::privateKey('sandbox-private-key');
        $dataModel=Config::find()->where(['id'=> 1])->one();
        $confirmed_cases=100;
        $confirmed_deaths=200;
        $quarantine_people=2100;
        if($dataModel != null){
            $confirmed_cases=$dataModel->confirmed_cases;
            $confirmed_deaths=$dataModel->confirmed_deaths;
            $quarantine_people=$dataModel->quarantine_people;
        }
        return $this->render('index',[
            'confirmed_cases'=>$confirmed_cases,
            'confirmed_deaths'=>$confirmed_deaths,
            'quarantine_people'=>$quarantine_people,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if (true) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }



    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }


    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout(){
        $page=Pages::find()->where(['key'=>'about'])->one();
        return $this->render('about',['page'=>$page]);
    }

    public function actionCorona(){
        $page=Pages::find()->where(['key'=>'corona'])->one();
        return $this->render('corona',['page'=>$page]);
    }
    public function actionDescription(){
        $page=Pages::find()->where(['key'=>'description'])->one();
        return $this->render('description',['page'=>$page]);
    }
    public function actionPrivacyPolicy(){
        $page=Pages::find()->where(['key'=>'privacy-policy'])->one();
        return $this->render('privacy-policy',['page'=>$page]);
    }
    public function actionTermsAndConditions(){
        $page=Pages::find()->where(['key'=>'terms-and-conditions'])->one();
        return $this->render('terms-and-conditions',['page'=>$page]);
    }
    public function actionPrevention(){
        $page=Pages::find()->where(['key'=>'prevention'])->one();
        return $this->render('prevention',['page'=>$page]);
    }
    public function actionSymptoms(){
        $page=Pages::find()->where(['key'=>'symptoms'])->one();
        return $this->render('symptoms',['page'=>$page]);
    }


    public  function actionDonation(){

        if($_POST){
            if(!empty($_POST['token'])){
                $token  = $_POST['token'];
                $card_num = $_POST['card_num'];
                $card_cvv = $_POST['cvv'];
                $card_exp_month = $_POST['exp_month'];
                $card_exp_year = $_POST['exp_year'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phoneNumber = '555-555-5555';
                $addrLine1 = '123 Test St';
                $city = 'Columbus';
                $state = 'OH';
                $zipCode = '43123';
                $country = 'USA';
                $itemName = 'Premium Script CodexWorld';
                $itemNumber = 'PS123456';
                $itemPrice = '25.00';
                $currency = 'USD';
                $orderID = 'SKA92712382139';
                require_once("2checkout-php/Twocheckout.php");

                // Set API key
                \Twocheckout::privateKey('sandbox-private-key');
                Twocheckout::sellerId('sandbox-seller-id');
                Twocheckout::sandbox(true);

                try {
                    // Charge a credit card
                    $charge = Twocheckout_Charge::auth(array(
                        "merchantOrderId" => $orderID,
                        "token"      => $token,
                        "currency"   => $currency,
                        "total"      => $itemPrice,
                        "billingAddr" => array(
                            "name" => $name,
                            "addrLine1" => $addrLine1,
                            "city" => $city,
                            "state" => $state,
                            "zipCode" => $zipCode,
                            "country" => $country,
                            "email" => $email,
                            "phoneNumber" => $phoneNumber
                        )
                    ));

                    // Check whether the charge is successful
                    if ($charge['response']['responseCode'] == 'APPROVED') {

                        // Order details
                        $orderNumber = $charge['response']['orderNumber'];
                        $total = $charge['response']['total'];
                        $transactionId = $charge['response']['transactionId'];
                        $currency = $charge['response']['currencyCode'];
                        $status = $charge['response']['responseCode'];

                        // Include database config file


                        // Insert order info to database
                        $sql = "INSERT INTO orders(name, email, card_num, card_cvv, card_exp_month, card_exp_year, item_name, item_number, item_price, currency, paid_amount, order_number, txn_id, payment_status, created, modified) VALUES('".$name."', '".$email."', '".$card_num."', '".$card_cvv."', '".$card_exp_month."', '".$card_exp_year."', '".$itemName."', '".$itemNumber."','".$itemPrice."', '".$currency."', '".$total."', '".$orderNumber."', '".$transactionId."', '".$status."', NOW(), NOW())";
                        $insert = $db->query($sql);
                        $insert_id = $db->insert_id;

                        $statusMsg = '<h2>Thanks for your Order!</h2>';
                        $statusMsg .= '<h4>The transaction was successful. Order details are given below:</h4>';
                        $statusMsg .= "<p>Order ID: {$insert_id}</p>";
                        $statusMsg .= "<p>Order Number: {$orderNumber}</p>";
                        $statusMsg .= "<p>Transaction ID: {$transactionId}</p>";
                        $statusMsg .= "<p>Order Total: {$total} {$currency}</p>";
                    }
                } catch (Twocheckout_Error $e) {
                    $statusMsg = '<h2>Transaction failed!</h2>';
                    $statusMsg .= '<p>'.$e->getMessage().'</p>';
                }

            }else{
                $statusMsg = "<p>Form submission error...</p>";
            }
        }
        return $this->render('donation');
    }




}
