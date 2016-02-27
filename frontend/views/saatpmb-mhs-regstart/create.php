<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SaatpmbMhsRegstart */

$this->title = 'Input Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<h3 style="margin-bottom: 0px;">Selamat Datang! Silahkan daftarkan diri Anda.</h3>
	<h3 style="margin-bottom: 0px;margin-top: 0px;"></h3>
	<div class="col-lg-6">
		<?= Html::img('@web/../images/create-regstart.jpg', ['alt'=>'', 'class'=>'img-rounded img-responsive','style'=>'margin-top:50px;'] );?>
	</div>
	<div class="col-lg-6">
		<div class="saatpmb-mhs-regstart-create" style="padding-top: 50px">
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>

		</div>
	</div>
</div>