<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "our_goods_sort".
 *
 * @property integer $id
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $our_goods_id
 *
 * @property User $user
 * @property OurGoods $ourGoods
 * @property OurGoodsSortConsist[] $ourGoodsSortConsists
 * @property OurGoodsSortVolumeInfo[] $ourGoodsSortVolumeInfos
 * @property PriceOurGoodsSort[] $priceOurGoodsSorts
 * @property SellingOurGoodsSort[] $sellingOurGoodsSorts
 */
class OurGoodsSort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'our_goods_sort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'created_at', 'updated_at', 'user_id', 'our_goods_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'user_id', 'our_goods_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['our_goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoods::className(), 'targetAttribute' => ['our_goods_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'our_goods_id' => 'Our Goods ID',
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
    public function getOurGoodsSortConsists()
    {
        return $this->hasMany(OurGoodsSortConsist::className(), ['our_goods_sort_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSortVolumeInfos()
    {
        return $this->hasMany(OurGoodsSortVolumeInfo::className(), ['our_goods_sort_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceOurGoodsSorts()
    {
        return $this->hasMany(PriceOurGoodsSort::className(), ['our_goods_sort_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSellingOurGoodsSorts()
    {
        return $this->hasMany(SellingOurGoodsSort::className(), ['our_goods_sort_id' => 'id']);
    }
}
