<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AnswerTempSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Answer Temps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answer-temp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Answer Temp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jawapan',
            'question_temp_id',
            'people_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
