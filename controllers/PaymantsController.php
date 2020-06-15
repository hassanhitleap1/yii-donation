<?php

namespace app\controllers;

use app\components\Paytabs;
use Yii;
use app\models\Paymants;
use app\models\PaymantsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PaymantsController implements the CRUD actions for Paymants model.
 */
class PaymantsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Paymants models.
     * @return mixed
     */
    public function actionIndex()
    {
        // $searchModel = new PaymantsSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);

        $pt = new Paytabs("hassankiwan92@gmail.com",
         "NT5JfmP0yEy209afJL7mJZXfXGoG34GQXMAd8pdH4MJ4VUjEGr1qqZGoF45I9Mz6y9kHzxoDj8Hf30TKsVaTUQhAVni49SbH1vpA");

       // $result = $pt->authentication();
        
        // print_r($result);

        $result = $pt->create_pay_page(array(
            //Customer's Personal Information
            'merchant_email' => "test@paytabs.com",
            'secret_key' => "nNqPdDtMxoj6ZxHOcqvejQk2v3YFlTNIGeyUS1Gpq0vqxdeJDKYXAiZ6lYLGRzpyNXsFZ95q9AQHO5rrPpoqIow4niLeRbNF8gk8",
            'cc_first_name' => "john",          //This will be prefilled as Credit Card First Name
            'cc_last_name' => "Doe",            //This will be prefilled as Credit Card Last Name
            'cc_phone_number' => "00973",
            'phone_number' => "33333333",
            'email' => "customer@gmail.com",
            
            //Customer's Billing Address (All fields are mandatory)
            //When the country is selected as USA or CANADA, the state field should contain a String of 2 characters containing the ISO state code otherwise the payments may be rejected. 
            //For other countries, the state can be a string of up to 32 characters.
            'billing_address' => "manama bahrain",
            'city' => "manama",
            'state' => "manama",
            'postal_code' => "00973",
            'country' => "BHR",
            
            //Customer's Shipping Address (All fields are mandatory)
            'address_shipping' => "Juffair bahrain",
            'city_shipping' => "manama",
            'state_shipping' => "manama",
            'postal_code_shipping' => "00973",
            'country_shipping' => "BHR",
           
           //Product Information
            "products_per_title" => "Product1 || Product 2 || Product 4",   //Product title of the product. If multiple products then add “||” separator
            'quantity' => "1 || 1 || 1",                                    //Quantity of products. If multiple products then add “||” separator
            'unit_price' => "2 || 2 || 6",                                  //Unit price of the product. If multiple products then add “||” separator.
            "other_charges" => "91.00",                                     //Additional charges. e.g.: shipping charges, taxes, VAT, etc.
            
            'amount' => "101.00",                                          //Amount of the products and other charges, it should be equal to: amount = (sum of all products’ (unit_price * quantity)) + other_charges
            'discount'=>"1",                                                //Discount of the transaction. The Total amount of the invoice will be= amount - discount
            'currency' => "USD",                                            //Currency of the amount stated. 3 character ISO currency code 
           
        
            
            //Invoice Information
            'title' => "John Doe",               // Customer's Name on the invoice
            "msg_lang" => "en",                 //Language of the PayPage to be created. Invalid or blank entries will default to English.(Englsh/Arabic)
            "reference_no" => "1231231",        //Invoice reference number in your system
           
            
            //Website Information
            "site_url" => "http://www.vatable.com",      //The requesting website be exactly the same as the website/URL associated with your PayTabs Merchant Account
            'return_url' => "http://localhost/expressv2/successredirect.php",
            "cms_with_version" => "API USING PHP",
        
            "paypage_info" => "1"
        ));
        
        echo "FOLLOWING IS THE RESPONSE: <br />";
        print_r ($result);



    }

    /**
     * Displays a single Paymants model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Paymants model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Paymants();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $pt = new Paytabs("test@paytabs.com", "nNqPdDtMxoj6ZxHOcqvejQk2v3YFlTNIGeyUS1Gpq0vqxdeJDKYXAiZ6lYLGRzpyNXsFZ95q9AQHO5rrPpoqIow4niLeRbNF8gk8");
            $result = $pt->create_pay_page(array(

                'merchant_email' => "test@paytabs.com",
                'secret_key' => "nNqPdDtMxoj6ZxHOcqvejQk2v3YFlTNIGeyUS1Gpq0vqxdeJDKYXAiZ6lYLGRzpyNXsFZ95q9AQHO5rrPpoqIow4niLeRbNF8gk8",
                'cc_first_name' => $model->cc_first_name,          
                'cc_last_name' => $model->cc_last_name,            
                'cc_phone_number' =>  $model->cc_phone_number,   
                'phone_number' =>  $model->phone_number, 
                'email' => $model->email, 
                'billing_address' => $model->billing_address, 
                'city' => $model->city, 
                'state' => $model->state, 
                'postal_code' =>$model->postal_code,
                'country' => $model->country,
                'address_shipping' => $model->address_shipping,
                'city_shipping' => $model->city_shipping,
                'state_shipping' =>$model->state_shipping,
                'postal_code_shipping' => $model->postal_code_shipping,
                'country_shipping' => $model->country_shipping,
                "products_per_title" => $model->products_per_title,   //Product title of the product. If multiple products then add “||” separator
                'quantity' => $model->quantity,                                //Quantity of products. If multiple products then add “||” separator
                'unit_price' =>$model->unit_price,                                //Unit price of the product. If multiple products then add “||” separator.
                "other_charges" => $model->other_charges,                                   //Additional charges. e.g.: shipping charges, taxes, VAT, etc.
                'amount' =>$model->amount,                                        //Amount of the products and other charges, it should be equal to: amount = (sum of all products’ (unit_price * quantity)) + other_charges
                'discount'=>$model->discount,                                           //Discount of the transaction. The Total amount of the invoice will be= amount - discount
                'currency' => $model->currency,                                    
            
                'title' =>$model->title,               // Customer's Name on the invoice
                "msg_lang" => $model->msg_lang,             //Language of the PayPage to be created. Invalid or blank entries will default to English.(Englsh/Arabic)
                "reference_no" => $model->reference_no,       //Invoice reference number in your system
               
                
                //Website Information
                "site_url" => $model->site_url,      //The requesting website be exactly the same as the website/URL associated with your PayTabs Merchant Account
                'return_url' =>$model->return_url,
                "cms_with_version" => $model->cms_with_version,
            
                "paypage_info"  => $model->paypage_info,
            ));
            
            echo "FOLLOWING IS THE RESPONSE: <br />";
            print_r ($result);
                 exit;

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Paymants model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Paymants model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Paymants model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Paymants the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Paymants::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
