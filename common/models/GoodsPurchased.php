<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "goods_purchased".
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
 * @property GoodsPurchasedSort[] $goodsPurchasedSorts
 * @property Inventory[] $inventories
 * @property LoadingCoffeemachineContainer[] $loadingCoffeemachineContainers
 * @property OurGoodsSortConsist[] $ourGoodsSortConsists
 * @property OutgoingGoodsPurchasedSort[] $outgoingGoodsPurchasedSorts
 * @property ReceivingGoodsPurchasedSort[] $receivingGoodsPurchasedSorts
 * @property VolumeInfo[] $volumeInfos
 */
class GoodsPurchased extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods_purchased';
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
            [['name'], 'unique'],
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
    public function getGoodsPurchasedSorts()
    {
        return $this->hasMany(GoodsPurchasedSort::className(), ['goods_purchased_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['goods_purchased_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoadingCoffeemachineContainers()
    {
        return $this->hasMany(LoadingCoffeemachineContainer::className(), ['goods_purchased_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSortConsists()
    {
        return $this->hasMany(OurGoodsSortConsist::className(), ['goods_purchased_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutgoingGoodsPurchasedSorts()
    {
        return $this->hasMany(OutgoingGoodsPurchasedSort::className(), ['goods_purchased_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivingGoodsPurchasedSorts()
    {
        return $this->hasMany(ReceivingGoodsPurchasedSort::className(), ['goods_purchased_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolumeInfos()
    {
        return $this->hasMany(VolumeInfo::className(), ['goods_purchased_id' => 'id']);
    }
}
