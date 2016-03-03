<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AdminAsset;
use common\widgets\Alert;
use kartik\widgets\SideNav;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper">
        <!-- Navigation -->
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= Html::a('Seminari Alkitab Asia Tenggara', ['mahasiswa/index'], ['class'=>'navbar-brand']) ?>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                    
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= Yii::$app->user->identity->name ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= Html::a('<i class="fa fa-fw fa-power-off"></i> Logout',['site/logout'], ['class' => 'btn btn-default', 'data-method'=>'post']) ?>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <div class="collapse navbar-collapse navbar-ex1-collapse" >
                <div class="nav navbar-nav side-nav" style="background-color: #fff;">
            <?= 
                SideNav::widget([
                    'type' => SideNav::TYPE_WARNING,
                    'heading' => 'Menu ADMIN',
                    'items' => [
                        [
                            'url' => ['admin/index'],
                            'label' => Yii::t('app','home'),
                            'icon' => 'home'
                        ],
                        [
                            'url' => ['prodi/index'],
                            'label' => 'Prodi',
                            'icon' => 'edit'
                        ],
                        [
                            'url' => ['periode/index'],
                            'label' => 'Periode TA',
                            'icon' => 'file'
                        ]
                    ],
                ]);
           
            ?>
                </div>
                </div>
            <!-- /.navbar-collapse -->
        </nav>
            
      
        <div id="page-wrapper">
            <div class="container-fluid">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= $content ?>
            </div>
        </div>
        
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
