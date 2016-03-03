<?php

use yii\helpers\Html;
?>
<div class="panel panel-default">
    <div class="panel-body"><p><?= Yii::t('app','Selamat datang') ?> <big><b><?= Yii::$app->user->identity->name ?></b></big></p></div>
</div>