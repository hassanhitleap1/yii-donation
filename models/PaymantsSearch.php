<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Paymants;

/**
 * PaymantsSearch represents the model behind the search form of `app\models\Paymants`.
 */
class PaymantsSearch extends Paymants
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['cc_first_name', 'cc_last_name', 'cc_phone_number', 'phone_number', 'email', 'billing_address', 'city', 'state', 'postal_code', 'country', 'address_shipping', 'city_shipping', 'state_shipping', 'postal_code_shipping', 'country_shipping', 'products_per_title', 'quantity', 'unit_price', 'other_charges', 'currency', 'title', 'msg_lang', 'reference_no', 'site_url', 'return_url', 'cms_with_version', 'created_at', 'updated_at'], 'safe'],
            [['amount', 'discount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Paymants::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'amount' => $this->amount,
            'discount' => $this->discount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'cc_first_name', $this->cc_first_name])
            ->andFilterWhere(['like', 'cc_last_name', $this->cc_last_name])
            ->andFilterWhere(['like', 'cc_phone_number', $this->cc_phone_number])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'billing_address', $this->billing_address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'postal_code', $this->postal_code])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'address_shipping', $this->address_shipping])
            ->andFilterWhere(['like', 'city_shipping', $this->city_shipping])
            ->andFilterWhere(['like', 'state_shipping', $this->state_shipping])
            ->andFilterWhere(['like', 'postal_code_shipping', $this->postal_code_shipping])
            ->andFilterWhere(['like', 'country_shipping', $this->country_shipping])
            ->andFilterWhere(['like', 'products_per_title', $this->products_per_title])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'unit_price', $this->unit_price])
            ->andFilterWhere(['like', 'other_charges', $this->other_charges])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'msg_lang', $this->msg_lang])
            ->andFilterWhere(['like', 'reference_no', $this->reference_no])
            ->andFilterWhere(['like', 'site_url', $this->site_url])
            ->andFilterWhere(['like', 'return_url', $this->return_url])
            ->andFilterWhere(['like', 'cms_with_version', $this->cms_with_version]);

        return $dataProvider;
    }
}
