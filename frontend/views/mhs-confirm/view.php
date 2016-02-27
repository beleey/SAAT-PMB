<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\MhsConfirm */

$this->title = $model->mhs_noreg;
$this->params['breadcrumbs'][] = ['label' => 'Mhs Confirms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mhs-confirm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mhs_noreg], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mhs_noreg], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'proper_id',
            'mhs_noreg',
            'mhs_nama',
            'mhs_panggilan',
            'mhs_gender',
            'mhs_tempatlahir',
            'mhs_tgllahir',
            'mhs_goldarah',
            'mhs_alamat',
            'mhs_kota',
            'mhs_kodepos',
            'mhs_telp',
            'mhs_hp',
            'mhs_email:email',
            'mhs_warganegara',
            'mhs_password',
            'mhs_hash_confirm',
            'mhs_gereja',
            'mhs_tglkonfirmasi',
        ],
    ]) ?>

</div>
