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
    </div>

</div>
