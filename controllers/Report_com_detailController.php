<?php

namespace app\controllers;

class Report_com_detailController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        
        $conn= \Yii::$app->db;
        $sql="SELECT c.*,t.com_type_name,s.com_status_name "
                . "FROM com c LEFT JOIN com_type t ON c.com_type_id=t.com_type_id LEFT JOIN com_status s ON c.com_status_id=s.com_status_id "
                . "WHERE c.com_type_id=:id";
        //$sql="SELECT * FROM com";
        $cmd=$conn->createCommand($sql);
        
        $cmd->bindValue(':id',$id);
        
        $data=$cmd->queryAll();
        
//        print_r($data);
//        die();
        
        return $this->render('index', [
                'data' => $data,
            ]);
    }

}
