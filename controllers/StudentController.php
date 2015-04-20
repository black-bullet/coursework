<?php

namespace app\controllers;

use app\models\Student;
use app\models\GroupCollege;
use Yii;

class StudentController extends \yii\web\Controller
{
    public function actionIndex($group)
    {
	    $students=Student::find()
	        	->where(['group_college'=>$group])
	        	->orderBy('surname','name')
	        	->all();

	    $group=GroupCollege::find()
	        	->orderBy('name')
	        	->all();
	       	
	    return $this->render('index',[
	       	'students'=>$students,
	       	'group'=>$group]);
	 
    }

}
