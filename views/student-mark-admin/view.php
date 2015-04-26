<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MarkTable */

$this->title = $model->student0->surname.' '.$model->student0->name;
$this->params['breadcrumbs'][] = ['label' => 'Відомість', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mark-table-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            ['label'=>'Студент',
            'value'=>$model->student0->surname.' '.$model->student0->name],
            ['label'=>'Предмет',
            'value'=>$model->subject0->name],
            ['label'=>'Оцінка',
            'value'=>$model->mark],
        ],
    ]) ?>

</div>
