<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\SubjectCourse;


/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 30])->label('Предмет') ?>

    <?= $form->field($model, 'system_mark')->textInput()->label('Система оцінювання') ?>

    <?= $form->field($model, 'course_number')->dropDownList(ArrayHelper::map(SubjectCourse::find()->all(),
    	'id','numcourse','group0.name'),
    	['prompt'=>'Oберіть курс предмета']
	)->label('Група і курс вивчення предмету'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Оновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
