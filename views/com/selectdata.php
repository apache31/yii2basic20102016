<?php

$this->title = "Select Data";
$this->params['breadcrumbs'][] = ['label' => 'คอมพิวเตอร์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

//
//foreach ($com as $i=>$value) {
//    echo ++$i.".  ".$value->brand.
//        " [".$value->com_id."]".
//        " ---------> [".$value->detail."]".
//        " ---------> [".$value->accept_date."]".
//        "<br>";
//    }
?>

  <h1><?= $this->title; ?></h1>
    
  <h2>ครุภัณฑ์คอมพิวเตอร์</h2>
 
  <table class="table table-striped table-hover">
    <thead>
        <tr class="info">
        <th>No.</th>
        <th>ID</th>
        <th>รายการ</th>
        <th>รายละเอียด</th>
        <th>วันที่รับ</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($com as $i=>$value) {

        echo "<tr>";
        echo "<td>".++$i."</td>";
        echo "<td>".$value->com_id."</td>";
        echo "<td>".$value->brand."</td>";
        echo "<td>".$value->detail."</td>";
        echo "<td>".$value->accept_date."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
  </table>