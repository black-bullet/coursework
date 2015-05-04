<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupCollegeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Групи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-college-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити нову групу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label'=>'Назва групи',
                'value'=>'name'
            ],
            //'name',
            ['label'=>'Відділення','value'=>'section0.name'],
            [
                'label'=>'',
                'format'=>'raw',
                'value' => function($data){
                    $url = "http://semester/?r=student-admin";
                    return Html::a('Перегляд студентів', $url, ['title' => 'Натисніть для перегляду студентів групи']);
                }    
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
