<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "selling_our_goods_sort".
 *
 * @property integer $id
 * @property integer $qauntity
 * @property integer $sum
 * @property integer $user_id
 * @property integer $our_goods_id
 * @property integer $our_goods_sort_id
 * @property integer $departament_id
 * @property integer $price_our_goods_sort_id
 * @property integer $discount_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $cash_transaction_id
 *
 * @property OutgoingCoffeemachineContainer[] $outgoingCoffeemachineContainers
 * @property OutgoingGoodsPurchasedSort[] $outgoingGoodsPurchasedSorts
 * @property User $user
 * @property OurGoods $ourGoods
 * @property OurGoodsSort $ourGoodsSort
 * @property Departament $departament
 * @property PriceOurGoodsSort $priceOurGoodsSort
 * @property Discount $discount
 * @property CashTransaction $cashTransaction
 */
class SellingOurGoodsSort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'selling_our_goods_sort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'qauntity', 'sum', 'user_id', 'our_goods_id', 'our_goods_sort_id', 'departament_id', 'price_our_goods_sort_id', 'discount_id', 'created_at', 'updated_at', 'cash_transaction_id'], 'required'],
            [['id', 'qauntity', 'sum', 'user_id', 'our_goods_id', 'our_goods_sort_id', 'departament_id', 'price_our_goods_sort_id', 'discount_id', 'created_at', 'updated_at', 'cash_transaction_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['our_goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoods::className(), 'targetAttribute' => ['our_goods_id' => 'id']],
            [['our_goods_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => OurGoodsSort::className(), 'targetAttribute' => ['our_goods_sort_id' => 'id']],
            [['departament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departament::className(), 'targetAttribute' => ['departament_id' => 'id']],
            [['price_our_goods_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => PriceOurGoodsSort::className(), 'targetAttribute' => ['price_our_goods_sort_id' => 'id']],
            [['discount_id'], 'exist', 'skipOnError' => true, 'targetClass' => Discount::className(), 'targetAttribute' => ['discount_id' => 'id']],
            [['cash_transaction_id'], 'exist', 'skipOnError' => true, 'targetClass' => CashTransaction::className(), 'targetAttribute' => ['cash_transaction_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'qauntity' => 'Qauntity',
            'sum' => 'Sum',
            'user_id' => 'User ID',
            'our_goods_id' => 'Our Goods ID',
            'our_goods_sort_id' => 'Our Goods Sort ID',
            'departament_id' => 'Departament ID',
            'price_our_goods_sort_id' => 'Price Our Goods Sort ID',
            'discount_id' => 'Discount ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'cash_transaction_id' => 'Cash Transaction ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutgoingCoffeemachineContainers()
    {
        return $this->hasMany(OutgoingCoffeemachineContainer::className(), ['selling_our_goods_sort_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutgoingGoodsPurchasedSorts()
    {
        return $this->hasMany(OutgoingGoodsPurchasedSort::className(), ['selling_our_goods_sort_id' => 'id']);
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
    public function getDepartament()
    {
        return $this->hasOne(Departament::className(), ['id' => 'departament_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceOurGoodsSort()
    {
        return $this->hasOne(PriceOurGoodsSort::className(), ['id' => 'price_our_goods_sort_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscount()
    {
        return $this->hasOne(Discount::className(), ['id' => 'discount_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCashTransaction()
    {
        return $this->hasOne(CashTransaction::className(), ['id' => 'cash_transaction_id']);
    }
}
