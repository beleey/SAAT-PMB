<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PeriodeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Periodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periode-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Periode', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'periode_id',
            'periode_name',
            'tahun',
           [
                'attribute' => 'status',
                'value' => function ($data){
                 return $data->status==1 ? "Active": ($data->status==0 ? "-": "-");
                }
            ],
           
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'rowOptions' => function ($model, $index, $widget, $grid){
            if($model->status == 1){
                return ['style' => 'background-color:#CDEB8B;'];
            } else {
                return ['style' => 'background-color:#fff;'];
            }
        },
    ]); ?>

</div>
