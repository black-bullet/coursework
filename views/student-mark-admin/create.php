<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MarkTable */

$this->title = 'Ввести оцінку';
$this->params['breadcrumbs'][] = ['label' => 'Відомість', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mark-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
