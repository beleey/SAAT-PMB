<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\MhsConfirm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mhs-confirm-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-4 col-offset-6 centered">
            <?= Html::img('@web/../images/default_user.png');?>
            <?= $form->field($model, 'mhs_imagefile')->fileInput() ?>
        </div>
        <div class="col-md-6 form-group">
            <?= $form->field($model, 'mhs_noreg')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'mhs_nama')->textInput(['maxlength' => true, 'value' => Yii::$app->user->identity->name, 'disabled' => 'true']) ?>
            <?= $form->field($model, 'mhs_email')->textInput(['maxlength' => true, 'value' => Yii::$app->user->identity->email, 'disabled' => 'true'] ) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-offset-6 centered">
            <?= $form->field($model, 'mhs_panggilan')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6 form-group">
             <?= $form->field($model, 'mhs_gender')->radioList(['laki' => 'Laki-laki', 'perempuan' => 'Perempuan']) ?>
        </div>
    </div>
   
    <div class="row">
        <div class="col-sm-4 col-offset-6 centered">
            <?= $form->field($model, 'mhs_tempatlahir')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6 form-group">
            <?= 
                DatePicker::widget([
                    'model' => $model,
                    'attribute' => 'mhs_tgllahir',
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'form' => $form,
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'autoclose' => true,
                    ]
                ]);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-offset-6 centered">
            <?= $form->field($model, 'mhs_alamat')->textArea(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-offset-6 centered">
            <?= $form->field($model, 'mhs_kota')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6 form-group">
            <?= $form->field($model, 'mhs_kodepos')->textInput(['maxlength' => true]) ?>
        </div>
    </div>   

    <div class="row">
        <div class="col-sm-4 col-offset-6 centered">
            <?= $form->field($model, 'mhs_telp')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6 form-group">
             <?= $form->field($model, 'mhs_hp')->textInput(['maxlength' => true]) ?>
        </div>
    </div>    
     <div class="row">
       <div class="col-sm-4 col-offset-6 centered">
            <?= $form->field($model, 'mhs_warganegara')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4 col-offset-6 centered">
            <?= $form->field($model, 'mhs_gereja')->textInput(['maxlength' => true]) ?>
        </div>
         <div class="col-sm-4 col-offset-6 centered">
            <?= $form->field($model, 'mhs_goldarah')->radioList(['A' => 'A', 'B' => 'B','AB' => 'AB', 'O' => 'O']) ?>
        </div>
     </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
