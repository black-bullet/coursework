<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarkTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Відомість';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mark-table-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ввести оцінку', ['create'], ['class' => 'btn btn-success']) ?>
        <span style="float:right">
            <?php
                $url="http://semester/?r=subject-admin";
                echo Html::a('Перегляд списку предметів',$url, ['class' => 'btn btn-success']) 
            ?>
        </span>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['label'=>'Прізвище',
            'value'=>'student0.surname'],
            ['label'=>"Ім'я",
            'value'=>'student0.name'],
            ['label'=>'Оцінка',
            'value'=>'mark'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
