<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MhsConfirmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mhs Confirms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mhs-confirm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mhs Confirm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'proper_id',
            'mhs_noreg',
            'mhs_nama',
            'mhs_panggilan',
            'mhs_gender',
            // 'mhs_tempatlahir',
            // 'mhs_tgllahir',
            // 'mhs_goldarah',
            // 'mhs_alamat',
            // 'mhs_kota',
            // 'mhs_kodepos',
            // 'mhs_telp',
            // 'mhs_hp',
            // 'mhs_email:email',
            // 'mhs_warganegara',
            // 'mhs_password',
            // 'mhs_hash_confirm',
            // 'mhs_gereja',
            // 'mhs_tglkonfirmasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
