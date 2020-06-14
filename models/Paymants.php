<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%paymants}}".
 *
 * @property int $id
 * @property string|null $cc_first_name
 * @property string|null $cc_last_name
 * @property string|null $cc_phone_number
 * @property string|null $phone_number
 * @property string|null $email
 * @property string|null $billing_address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $postal_code
 * @property string|null $country
 * @property string|null $address_shipping
 * @property string|null $city_shipping
 * @property string|null $state_shipping
 * @property string|null $postal_code_shipping
 * @property string|null $country_shipping
 * @property string|null $products_per_title
 * @property string|null $quantity
 * @property string|null $unit_price
 * @property string|null $other_charges
 * @property float|null $amount
 * @property float|null $discount
 * @property string|null $currency
 * @property string|null $title
 * @property string|null $msg_lang
 * @property string|null $reference_no
 * @property string|null $site_url
 * @property string|null $return_url
 * @property string|null $cms_with_version
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Paymants extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%paymants}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount', 'discount'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['cc_first_name', 'cc_last_name', 'cc_phone_number', 'phone_number', 'email', 'billing_address', 'city', 'state', 'postal_code', 'country', 'address_shipping', 'city_shipping', 'state_shipping', 'postal_code_shipping', 'country_shipping', 'products_per_title', 'quantity', 'unit_price', 'other_charges', 'currency', 'title', 'msg_lang', 'reference_no', 'site_url', 'return_url', 'cms_with_version'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'cc_first_name' => Yii::t('app', 'Cc First Name'),
            'cc_last_name' => Yii::t('app', 'Cc Last Name'),
            'cc_phone_number' => Yii::t('app', 'Cc Phone Number'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'email' => Yii::t('app', 'Email'),
            'billing_address' => Yii::t('app', 'Billing Address'),
            'city' => Yii::t('app', 'City'),
            'state' => Yii::t('app', 'State'),
            'postal_code' => Yii::t('app', 'Postal Code'),
            'country' => Yii::t('app', 'Country'),
            'address_shipping' => Yii::t('app', 'Address Shipping'),
            'city_shipping' => Yii::t('app', 'City Shipping'),
            'state_shipping' => Yii::t('app', 'State Shipping'),
            'postal_code_shipping' => Yii::t('app', 'Postal Code Shipping'),
            'country_shipping' => Yii::t('app', 'Country Shipping'),
            'products_per_title' => Yii::t('app', 'Products Per Title'),
            'quantity' => Yii::t('app', 'Quantity'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'other_charges' => Yii::t('app', 'Other Charges'),
            'amount' => Yii::t('app', 'Amount'),
            'discount' => Yii::t('app', 'Discount'),
            'currency' => Yii::t('app', 'Currency'),
            'title' => Yii::t('app', 'Title'),
            'msg_lang' => Yii::t('app', 'Msg Lang'),
            'reference_no' => Yii::t('app', 'Reference No'),
            'site_url' => Yii::t('app', 'Site Url'),
            'return_url' => Yii::t('app', 'Return Url'),
            'cms_with_version' => Yii::t('app', 'Cms With Version'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PaymantsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PaymantsQuery(get_called_class());
    }
}
