<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\SaatpmbMhsRegstart */

$this->title = 'Update calon mahasiswa: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Admisi Baru', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->seq]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="saatpmb-mhs-regstart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
