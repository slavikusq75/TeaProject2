<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "our_goods_sort_volume_info".
 *
 * @property integer $id
 * @property integer $value
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $our_goods_id
 * @property integer $our_goods_sort_id
 *
 * @property OurGoodsSortConsist[] $ourGoodsSortConsists
 * @property User $user
 * @property OurGoods $ourGoods
 * @property OurGoodsSort $ourGoodsSort
 * @property PriceOurGoodsSort[] $priceOurGoodsSorts
 */
class OurGoodsSortVolumeInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'our_goods_sort_volume_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'value', 'created_at', 'updated_at', 'user_id', 'our_goods_id', 'our_goods_sort_id'], 'required'],
            [['id', 'value', 'created_at', 'updated_at', 'user_id', 'our_goods_id', 'our_goods_sort_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['our_goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoods::className(), 'targetAttribute' => ['our_goods_id' => 'id']],
            [['our_goods_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoodsSort::className(), 'targetAttribute' => ['our_goods_sort_id' => 'id']],
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
            'our_goods_id' => 'Our Goods ID',
            'our_goods_sort_id' => 'Our Goods Sort ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSortConsists()
    {
        return $this->hasMany(OurGoodsSortConsist::className(), ['our_goods_sort_volume_info_id' => 'id']);
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
    public function getPriceOurGoodsSorts()
    {
        return $this->hasMany(PriceOurGoodsSort::className(), ['our_goods_sort_volume_info_id' => 'id']);
    }
}
