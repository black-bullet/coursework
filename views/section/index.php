<?php
use yii\helpers\Html;
?>

<h3>Cписок відділень:</h3>
<ul>
<?php foreach ($section as $sec): ?>
    	<li>
        	<a href="?r=group-college/index&section=<?=$sec->id?>">
        		<?= Html::encode("{$sec->name}") ?>
        	</a>
    	</li>
<?php endforeach; ?>
</ul>
