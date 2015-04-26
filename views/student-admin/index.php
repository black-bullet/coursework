<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Студенти';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cтоврити студента', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['label'=>'Прізвище',
            'value'=>'surname'],
            ['label'=>"Ім'я",
            'value'=>'name'],
            ['label'=>'Групи','value'=>'group0.name'],
            [
                'label'=>'',
                'format'=>'raw',
                'value' => function($data){
                    $url = "http://semester/index.php?r=student-mark-admin";
                    return Html::a('Перегляд оцінок', $url, ['title' => 'Натисніть для перегляду оцінок студента']);
                }    
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
