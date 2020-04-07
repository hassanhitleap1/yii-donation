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


}
