<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Periode */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periode-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6 col-offset-6 centered">
        	<div class="panel panel-info">
			  <div class="panel-heading">Isi Periode</div>
			  <div class="panel-body">
   				<?= $form->field($model, 'periode_name')->textInput(['maxlength' => true]) ?>
				<?= $form->field($model, 'tahun')->textInput() ?>
			  </div>
			</div>
		</div>
	</div>
	<div class="row">
	 	<div class="col-md-8 col-offset-6 centered">
		 	<div class="panel panel-info">
			  	<div class="panel-heading">Pilih Program Studi</div>
				  <div class="panel-body">
				  	<?= GridView::widget([
						'summary' => '',
				        'dataProvider' => $dataProvider,
				        'columns' => [
				            'prodi_name',
				            'prodi_desc:ntext',
				            ['class'=> 'yii\grid\CheckboxColumn'],
					    ]
					]); ?>
				  </div>
			</div>
		
		</div>
	</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
