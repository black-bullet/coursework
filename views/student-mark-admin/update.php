<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MarkTable */

$this->title = 'Оновити відомість';
$this->params['breadcrumbs'][] = ['label' => 'Відомість', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->student0->surname.' '.$model->student0->name,
								 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Оновити';
?>
<div class="mark-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
