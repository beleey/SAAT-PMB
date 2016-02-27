<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProdiPeriode */

$this->title = 'Update Prodi Periode: ' . ' ' . $model->proper_id;
$this->params['breadcrumbs'][] = ['label' => 'Prodi Periodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->proper_id, 'url' => ['view', 'id' => $model->proper_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prodi-periode-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
