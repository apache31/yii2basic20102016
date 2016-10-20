<?php

namespace app\controllers;

class ChartcomController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $conn= \Yii::$app->db;
        $sql="SELECT t.com_type_name,count(c.com_id) as count_com "
                . "FROM com c LEFT JOIN com_type t ON c.com_type_id=t.com_type_id "
                . "GROUP BY c.com_type_id";
               
        //$sql="SELECT * FROM com";
        $cmd=$conn->createCommand($sql);
        
        //$cmd->bindValue(':id',$id);
        
        $data=$cmd->queryAll();
        
//        print_r($data);
//        die();
        foreach ($data as $item) {
            $chart[]=['name'=>$item['com_type_name'],'data'=>[intval($item['count_com'])]];
        }
        
        return $this->render('index', [
                'chart' => $chart,
            ]);
    }

}
