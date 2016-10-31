<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "departament".
 *
 * @property integer $id
 * @property string $dep_name
 * @property string $dep_city
 * @property string $dep_street
 * @property integer $dep_building
 * @property integer $dep_office
 * @property integer $user_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property BusinessDay[] $businessDays
 * @property CashTransaction[] $cashTransactions
 * @property User $user
 * @property LoadingCoffeemachineContainer[] $loadingCoffeemachineContainers
 * @property OutgoingCoffeemachineContainer[] $outgoingCoffeemachineContainers
 * @property OutgoingGoodsPurchasedSort[] $outgoingGoodsPurchasedSorts
 * @property PriceOurGoodsSort[] $priceOurGoodsSorts
 * @property ReceivingGoodsPurchasedSort[] $receivingGoodsPurchasedSorts
 * @property SellingOurGoodsSort[] $sellingOurGoodsSorts
 */
class Departament extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departament';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dep_name', 'dep_city', 'dep_street', 'dep_building', 'dep_office', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['id', 'dep_building', 'dep_office', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['dep_name'], 'string', 'max' => 45],
            [['dep_city', 'dep_street'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dep_name' => 'Dep Name',
            'dep_city' => 'Dep City',
            'dep_street' => 'Dep Street',
            'dep_building' => 'Dep Building',
            'dep_office' => 'Dep Office',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessDays()
    {
        return $this->hasMany(BusinessDay::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCashTransactions()
    {
        return $this->hasMany(CashTransaction::className(), ['departament_id' => 'id']);
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
    public function getLoadingCoffeemachineContainers()
    {
        return $this->hasMany(LoadingCoffeemachineContainer::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutgoingCoffeemachineContainers()
    {
        return $this->hasMany(OutgoingCoffeemachineContainer::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutgoingGoodsPurchasedSorts()
    {
        return $this->hasMany(OutgoingGoodsPurchasedSort::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceOurGoodsSorts()
    {
        return $this->hasMany(PriceOurGoodsSort::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivingGoodsPurchasedSorts()
    {
        return $this->hasMany(ReceivingGoodsPurchasedSort::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSellingOurGoodsSorts()
    {
        return $this->hasMany(SellingOurGoodsSort::className(), ['departament_id' => 'id']);
    }
}
