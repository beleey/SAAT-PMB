<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MhsConfirm */

$this->title = 'Data Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mhs-confirm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>