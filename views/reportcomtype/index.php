<?php

use yii\helpers\Html;

$this->title = "ประเภทคอมพิวเตอร์";
//$this->params['breadcrumbs'][] = ['label' => 'ประเภทคอมพิวเตอร์', 'url' => ['/reportcomtype']];
$this->params['breadcrumbs'][] = $this->title;

?>

  <h1><?= $this->title; ?></h1>
 
  <table class="table table-striped table-hover">
    <thead>
        <tr class="info">
        <th>No.</th>
        <th>รหัสประเภท</th>
        <th>ชื่อประเภท</th>
        <th>..</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data as $i=>$item) {

        echo "<tr>";
        echo "<td>".++$i."</td>";
        echo "<td>".$item['com_type_id']."</td>";
        echo "<td>".$item['com_type_name']."</td>";
        echo "<td>".html::a('<span class="glyphicon glyphicon-search"></span> ดูซิ',['/report_com_detail/index','id'=>$item['com_type_id']])."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
  </table>