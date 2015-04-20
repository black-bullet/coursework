<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupCollege */

$this->title = 'Update Group College: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Group Colleges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="group-college-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
