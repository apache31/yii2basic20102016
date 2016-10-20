<?php
use miloschuman\highcharts\Highcharts;

$this->title = 'จำนวนครุภัณฑ์คอมพิวเตอร์ แยกตามประเภท';
//echo Highcharts::widget([
//   'options' => [
//      'title' => ['text' => 'Fruit Consumption'],
//      'xAxis' => [
//         'categories' => ['Apples', 'Bananas', 'Oranges']
//      ],
//      'yAxis' => [
//         'title' => ['text' => 'Fruit eaten']
//      ],
//      'series' => [
//         ['name' => 'Jane', 'data' => [1, 0, 4]],
//         ['name' => 'John', 'data' => [5, 7, 3]]
//      ]
//   ]
//]);
echo "<h1>Hight Chart</h1>";

echo Highcharts::widget([
    'options' => [
        'chart' => [
            'type' => 'column'
        ],
        'title' => ['text' => $this->title],
        'xAxis' => [
            'categories' => ['ประเภท'],
        ],
        'yAxis' => [
            'title' => ['text' => 'จำนวน']],
        'series' => $chart,
    ]
]);
?>

