<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProdiPeriode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prodi-periode-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'periode_id')->textInput() ?>

    <?= $form->field($model, 'prodi_id')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
