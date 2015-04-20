<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GroupCollege */

$this->title = 'Create Group College';
$this->params['breadcrumbs'][] = ['label' => 'Group Colleges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-college-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
