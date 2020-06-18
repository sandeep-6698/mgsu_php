<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 col-sm-12">
		<div class="heading col-sm-12">
    <h3>Update Courses</h3>
    <div style="float: right;"></div>
    </div>
<div class="form-box col-sm-12">
	<form action="<?=BASEPATH."Department/update"?>" method="post">
		<?php
		$i=0;
foreach ($this->courses as $course) {
	$i++;
?>
<div class="course_boxes">
	<a style="margin-bottom: 5px;" href="<?=BASEPATH."Department/updatesubjects/".$course['id'].$course['yearly'].$course['num_year_sem'];?>" class="btn btn-xs btn-info">Edit Subjects</a>
	<a style="margin-bottom: 5px;" href="<?=BASEPATH."Department/addsubjects/".$course['id']?>" class="btn btn-warning btn-xs">Add New Subjects</a>
	<input type="text" class="form-control" name="course<?=$i?>[]" placeholder="" value="<?=$course['course_name']?>" required>
<input type="radio" name="course<?=$i?>[]" value="1" class="form-check-input" checked="" onclick="return false">yearly
<input type="radio" name="course<?=$i?>[]" value="0" class="form-check-input" <?php if($course['yearly']==0)echo "checked";?> onclick="return false">Semester
<input type="number" name="course<?=$i?>[]" value="<?=$course['num_year_sem']?>" class="form-control">
<span><a style="color:red;" onclick="return del();"href="<?=BASEPATH."Department/delcourse/".$course['id'];?>" onclick="return ">Delete this course</a></span>
<input type="hidden" name="course<?=$i?>[]" value="<?=$course['id']?>">
</div>
<?php }?>
<div class="form-group">
<input class="form-control btn btn-success" type="submit" value="Update">
</div>
</form>
</div>
</div>
</div>
</div>
</div>