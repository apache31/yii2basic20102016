<?php

namespace app\controllers;

use yii\db\Query;

class ChartbydepartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = new Query;
        $query	->select([
		'COUNT(com.com_id) as count_com',
		'depart.depart_name'
		])
	->from('com')
	->join('LEFT JOIN', 'depart',
		'com.depart_id=depart.depart_id')
        ->groupBy('com.depart_id');
		
        $command = $query->createCommand();
        $data = $command->queryAll();

        foreach ($data as $item) {
            $chart[]=['name'=>$item['depart_name'],'data'=>[intval($item['count_com'])]];
        }
        
        return $this->render('index', [
                'chart' => $chart,
            ]);
    }

}
