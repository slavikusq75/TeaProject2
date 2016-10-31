<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "receiving_goods_purchased_sort".
 *
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $quantity
 * @property integer $receiving_price
 * @property integer $user_id
 * @property integer $goods_purchased_id
 * @property integer $goods_purchased_sort_id
 * @property integer $provider_id
 * @property integer $departament_id
 * @property integer $volume_info_id
 *
 * @property User $user
 * @property GoodsPurchased $goodsPurchased
 * @property GoodsPurchasedSort $goodsPurchasedSort
 * @property Provider $provider
 * @property Departament $departament
 * @property VolumeInfo $volumeInfo
 */
class ReceivingGoodsPurchasedSort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'receiving_goods_purchased_sort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'quantity', 'receiving_price', 'user_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'provider_id', 'departament_id', 'volume_info_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'quantity', 'receiving_price', 'user_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'provider_id', 'departament_id', 'volume_info_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['goods_purchased_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchased::className(), 'targetAttribute' => ['goods_purchased_id' => 'id']],
            [['goods_purchased_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchasedSort::className(), 'targetAttribute' => ['goods_purchased_sort_id' => 'id']],
            [['provider_id'], 'exist', 'skipOnError' => true, 'targetClass' => Provider::className(), 'targetAttribute' => ['provider_id' => 'id']],
            [['departament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departament::className(), 'targetAttribute' => ['departament_id' => 'id']],
            [['volume_info_id'], 'exist', 'skipOnError' => true, 'targetClass' => VolumeInfo::className(), 'targetAttribute' => ['volume_info_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'quantity' => 'Quantity',
            'receiving_price' => 'Receiving Price',
            'user_id' => 'User ID',
            'goods_purchased_id' => 'Goods Purchased ID',
            'goods_purchased_sort_id' => 'Goods Purchased Sort ID',
            'provider_id' => 'Provider ID',
            'departament_id' => 'Departament ID',
            'volume_info_id' => 'Volume Info ID',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvider()
    {
        return $this->hasOne(Provider::className(), ['id' => 'provider_id']);
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
    public function getVolumeInfo()
    {
        return $this->hasOne(VolumeInfo::className(), ['id' => 'volume_info_id']);
    }
}
