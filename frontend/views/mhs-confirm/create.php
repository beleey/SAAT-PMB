<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MhsConfirm */

$this->title = 'Create Mhs Confirm';
$this->params['breadcrumbs'][] = ['label' => 'Mhs Confirms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mhs-confirm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
