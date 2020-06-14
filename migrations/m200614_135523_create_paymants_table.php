<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%paymants}}`.
 */
class m200614_135523_create_paymants_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%paymants}}', [
            'id' => $this->primaryKey(),
            'cc_first_name' =>$this->string(),      
            'cc_last_name'=>$this->string(),          
            'cc_phone_number' =>$this->string(),
            'phone_number'=>$this->string(),
            'email' =>$this->string(),
            'billing_address' =>$this->string(),
            'city'=>$this->string(),
            'state'=>$this->string(),
            'postal_code'=>$this->string(),
            'country' =>$this->string(),
            'address_shipping'=>$this->string(),
            'city_shipping' =>$this->string(),
            'state_shipping' => $this->string(),
            'postal_code_shipping' => $this->string(),
            'country_shipping' => $this->string(),
            "products_per_title"=> $this->string(),
            'quantity' =>$this->string(),                                
            'unit_price'=> $this->string(),                               
            "other_charges" => $this->string(),                                    
            'amount' => $this->float(),                                         
            'discount'=> $this->float(),                                               
            'currency' => $this->string(),                                            
            'title' => $this->string(),               
            "msg_lang" => $this->string(),          
            "reference_no" => $this->string(),       
            "site_url" => $this->string(),      
            'return_url' => $this->string(),  
            "cms_with_version" => $this->string(),  
            "created_at"=>$this->dateTime(),
            "updated_at"=>$this->dateTime(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%paymants}}');
    }
}
