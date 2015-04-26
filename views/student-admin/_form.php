<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\GroupCollege;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 30])->label("Ім'я") ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => 30])->label('Прізвище') ?>

    <?= $form->field($model, 'group_college')->dropDownList(ArrayHelper::map(GroupCollege::find()->all(),'id','name'),
    	['prompt'=>'Оберіть групу']
    )->label('Група');; ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Оновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
