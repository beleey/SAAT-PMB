<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MhsConfirmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mhs-confirm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'proper_id') ?>

    <?= $form->field($model, 'mhs_noreg') ?>

    <?= $form->field($model, 'mhs_nama') ?>

    <?= $form->field($model, 'mhs_panggilan') ?>

    <?= $form->field($model, 'mhs_gender') ?>

    <?php // echo $form->field($model, 'mhs_tempatlahir') ?>

    <?php // echo $form->field($model, 'mhs_tgllahir') ?>

    <?php // echo $form->field($model, 'mhs_goldarah') ?>

    <?php // echo $form->field($model, 'mhs_alamat') ?>

    <?php // echo $form->field($model, 'mhs_kota') ?>

    <?php // echo $form->field($model, 'mhs_kodepos') ?>

    <?php // echo $form->field($model, 'mhs_telp') ?>

    <?php // echo $form->field($model, 'mhs_hp') ?>

    <?php // echo $form->field($model, 'mhs_email') ?>

    <?php // echo $form->field($model, 'mhs_warganegara') ?>

    <?php // echo $form->field($model, 'mhs_password') ?>

    <?php // echo $form->field($model, 'mhs_hash_confirm') ?>

    <?php // echo $form->field($model, 'mhs_gereja') ?>

    <?php // echo $form->field($model, 'mhs_tglkonfirmasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
