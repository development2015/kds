<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CountDistrict;

/**
 * CountDistrictSearch represents the model behind the search form about `backend\models\CountDistrict`.
 */
class CountDistrictSearch extends CountDistrict
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ict', 'kesihatan', 'pendidikan', 'keusahawanan', 'riadah', 'district_id', 'state_id'], 'integer'],
            [['last_update'], 'safe'],
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
        $state_id = $_GET['id']; 
        $query = CountDistrict::find()->where(['state_id'=>$state_id]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'ict' => $this->ict,
            'kesihatan' => $this->kesihatan,
            'pendidikan' => $this->pendidikan,
            'keusahawanan' => $this->keusahawanan,
            'riadah' => $this->riadah,
            'district_id' => $this->district_id,
            'state_id' => $this->state_id,
            'last_update' => $this->last_update,
        ]);

        return $dataProvider;
    }
}
