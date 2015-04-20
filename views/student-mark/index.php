<?php
	use yii\helpers\Html;
?>

<h3>Список оцінок -
<?php
	foreach ($students as $stud) 
	{
		if(current($markTable)->student==$stud->id)
		{
			echo $stud->surname.' '.$stud->name;
			break;
		}
	}
?>
<h3/>

<?php
	foreach($markTable as $mark)
	{
?>
	<li>
		<?php
			foreach($subject as $sub)
			{
				if($mark->subject==$sub->id)
				{
					echo $sub->name." - ".$mark->mark;;
					break;
				}
			}
		?>
	</li>

<?php
	}
?>