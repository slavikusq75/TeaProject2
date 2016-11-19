<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cash_transaction".
 *
 * @property integer $id
 * @property string $cash_in
 * @property string $cash_out
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $cash_transaction_reason_id
 * @property integer $departament_id
 *
 * @property User $user
 * @property CashTransactionReason $cashTransactionReason
 * @property Departament $departament
 * @property SellingOurGoodsSort[] $sellingOurGoodsSorts
 */
class CashTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cash_transaction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cash_in', 'cash_out', 'created_at', 'updated_at', 'user_id', 'cash_transaction_reason_id', 'departament_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'user_id', 'cash_transaction_reason_id', 'departament_id'], 'integer'],
            [['cash_in', 'cash_out'], 'number'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['cash_transaction_reason_id'], 'exist', 'skipOnError' => true, 'targetClass' => CashTransactionReason::className(), 'targetAttribute' => ['cash_transaction_reason_id' => 'id']],
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
            'cash_in' => 'Cash In',
            'cash_out' => 'Cash Out',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'cash_transaction_reason_id' => 'Cash Transaction Reason ID',
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
    public function getCashTransactionReason()
    {
        return $this->hasOne(CashTransactionReason::className(), ['id' => 'cash_transaction_reason_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartament()
    {
        return $this->hasOne(Departament::className(), ['id' => 'departament_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSellingOurGoodsSorts()
    {
        return $this->hasMany(SellingOurGoodsSort::className(), ['cash_transaction_id' => 'id']);
    }
}
