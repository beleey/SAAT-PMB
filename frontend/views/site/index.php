<?php

use yii\helpers\Html;
?>
<div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Selamat Datang</h1>
                        <h3>Kami menyambut semua calon mahasiswa Seminari Alkitab Asia Tenggara.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl(['saatpmb-mhs-regstart/create']); ?>" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Daftar Baru</span></a>
                            </li>
                            <li>
                                <a href="<?= Yii::$app->urlManager->createUrl(['site/login']); ?>" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Sudah Daftar</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->
<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Pendaftaran Mahasiswa Baru <br>2016/2017</h2>
                <p class="lead">Dengan sukacita kami menyambut semua calon mahasiswa Seminari Alkitab Asia Tenggara tahun ajaran 2016/2017. Informasi lebih lengkap mengenai jadwal penerimaan mahasiswa baru dapat dilihat pada tautan di bawah ini</p>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/schedule']); ?>" class="btn btn-default btn-lg" style="margin-bottom: 20px;"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Jadwal Penerimaan</span></a>

            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <?= Html::img('@web/../images/daftar-maba.jpg', ['alt'=>'', 'class'=>'img-responsive img-rounded']) ?> 
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<div class="content-section-b">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <?= Html::img('@web/../images/prosedur.jpg', ['alt'=>'', 'class'=>'img-responsive img-rounded']) ?> 
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Prosedur Pendaftaran</h2>
                <p class="lead">Baca dan Ikuti langkah-langkah pendaftaran Mahasiswa Baru agar semua urusan berjalan dengan baik</p>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/procedure']); ?>" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Prosedur</span></a>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>

<div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-9">
                    <h2>Ingin mengenal STT-SAAT lebih dalam:</h2>
                </div>
                <div class="col-lg-3">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Klik disini</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->