<?php

namespace app\models;

use Carbon\Carbon;
use Yii;

/**
 * This is the model class for table "{{%config}}".
 *
 * @property int $id
 * @property int|null $confirmed_cases
 * @property int|null $confirmed_deaths
 * @property int|null $quarantine_people
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%config}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['confirmed_cases', 'confirmed_deaths', 'quarantine_people'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'confirmed_cases' => Yii::t('app', 'Confirmed Cases'),
            'confirmed_deaths' => Yii::t('app', 'Confirmed Deaths'),
            'quarantine_people' => Yii::t('app', 'Quarantine People'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }


    /**
     * @param bool $insert
     * @return bool
     */
    public function beforeSave($insert)
    {
        $now=Carbon::now("Asia/Amman");
        if (parent::beforeSave($insert)) {
            // Place your custom code here
            if($this->isNewRecord){
                $this->created_at =$now;
            }else{
                $this->updated_at = $now;
            }

            return true;
        } else {
            return false;
        }
    }
    /**
     * {@inheritdoc}
     * @return ConfigQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ConfigQuery(get_called_class());
    }
}
