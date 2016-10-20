<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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


    
<div class="wrap">
<div style="height:100px;background:#f5f5f5 url('<?=  Yii::getAlias('@web')?>/img/header.png') center no-repeat">
    <!--<img src="<?=  Yii::getAlias('@web')?>/img/asf_logo.png" class="img-responsive" alt="header">-->
</div>    
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-fire"></span> Yii2@Apache3',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            //'class' => 'navbar-inverse navbar-fixed-top',
            'class' => 'navbar-inverse',
        ],
    ]);
    
    $regis_item=[
        ['label' => 'ทะเบียนคอมพิวเตอร์', 'url' => ['/com/index']]
    ];
    
    $report_item=[
        ['label' => 'ประเภทคอมพิวเตอร์', 'url' => ['/reportcomtype/index']],
        ['label' => 'รายงานการซ่อมบำรุง', 'url' => ['/reportcomservice/index']],
        ['label' => 'จำนวนครุภัณฑ์คอมพิวเตอร์ แยกตามประเภท', 'url' => ['/chartcom/index']]
    ];
    
    $setting_item=[
        ['label' => 'สถานะคอมฯ', 'url' => ['/comstatus/index']],
        ['label' => 'ประเภทคอมพิวเตอร์', 'url' => ['/com-type']]
    ];
    echo Nav::widget([
        'encodeLabels' => false,
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home"></span> หน้าแรก', 'url' => ['/site/index']],
            ['label' => 'นี่คืออะไร', 'url' => ['/first1/index']],
            ['label' => 'ลงทะเบียน', 'items' => $regis_item],
            ['label' => '<span class="glyphicon glyphicon-list-alt"></span> รายงาน', 'items' => $report_item],
            ['label' => 'ติดต่อ', 'url' => ['/site/contact']],
            ['label' => '<span class="glyphicon glyphicon-cog"></span> ตั้งค่า', 'items' => $setting_item],
            Yii::$app->user->isGuest ? (
                ['label' => 'ล็อกคอ', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'ถีบออก (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
