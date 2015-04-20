<?php

namespace app\controllers;

use app\models\GroupCollege;
use Yii;

class GroupCollegeController extends \yii\web\Controller
{
    public function actionIndex($id=Null,$section=Null)
    {
        if($id!=Null && $section!=Null)
        {
            $group=GroupCollege::find()
                ->where(['id'=>$id,'section'=>$section])
                ->all();
        }else if($section!=Null)
        {
              $group=GroupCollege::find()
                ->where(['section'=>$section])
                ->orderBy('name')
                ->all();
        }else if($id!=Null)
        {
            $group=GroupCollege::find()
                ->where(['id'=>$id])
                ->all();
        }else
        {
            $group=GroupCollege::find()
                ->orderBy('name')
                ->all();
        }

        return $this->render('index',[
            'group'=>$group]);
    }

}
