<?php
//print_r($data);
//die();
$this->title = "รายละเอียดคอมพิวเตอร์";
$this->params['breadcrumbs'][] = ['label' => 'ประเภทคอมพิวเตอร์', 'url' => ['/reportcomtype']];
$this->params['breadcrumbs'][] = $this->title;

?>

  <h1><?= $this->title; ?></h1>
 
  <table class="table table-striped table-hover">
    <thead>
        <tr class="info">
        <th>No.</th>
        <th>ประเภท</th>
        <th>รายการ</th>
        <th>รายละเอียด</th>
        <th>สถานะ</th>
        <th>วันที่รับ</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data as $i=>$item) {

        echo "<tr>";
        echo "<td>".++$i."</td>";
        echo "<td>".$item['com_type_name']."</td>";
        echo "<td>".$item['brand']."</td>";
        echo "<td>".$item['detail']."</td>";
        echo "<td>".$item['com_status_name']."</td>";
        echo "<td>".$item['accept_date']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
  </table>