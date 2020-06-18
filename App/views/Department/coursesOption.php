<?php 
	foreach ($this->data as $course) {
	?>
	<option value="<?=$course['id']?>"><?=$course['course_name']?> </option>
<?php }
?>