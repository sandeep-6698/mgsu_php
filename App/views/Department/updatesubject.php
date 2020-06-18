<?php
if($this->yearly==0)
{
	$name = "Semester";
}
else
{
	$name = "Year";
}?>
	<div class="container">
<table class="table table-bordered table-striped table-hover text-center"> 
	<tr>
	<th>
		#
	</th>
	<th>
		Subject Name
	</th>
	<th>
		<?=$name?>
	</th>
	<th>
		Action
	</th>
</tr>
<?php
$count =1;
foreach ($this->sub_data as $sub) {
?>
<tr>
	<td>
		<?=$count++?>
	</td>
	<td>
		<?=$sub['sub_name']?>
	</td>
	<td>
				<?=$name." - ".$sub['sem']%10?>

	</td>
	<td>
		<a href="<?=BASEPATH."Department/updatesub/".$sub['id']?>">Edit</a>&nbsp;&nbsp;&nbsp;
		<a onclick="return del();" href="<?=BASEPATH."Department/deletesub/".$sub['id']?>">Delete</a>
	</td>
</tr>
<?php }?>
</table>
</div>
