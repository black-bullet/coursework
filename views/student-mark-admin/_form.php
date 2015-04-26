<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Student;
use app\models\Subject;

/* @var $this yii\web\View */
/* @var $model app\models\MarkTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mark-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student')->dropDownList(ArrayHelper::map(Student::find()
    		 ->all(),'id','surname','group0.name'),
    				['prompt'=>'Оберіть студента']
	)->label('Студент');?>

    <?=$form->field($model, 'subject')->dropDownList(ArrayHelper::map(Subject::find()
            ->all(),'id','name','course0.group0.name'),
			 ['prompt'=>'Оберіть предмет'])->label('Предмет');
		?>

    <?= $form->field($model, 'mark')->textInput()->label('Оцінка') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Стовирити' : 'Оновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
