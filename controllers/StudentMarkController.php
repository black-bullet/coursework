<?php

namespace app\controllers;

use app\models\MarkTable;
use app\models\Student;
use app\models\Subject;

class StudentMarkController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        $markTable=MarkTable::find()
        	->where(['student'=>$id])
        	->orderBy('subject')
        	->all();

        $students=Student::find()
        	->all();

        $subject=Subject::find()
        	->all();

        return $this->render('index',[
        	'markTable'=>$markTable,
        	'students'=>$students,
        	'subject'=>$subject]);
    }

}
