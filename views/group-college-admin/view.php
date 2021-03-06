<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GroupCollege */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Групи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-college-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновоити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви впевнені, що хочете видалити цей запис?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            ['label'=>'Група',
            'value'=>$model->name],
            ['label'=>'Відділення',
            'value'=>$model->section0->name],
        ],
    ]) ?>

</div>
