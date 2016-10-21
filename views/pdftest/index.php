<?php
/* @var $this yii\web\View */
?>
<h1>ทดสอบการแสดงผลแบบ PDF</h1>


<h3> ประเภทครุภัณฑ์คอมพิวเตอร์</h3>

<table class="table table-striped table-hover">
    <thead>
        <tr class="info">
        <th>No.</th>
        <th>ID</th>
        <th>ประเภท</th>
      </tr>
    </thead>
    <tbody>
<?php
foreach ($data as $i => $item) {
    echo "<tr>";
    echo "<td>".++$i."</td>";
    echo "<td>".$item['com_type_id']."</td>";
    echo "<td>".$item['com_type_name']."</td>";
    echo "</tr>";
}
?>
    </tbody>
  </table>