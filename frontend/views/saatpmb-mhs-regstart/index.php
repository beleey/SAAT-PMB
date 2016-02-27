<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SaatpmbMhsRegstartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar calon mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saatpmb-mhs-regstart-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Buat baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'seq',
            'name',
            'email:email',
            //'password',
            //'hash_confirm',
             'input_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
