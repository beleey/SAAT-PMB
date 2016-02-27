<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MhsConfirm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mhs-confirm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'proper_id')->textInput() ?>

    <?= $form->field($model, 'mhs_noreg')->textInput() ?>

    <?= $form->field($model, 'mhs_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_panggilan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_tempatlahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_tgllahir')->textInput() ?>

    <?= $form->field($model, 'mhs_goldarah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_kodepos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_warganegara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_hash_confirm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_gereja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mhs_tglkonfirmasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
