<?php
use yii\helpers\Html;
?>


<h3>Cписок груп:</h3>
<ul>
<?php foreach ($group as $gr): ?>
    <li>
        <a href="?r=student/index&group=<?=$gr->id?>"><?= Html::encode("{$gr->name}") ?></a>
    </li>
<?php endforeach; ?>
</ul>
