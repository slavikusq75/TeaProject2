<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "outgoing_goods_purchased_sort".
 *
 * @property integer $id
 * @property integer $quantity
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $selling_our_goods_sort_id
 * @property integer $goods_purchased_id
 * @property integer $goods_purchased_sort_id
 * @property integer $volume_info_id
 * @property integer $departament_id
 *
 * @property User $user
 * @property SellingOurGoodsSort $sellingOurGoodsSort
 * @property GoodsPurchased $goodsPurchased
 * @property GoodsPurchasedSort $goodsPurchasedSort
 * @property VolumeInfo $volumeInfo
 * @property Departament $departament
 */
class OutgoingGoodsPurchasedSort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'outgoing_goods_purchased_sort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'created_at', 'updated_at', 'user_id', 'selling_our_goods_sort_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'volume_info_id', 'departament_id'], 'required'],
            [['id', 'quantity', 'created_at', 'updated_at', 'user_id', 'selling_our_goods_sort_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'volume_info_id', 'departament_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['selling_our_goods_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => SellingOurGoodsSort::className(), 'targetAttribute' => ['selling_our_goods_sort_id' => 'id']],
            [['goods_purchased_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchased::className(), 'targetAttribute' => ['goods_purchased_id' => 'id']],
            [['goods_purchased_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchasedSort::className(), 'targetAttribute' => ['goods_purchased_sort_id' => 'id']],
            [['volume_info_id'], 'exist', 'skipOnError' => true, 'targetClass' => VolumeInfo::className(), 'targetAttribute' => ['volume_info_id' => 'id']],
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
            'quantity' => 'Quantity',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'selling_our_goods_sort_id' => 'Selling Our Goods Sort ID',
            'goods_purchased_id' => 'Goods Purchased ID',
            'goods_purchased_sort_id' => 'Goods Purchased Sort ID',
            'volume_info_id' => 'Volume Info ID',
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
    public function getSellingOurGoodsSort()
    {
        return $this->hasOne(SellingOurGoodsSort::className(), ['id' => 'selling_our_goods_sort_id']);
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
    public function getVolumeInfo()
    {
        return $this->hasOne(VolumeInfo::className(), ['id' => 'volume_info_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartament()
    {
        return $this->hasOne(Departament::className(), ['id' => 'departament_id']);
    }
}
