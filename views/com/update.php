<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Com */

$this->title = 'ปรับปรุงข้อมูล: ' . $model->brand.' [ID : '.$model->com_id.']';
$this->params['breadcrumbs'][] = ['label' => 'คอมพิวเตอร์', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->com_id]];
$this->params['breadcrumbs'][] = 'ปรับปรุงข้อมูล';
?>
<div class="com-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
