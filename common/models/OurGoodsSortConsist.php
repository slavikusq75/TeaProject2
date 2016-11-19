<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "our_goods_sort_consist".
 *
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $volume_info_id
 * @property integer $quantity
 * @property integer $user_id
 * @property integer $our_goods_id
 * @property integer $our_goods_sort_id
 * @property integer $goods_purchased_id
 * @property integer $goods_purchased_sort_id
 * @property integer $coffeemachine_container_id
 * @property integer $our_goods_sort_volume_info_id
 *
 * @property User $user
 * @property OurGoods $ourGoods
 * @property OurGoodsSort $ourGoodsSort
 * @property GoodsPurchased $goodsPurchased
 * @property GoodsPurchasedSort $goodsPurchasedSort
 * @property CoffeemachineContainer $coffeemachineContainer
 * @property OurGoodsSortVolumeInfo $ourGoodsSortVolumeInfo
 */
class OurGoodsSortConsist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'our_goods_sort_consist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'volume_info_id', 'quantity', 'user_id', 'our_goods_id', 'our_goods_sort_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'coffeemachine_container_id', 'our_goods_sort_volume_info_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'volume_info_id', 'quantity', 'user_id', 'our_goods_id', 'our_goods_sort_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'coffeemachine_container_id', 'our_goods_sort_volume_info_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['our_goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoods::className(), 'targetAttribute' => ['our_goods_id' => 'id']],
            [['our_goods_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoodsSort::className(), 'targetAttribute' => ['our_goods_sort_id' => 'id']],
            [['goods_purchased_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchased::className(), 'targetAttribute' => ['goods_purchased_id' => 'id']],
            [['goods_purchased_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchasedSort::className(), 'targetAttribute' => ['goods_purchased_sort_id' => 'id']],
            [['coffeemachine_container_id'], 'exist', 'skipOnError' => true, 'targetClass' => CoffeemachineContainer::className(), 'targetAttribute' => ['coffeemachine_container_id' => 'id']],
            [['our_goods_sort_volume_info_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoodsSortVolumeInfo::className(), 'targetAttribute' => ['our_goods_sort_volume_info_id' => 'id']],
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
            'volume_info_id' => 'Volume Info ID',
            'quantity' => 'Quantity',
            'user_id' => 'User ID',
            'our_goods_id' => 'Our Goods ID',
            'our_goods_sort_id' => 'Our Goods Sort ID',
            'goods_purchased_id' => 'Goods Purchased ID',
            'goods_purchased_sort_id' => 'Goods Purchased Sort ID',
            'coffeemachine_container_id' => 'Coffeemachine Container ID',
            'our_goods_sort_volume_info_id' => 'Our Goods Sort Volume Info ID',
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
    public function getOurGoods()
    {
        return $this->hasOne(OurGoods::className(), ['id' => 'our_goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSort()
    {
        return $this->hasOne(OurGoodsSort::className(), ['id' => 'our_goods_sort_id']);
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
    public function getCoffeemachineContainer()
    {
        return $this->hasOne(CoffeemachineContainer::className(), ['id' => 'coffeemachine_container_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSortVolumeInfo()
    {
        return $this->hasOne(OurGoodsSortVolumeInfo::className(), ['id' => 'our_goods_sort_volume_info_id']);
    }
}
