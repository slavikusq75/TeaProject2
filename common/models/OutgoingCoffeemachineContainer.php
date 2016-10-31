<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "outgoing_coffeemachine_container".
 *
 * @property integer $id
 * @property integer $quantity
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $departament_id
 * @property integer $coffeemachine_container_id
 * @property integer $selling_our_goods_sort_id
 *
 * @property User $user
 * @property Departament $departament
 * @property CoffeemachineContainer $coffeemachineContainer
 * @property SellingOurGoodsSort $sellingOurGoodsSort
 */
class OutgoingCoffeemachineContainer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'outgoing_coffeemachine_container';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'created_at', 'updated_at', 'user_id', 'departament_id', 'coffeemachine_container_id', 'selling_our_goods_sort_id'], 'required'],
            [['id', 'quantity', 'created_at', 'updated_at', 'user_id', 'departament_id', 'coffeemachine_container_id', 'selling_our_goods_sort_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['departament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departament::className(), 'targetAttribute' => ['departament_id' => 'id']],
            [['coffeemachine_container_id'], 'exist', 'skipOnError' => true, 'targetClass' => CoffeemachineContainer::className(), 'targetAttribute' => ['coffeemachine_container_id' => 'id']],
            [['selling_our_goods_sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => SellingOurGoodsSort::className(), 'targetAttribute' => ['selling_our_goods_sort_id' => 'id']],
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
            'departament_id' => 'Departament ID',
            'coffeemachine_container_id' => 'Coffeemachine Container ID',
            'selling_our_goods_sort_id' => 'Selling Our Goods Sort ID',
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
    public function getDepartament()
    {
        return $this->hasOne(Departament::className(), ['id' => 'departament_id']);
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
    public function getSellingOurGoodsSort()
    {
        return $this->hasOne(SellingOurGoodsSort::className(), ['id' => 'selling_our_goods_sort_id']);
    }
}
