<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "loading_coffeemachine_container".
 *
 * @property integer $id
 * @property integer $quantity
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $goods_purchased_id
 * @property integer $goods_purchased_sort_id
 * @property integer $coffeemachine_container_id
 * @property integer $departament_id
 *
 * @property User $user
 * @property GoodsPurchased $goodsPurchased
 * @property GoodsPurchasedSort $goodsPurchasedSort
 * @property CoffeemachineContainer $coffeemachineContainer
 * @property Departament $departament
 */
class LoadingCoffeemachineContainer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loading_coffeemachine_container';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'created_at', 'updated_at', 'user_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'coffeemachine_container_id', 'departament_id'], 'required'],
            [['id', 'quantity', 'created_at', 'updated_at', 'user_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'coffeemachine_container_id', 'departament_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['goods_purchased_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchased::className(), 'targetAttribute' => ['goods_purchased_id' => 'id']],
            [['goods_purchased_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsPurchasedSort::className(), 'targetAttribute' => ['goods_purchased_sort_id' => 'id']],
            [['coffeemachine_container_id'], 'exist', 'skipOnError' => true, 'targetClass' => CoffeemachineContainer::className(), 'targetAttribute' => ['coffeemachine_container_id' => 'id']],
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
            'goods_purchased_id' => 'Goods Purchased ID',
            'goods_purchased_sort_id' => 'Goods Purchased Sort ID',
            'coffeemachine_container_id' => 'Coffeemachine Container ID',
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
    public function getDepartament()
    {
        return $this->hasOne(Departament::className(), ['id' => 'departament_id']);
    }
}
