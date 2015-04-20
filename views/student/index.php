<?php
use yii\helpers\Html;
?>

<h3>Список студентів групи
<?php	
//echo $group[current($students)->group_college]->name;
	foreach($group as $gr)
	{
		if(current($students)->group_college==$gr->id)
		{
			echo $gr->name;
			break;
		}
	}
?>
</h3>
<?php
	foreach ($students as $stud) 
	{
?>
	<li>
		<a href="?r=student-mark/index&id=<?=$stud->id?>"><?=$stud->surname.' '.$stud->name;?></a>
	</li>

<?php
	}
?>