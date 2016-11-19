<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $id
 * @property integer $actual_balance
 * @property integer $account_balance
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $inventory_act_number
 * @property integer $inventory_act_date
 * @property integer $user_id
 * @property integer $goods_purchased_id
 * @property integer $goods_purchased_sort_id
 *
 * @property User $user
 * @property GoodsPurchased $goodsPurchased
 * @property GoodsPurchasedSort $goodsPurchasedSort
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'actual_balance', 'account_balance', 'created_at', 'updated_at', 'inventory_act_number', 'inventory_act_date', 'user_id', 'goods_purchased_id', 'goods_purchased_sort_id'], 'required'],
            [['id', 'actual_balance', 'account_balance', 'created_at', 'updated_at', 'inventory_act_number', 'inventory_act_date', 'user_id', 'goods_purchased_id', 'goods_purchased_sort_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['goods_purchased_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchased::className(), 'targetAttribute' => ['goods_purchased_id' => 'id']],
            [['goods_purchased_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchasedSort::className(), 'targetAttribute' => ['goods_purchased_sort_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'actual_balance' => 'Actual Balance',
            'account_balance' => 'Account Balance',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'inventory_act_number' => 'Inventory Act Number',
            'inventory_act_date' => 'Inventory Act Date',
            'user_id' => 'User ID',
            'goods_purchased_id' => 'Goods Purchased ID',
            'goods_purchased_sort_id' => 'Goods Purchased Sort ID',
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
    public function getGoodsPurchased()
    {
        return $this->hasOne(GoodsPurchased::className(), ['id' => 'goods_purchased_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodsPurchasedSort()
    {
        return $this->hasOne(GoodsPurchasedSort::className(), ['id' => 'goods_purchased_sort_id']);
    }
}
