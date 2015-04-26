<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SectionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список відділеннь';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Стоврити нове відділення', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['label'=>'Відділення',
            'value'=>'name'],
            [
                'label'=>'',
                'format'=>'raw',
                'value' => function($data){
                    $groups=
                    $url = "http://semester/?r=group-college-admin/index";
                    return Html::a('Перегляд груп', $url, ['title' => 'Натисніть для перегляду груп відділення']);
                }    
            ],
            //'id',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
 
</div>

