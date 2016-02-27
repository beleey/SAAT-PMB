<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MhsConfirm */

$this->title = 'Update Mhs Confirm: ' . ' ' . $model->mhs_noreg;
$this->params['breadcrumbs'][] = ['label' => 'Mhs Confirms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mhs_noreg, 'url' => ['view', 'id' => $model->mhs_noreg]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mhs-confirm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
