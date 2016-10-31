<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "price_our_goods_sort".
 *
 * @property integer $id
 * @property integer $price
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $our_goods_id
 * @property integer $our_goods_sort_id
 * @property integer $our_goods_sort_volume_info_id
 * @property integer $departament_id
 *
 * @property User $user
 * @property OurGoods $ourGoods
 * @property OurGoodsSort $ourGoodsSort
 * @property OurGoodsSortVolumeInfo $ourGoodsSortVolumeInfo
 * @property Departament $departament
 * @property SellingOurGoodsSort[] $sellingOurGoodsSorts
 */
class PriceOurGoodsSort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_our_goods_sort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price', 'created_at', 'updated_at', 'user_id', 'our_goods_id', 'our_goods_sort_id', 'our_goods_sort_volume_info_id', 'departament_id'], 'required'],
            [['id', 'price', 'created_at', 'updated_at', 'user_id', 'our_goods_id', 'our_goods_sort_id', 'our_goods_sort_volume_info_id', 'departament_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['our_goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoods::className(), 'targetAttribute' => ['our_goods_id' => 'id']],
            [['our_goods_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoodsSort::className(), 'targetAttribute' => ['our_goods_sort_id' => 'id']],
            [['our_goods_sort_volume_info_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoodsSortVolumeInfo::className(), 'targetAttribute' => ['our_goods_sort_volume_info_id' => 'id']],
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
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'our_goods_id' => 'Our Goods ID',
            'our_goods_sort_id' => 'Our Goods Sort ID',
            'our_goods_sort_volume_info_id' => 'Our Goods Sort Volume Info ID',
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
    public function getOurGoodsSortVolumeInfo()
    {
        return $this->hasOne(OurGoodsSortVolumeInfo::className(), ['id' => 'our_goods_sort_volume_info_id']);
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
        return $this->hasMany(SellingOurGoodsSort::className(), ['price_our_goods_sort_id' => 'id']);
    }
}
