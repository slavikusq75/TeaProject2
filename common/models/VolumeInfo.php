<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "volume_info".
 *
 * @property integer $id
 * @property integer $value
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $goods_purchased_id
 *
 * @property OutgoingGoodsPurchasedSort[] $outgoingGoodsPurchasedSorts
 * @property ReceivingGoodsPurchasedSort[] $receivingGoodsPurchasedSorts
 * @property User $user
 * @property GoodsPurchased $goodsPurchased
 */
class VolumeInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'volume_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'value', 'created_at', 'updated_at', 'user_id', 'goods_purchased_id'], 'required'],
            [['id', 'value', 'created_at', 'updated_at', 'user_id', 'goods_purchased_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['goods_purchased_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchased::className(), 'targetAttribute' => ['goods_purchased_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'goods_purchased_id' => 'Goods Purchased ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutgoingGoodsPurchasedSorts()
    {
        return $this->hasMany(OutgoingGoodsPurchasedSort::className(), ['volume_info_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivingGoodsPurchasedSorts()
    {
        return $this->hasMany(ReceivingGoodsPurchasedSort::className(), ['volume_info_id' => 'id']);
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
}
