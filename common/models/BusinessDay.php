<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "business_day".
 *
 * @property integer $id
 * @property string $begining_balance
 * @property string $end_balance
 * @property string $debit
 * @property string $credit
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $business_day_act_number
 * @property integer $business_day_act_date
 * @property integer $departament_id
 *
 * @property User $user
 * @property Departament $departament
 */
class BusinessDay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'business_day';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'begining_balance', 'end_balance', 'debit', 'credit', 'created_at', 'updated_at', 'user_id', 'business_day_act_number', 'business_day_act_date', 'departament_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'user_id', 'business_day_act_number', 'business_day_act_date', 'departament_id'], 'integer'],
            [['begining_balance', 'end_balance', 'debit', 'credit'], 'number'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['departament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departament::className(), 'targetAttribute' => ['departament_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'begining_balance' => 'Begining Balance',
            'end_balance' => 'End Balance',
            'debit' => 'Debit',
            'credit' => 'Credit',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'business_day_act_number' => 'Business Day Act Number',
            'business_day_act_date' => 'Business Day Act Date',
            'departament_id' => 'Departament ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartament()
    {
        return $this->hasOne(Departament::className(), ['id' => 'departament_id']);
    }
}
