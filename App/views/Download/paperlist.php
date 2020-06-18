<div id="paperlist" class="container">
<h3 class="text-center">Paper List</h3>
<table class="table table-bordered table-hover text-center">
	<tr>
		<th>
			#
		</th>
		<th>
			Class
		</th>
		<th>
			Semester
		</th>
		<th>
			Subject
		</th>
		<th>
			Year
		</th>
		<th>
			Download
		</th>
		<th>
			Action
		</th>
	</tr>
	<?php
	$count =1;
	foreach ($this->data as $data) {
	
	?>
	<tr>
		<td>
			<?php echo $count++; ?>
		</td>
		<td>
			<?php echo $data['course_name']; ?>
		</td>
		<td>
			<?php if(preg_match("/[0-9]{2}/",$data['sem']))
			echo "Year - ".$data['sem']%10;
			else
			echo "Semester-".$data['sem']%10; ?>
		</td>
		<td>
			<?php echo $data['sub_name']; ?>
		</td>
		<td>
			<?php echo $data['year']; ?>
		</td>
		<td>
			<a href="<?php echo BASEPATH."Download/download/".$data['paper_name']; ?>">Download</a>
		</td>
		<td>
			<a href="<?php echo BASEPATH."Upload/update/".$data['id'];?>">Publish</a> | <a onclick="return del();" href="<?php echo BASEPATH."Upload/delete/".$data['id'];?>">Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</div>