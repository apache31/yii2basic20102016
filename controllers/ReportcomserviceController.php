<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $conn= \Yii::$app->db;
        $sql="SELECT s.*,c.brand,c.detail,t.problem_type_name "
                . "FROM com_service s LEFT JOIN com c ON s.com_id=c.com_id LEFT JOIN problem_type t ON s.problem_type_id=t.problem_type_id ";
               
        //$sql="SELECT * FROM com";
        $cmd=$conn->createCommand($sql);
        
        //$cmd->bindValue(':id',$id);
        
        $data=$cmd->queryAll();
        
//        print_r($data);
//        die();
        
        return $this->render('index', [
                'data' => $data,
            ]);
    }

}
