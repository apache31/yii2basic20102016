<?php
/* @var $this yii\web\View */

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
  <h1><?= $title; ?></h1>
    
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
  <table class="table table-striped table-hover">
    <thead>
        <tr class="info">
        <th>ลำดับ</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>อีเมล์</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($person as $i=>$p) {
        echo "<tr>";
        echo "<td>".++$i."</td>";
        foreach ($p as $p_key => $p_value) {
            echo "<td>".$p_value."</td>";
        }
        echo "</tr>";
    }
    ?>
    </tbody>
  </table>
</div>