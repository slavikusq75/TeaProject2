<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "our_goods".
 *
 * @property integer $id
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $measure_id
 *
 * @property User $user
 * @property Measure $measure
 * @property OurGoodsSort[] $ourGoodsSorts
 * @property OurGoodsSortConsist[] $ourGoodsSortConsists
 * @property OurGoodsSortVolumeInfo[] $ourGoodsSortVolumeInfos
 * @property PriceOurGoodsSort[] $priceOurGoodsSorts
 * @property SellingOurGoodsSort[] $sellingOurGoodsSorts
 */
class OurGoods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'our_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'created_at', 'updated_at', 'user_id', 'measure_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'user_id', 'measure_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['measure_id'], 'exist', 'skipOnError' => true, 'targetClass' => Measure::className(), 'targetAttribute' => ['measure_id' => 'id']],
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
            'measure_id' => 'Measure ID',
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
    public function getMeasure()
    {
        return $this->hasOne(Measure::className(), ['id' => 'measure_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSorts()
    {
        return $this->hasMany(OurGoodsSort::className(), ['our_goods_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSortConsists()
    {
        return $this->hasMany(OurGoodsSortConsist::className(), ['our_goods_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSortVolumeInfos()
    {
        return $this->hasMany(OurGoodsSortVolumeInfo::className(), ['our_goods_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceOurGoodsSorts()
    {
        return $this->hasMany(PriceOurGoodsSort::className(), ['our_goods_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSellingOurGoodsSorts()
    {
        return $this->hasMany(SellingOurGoodsSort::className(), ['our_goods_id' => 'id']);
    }
}
