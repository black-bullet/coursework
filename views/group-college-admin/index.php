<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupCollegeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Group Colleges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-college-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Group College', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'section.name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
