<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $firstname
 * @property string $lastname
 *
 * @property BusinessDay[] $businessDays
 * @property CashTransaction[] $cashTransactions
 * @property CashTransactionReason[] $cashTransactionReasons
 * @property CoffeemachineContainer[] $coffeemachineContainers
 * @property Departament[] $departaments
 * @property Discount[] $discounts
 * @property GoodsPurchased[] $goodsPurchaseds
 * @property GoodsPurchasedSort[] $goodsPurchasedSorts
 * @property Inventory[] $inventories
 * @property LoadingCoffeemachineContainer[] $loadingCoffeemachineContainers
 * @property Measure[] $measures
 * @property OurGoods[] $ourGoods
 * @property OurGoodsSort[] $ourGoodsSorts
 * @property OurGoodsSortConsist[] $ourGoodsSortConsists
 * @property OurGoodsSortVolumeInfo[] $ourGoodsSortVolumeInfos
 * @property OutgoingCoffeemachineContainer[] $outgoingCoffeemachineContainers
 * @property OutgoingGoodsPurchasedSort[] $outgoingGoodsPurchasedSorts
 * @property PriceOurGoodsSort[] $priceOurGoodsSorts
 * @property Provider[] $providers
 * @property ReceivingGoodsPurchasedSort[] $receivingGoodsPurchasedSorts
 * @property SellingOurGoodsSort[] $sellingOurGoodsSorts
 * @property VolumeInfo[] $volumeInfos
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'firstname', 'lastname'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'firstname', 'lastname'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessDays()
    {
        return $this->hasMany(BusinessDay::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCashTransactions()
    {
        return $this->hasMany(CashTransaction::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCashTransactionReasons()
    {
        return $this->hasMany(CashTransactionReason::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoffeemachineContainers()
    {
        return $this->hasMany(CoffeemachineContainer::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartaments()
    {
        return $this->hasMany(Departament::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscounts()
    {
        return $this->hasMany(Discount::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodsPurchaseds()
    {
        return $this->hasMany(GoodsPurchased::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodsPurchasedSorts()
    {
        return $this->hasMany(GoodsPurchasedSort::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoadingCoffeemachineContainers()
    {
        return $this->hasMany(LoadingCoffeemachineContainer::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeasures()
    {
        return $this->hasMany(Measure::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoods()
    {
        return $this->hasMany(OurGoods::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSorts()
    {
        return $this->hasMany(OurGoodsSort::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSortConsists()
    {
        return $this->hasMany(OurGoodsSortConsist::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSortVolumeInfos()
    {
        return $this->hasMany(OurGoodsSortVolumeInfo::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutgoingCoffeemachineContainers()
    {
        return $this->hasMany(OutgoingCoffeemachineContainer::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutgoingGoodsPurchasedSorts()
    {
        return $this->hasMany(OutgoingGoodsPurchasedSort::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceOurGoodsSorts()
    {
        return $this->hasMany(PriceOurGoodsSort::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProviders()
    {
        return $this->hasMany(Provider::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivingGoodsPurchasedSorts()
    {
        return $this->hasMany(ReceivingGoodsPurchasedSort::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSellingOurGoodsSorts()
    {
        return $this->hasMany(SellingOurGoodsSort::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolumeInfos()
    {
        return $this->hasMany(VolumeInfo::className(), ['user_id' => 'id']);
    }
}
