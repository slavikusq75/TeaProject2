<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "provider".
 *
 * @property integer $id
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 *
 * @property User $user
 * @property ReceivingGoodsPurchasedSort[] $receivingGoodsPurchasedSorts
 */
class Provider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'provider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created_at', 'updated_at', 'user_id'], 'required'],
            [['created_at', 'updated_at', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
    public function getReceivingGoodsPurchasedSorts()
    {
        return $this->hasMany(ReceivingGoodsPurchasedSort::className(), ['provider_id' => 'id']);
    }
}
