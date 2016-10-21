<?php

namespace app\controllers;

class ReportcomtypeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $conn= \Yii::$app->db;
        //$sql="SELECT c.*,t.com_type_name FROM com c LEFT JOIN com_type t ON c.com_type_id=t.com_type_id";
        $sql="SELECT * FROM com_type";
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        
//        print_r($data);
//        die();
        
        return $this->render('index', [
                'data' => $data,
            ]);
    }

}
