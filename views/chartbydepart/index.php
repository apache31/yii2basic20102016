<?php
use miloschuman\highcharts\Highcharts;

$this->title = 'จำนวนครุภัณฑ์คอมพิวเตอร์ แยกตามแผนก';
?>

<div class="panel panel-default">
  <div class="panel-body">

<?PHP
echo "<h1>".$this->title."</h1>";

echo Highcharts::widget([
    'options' => [
        'chart' => [
            'type' => 'column'
        ],
        'title' => ['text' => $this->title],
        'xAxis' => [
            'categories' => ['แผนก/ฝ่าย'],
        ],
        'yAxis' => [
            'title' => ['text' => 'จำนวน']],
        'series' => $chart,
    ]
]);
?></div>
</div>

<div class="alert alert-info">
//// PHP Query by Yii2

use yii\db\Query;<br>
<br>
$query = new Query;<br>
$query	->select([<br>
&nbsp;&nbsp;&nbsp;'COUNT(com.com_id) as count_com',<br>
&nbsp;&nbsp;&nbsp;'depart.depart_name'<br>
&nbsp;&nbsp;&nbsp;])<br>
->from('com')<br>
->join('LEFT JOIN', 'depart',<br>
&nbsp;&nbsp;&nbsp;'com.depart_id=depart.depart_id')<br>
->groupBy('com.depart_id');<br>
<br>
$command = $query->createCommand();<br>
$data = $command->queryAll();<br>

</div>