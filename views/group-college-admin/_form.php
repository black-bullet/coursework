<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Section;

/* @var $this yii\web\View */
/* @var $model app\models\GroupCollege */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-college-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 40])->label('Група') ?>
	
    <?= $form->field($model, 'section')->dropDownList(
    		ArrayHelper::map(Section::find()->all(),'id','name'),
    		['promt'=>'Оберіть назву групи']
	)->label('Відділення'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Стоврити' : 'Оновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
