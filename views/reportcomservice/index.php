<?php
//print_r($data);
//die();
$this->title = "รายงานการซ่อมบำรุง";
//$this->params['breadcrumbs'][] = ['label' => 'ประเภทคอมพิวเตอร์', 'url' => ['/reportcomtype']];
$this->params['breadcrumbs'][] = $this->title;

?>

  <h1><?= $this->title; ?></h1>
 
  <table class="table table-striped table-hover">
    <thead>
        <tr class="info">
        <th>No.</th>
        <th>รายการ</th>
        <th>ประเภท</th>
        <th>ปัญหา</th>
        <th>วันที่แจ้ง</th>
        <th>การซ่อม</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data as $i=>$item) {

        echo "<tr>";
        echo "<td>".++$i."</td>";
        echo "<td>".$item['brand']." ".$item['detail']."</td>";
        echo "<td>".$item['problem_type_name']."</td>";
        echo "<td>".$item['problem']."</td>";
        echo "<td>".$item['problem_datetime']."</td>";
        echo "<td>".$item['it_job_detail']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
  </table>