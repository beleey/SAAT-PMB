<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\SaatpmbMhsRegstart */

$this->title = "Konfirmasi pendaftaran";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saatpmb-mhs-regstart-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-success" role="alert">
        <h3>Selamat!</h3>
        <p>Anda berhasil melakukan pendaftaran pengguna baru.</p>
        <p>Anda belum dapat melakukan login ke dalam sistem pendaftaran sebelum Anda mengaktifkan akun Anda.</p>
        <p>Kami akan mengirimkan sebuah email yang berisi petunjuk untuk mengaktifkan akun Anda</p>
        <p>Terima kasih</p>
    </div>
</div>
