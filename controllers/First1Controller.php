<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $title="นี่คืออะไร";
        
        $person = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'somchai@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'somying@hotmail.com'],
            ['fname' => 'สมตุ๊ด', 'lname' => 'ใจหมา', 'email' => 'somtoood@hotmail.com']
        ];
        
        return $this->render('index',[
            'title'=>$title,
            'person'=>$person
            ]);
    }

}
