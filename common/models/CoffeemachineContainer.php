<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "coffeemachine_container".
 *
 * @property integer $id
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 *
 * @property User $user
 * @property LoadingCoffeemachineContainer[] $loadingCoffeemachineContainers
 * @property OurGoodsSortConsist[] $ourGoodsSortConsists
 * @property OutgoingCoffeemachineContainer[] $outgoingCoffeemachineContainers
 */
class CoffeemachineContainer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coffeemachine_container';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'created_at', 'updated_at', 'user_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
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
    public function getLoadingCoffeemachineContainers()
    {
        return $this->hasMany(LoadingCoffeemachineContainer::className(), ['coffeemachine_container_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOurGoodsSortConsists()
    {
        return $this->hasMany(OurGoodsSortConsist::className(), ['coffeemachine_container_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutgoingCoffeemachineContainers()
    {
        return $this->hasMany(OutgoingCoffeemachineContainer::className(), ['coffeemachine_container_id' => 'id']);
    }
}
