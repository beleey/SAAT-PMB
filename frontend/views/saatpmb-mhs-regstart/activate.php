<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <p>Selamat, Anda telah berhasil melakukan konfirmasi akun pendaftaran mahasiswa baru Seminari Alkitab Asia Tenggara!</p>
        <p>Silahkan login untuk melanjutkan proses pendaftaran Mahasiswa Baru</p>
        <p> <a href="<?= Yii::$app->urlManager->createUrl(['site/login']); ?>" class="btn btn-default btn-lg" style="margin-bottom: 20px;"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Login</span></a></p>
    </div>
</div>