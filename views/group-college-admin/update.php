<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupCollege */

$this->title = 'Оновити: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Групи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Оновити';
?>
<div class="group-college-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
