<?php

namespace app\controllers;

use app\models\Section;
use app\models\GroupCollege;
use Yii;

class SectionController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$section = Section::find()
    		->all();

    	$group=GroupCollege::find()
    		->all();
    		
    	return $this->render('index',[
    		'section'=>$section,
    		'group'=>$group,
    		]);
    }

}
