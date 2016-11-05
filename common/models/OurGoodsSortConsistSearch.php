<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OurGoodsSortConsist;

/**
 * OurGoodsSortConsistSearch represents the model behind the search form about `common\models\OurGoodsSortConsist`.
 */
class OurGoodsSortConsistSearch extends OurGoodsSortConsist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'volume_info_id', 'quantity', 'user_id', 'our_goods_id', 'our_goods_sort_id', 'goods_purchased_id', 'goods_purchased_sort_id', 'coffeemachine_container_id', 'our_goods_sort_volume_info_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = OurGoodsSortConsist::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'volume_info_id' => $this->volume_info_id,
            'quantity' => $this->quantity,
            'user_id' => $this->user_id,
            'our_goods_id' => $this->our_goods_id,
            'our_goods_sort_id' => $this->our_goods_sort_id,
            'goods_purchased_id' => $this->goods_purchased_id,
            'goods_purchased_sort_id' => $this->goods_purchased_sort_id,
            'coffeemachine_container_id' => $this->coffeemachine_container_id,
            'our_goods_sort_volume_info_id' => $this->our_goods_sort_volume_info_id,
        ]);

        return $dataProvider;
    }
}
