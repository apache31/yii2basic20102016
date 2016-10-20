<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComStatus */

$this->title = 'ปรับปรุงข้อมูล : ' . $model->com_status_name;
$this->params['breadcrumbs'][] = ['label' => 'สถานะคอมพิวเตอร์', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->com_status_name, 'url' => ['view', 'id' => $model->com_status_id]];
$this->params['breadcrumbs'][] = 'ปรับปรุงข้อมูล';
?>
<div class="com-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
