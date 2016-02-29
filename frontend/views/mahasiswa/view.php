<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\MhsConfirm */

$this->title = $model->mhs_nama;
$this->params['breadcrumbs'][] = ['label' => 'Mhs Confirms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mhs-confirm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mhs_noreg], ['class' => 'btn btn-primary']) ?>
    </p>
    <!--
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'proper_id',
            'mhs_noreg',
            'mhs_nama',
            'mhs_panggilan',
            'mhs_gender',
            'mhs_tempatlahir',
            'mhs_tgllahir',
            'mhs_goldarah',
            'mhs_alamat',
            'mhs_kota',
            'mhs_kodepos',
            'mhs_telp',
            'mhs_hp',
            'mhs_email:email',
            'mhs_warganegara',
            'mhs_password',
            'mhs_hash_confirm',
            'mhs_gereja',
            'mhs_tglkonfirmasi',
        ],
    ]) ?>
    -->
     <div class="row">
     <div class="col-sm-4 form-group">
            <?= Html::img('@web/../images/default_user.png');?>
              
        </div>
        <div class="col-md-6 col-offset-6 centered">
            <div class="spacer_small"><?= $model->getAttributeLabel('mhs_noreg'); ?></div>
            <div class="field_view"><?= $model->mhs_noreg; ?></div>

            <div class="spacer_small"><?= $model->getAttributeLabel('mhs_nama'); ?></div>
            <div class="field_view"><?= $model->mhs_nama; ?></div>

            <div class="spacer_small"><?= $model->getAttributeLabel('mhs_email'); ?></div>
            <div class="field_view"><?= $model->mhs_email; ?></div>

            <div class="spacer_small"><?= $model->getAttributeLabel('mhs_panggilan'); ?></div>
            <div class="field_view"><?= $model->mhs_panggilan; ?></div>
        </div>
        
    </div>
    <div class="row">
         <div class="col-sm-4">
           <div><?= $model->getAttributeLabel('mhs_gender'); ?></div>
            <div class="field_view"><?= $model->mhs_gender; ?></div>
        </div>
    </div>

     <div class="row spacer">
         <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_tempatlahir'); ?></div>
            <div class="field_view"><?= $model->mhs_tempatlahir; ?></div>
        </div>
        <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_tgllahir'); ?></div>
            <div class="field_view"><?= $model->mhs_tgllahir; ?></div>
        </div>
    </div>

    <div class="row spacer">
        <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_alamat'); ?></div>
            <div class="field_view"><?= $model->mhs_alamat; ?></div>
        </div>
    </div>

    <div class="row spacer">
         <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_kota'); ?></div>
            <div class="field_view"><?= $model->mhs_kota; ?></div>
        </div>
        <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_kodepos'); ?></div>
            <div class="field_view"><?= $model->mhs_kodepos; ?></div>
        </div>  
    </div>

    <div class="row spacer">
         <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_telp'); ?></div>
            <div class="field_view"><?= $model->mhs_telp; ?></div>
        </div>
        <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_hp'); ?></div>
            <div class="field_view"><?= $model->mhs_hp; ?></div>
        </div>
    </div>
    <div class="row spacer">
         <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_warganegara'); ?></div>
            <div class="field_view"><?= $model->mhs_warganegara; ?></div>
        </div>
        <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_gereja'); ?></div>
            <div class="field_view"><?= $model->mhs_gereja; ?></div>
        </div>
        <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('mhs_goldarah'); ?></div>
            <div class="field_view"><?= $model->mhs_goldarah; ?></div>
        </div>
    </div>

     <div class="row spacer">
         <div class="col-sm-4">
            <div><?= $model->getAttributeLabel('proper_id'); ?></div>
            <div class="field_view"><?= $model->prodi->prodi_name; ?></div>
        </div>
        
    </div>


</div>
