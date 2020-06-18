<?php
$dep_id='';
if(isset($this->dep_info))
{
	foreach ($this->dep_info as $dep) {
		$dep_id=$dep['dep_id'];}
//print_r($dep);
?>
<div class="container">
	<div style="float: left; margin-bottom: 5px; margin-right: 10px;"><a href="<?php echo BASEPATH."Department/addcourses" ?>" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-plus-sign">&nbsp;Add Courses</span></a>
  </div>
  <div style="float: left; margin-bottom: 5px;"><a href="<?php echo BASEPATH."Department/addsubjects" ?>" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-plus-sign">&nbsp;Add Subjects</span></a>
  </div>
</div>
<?php
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="<?=BASEPATH.'Department/insert/'.$dep_id?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="dep_name">Department</label>
					<input type="text" class="form-control" name="dep_name" required autofocus id="dep_name" value="<?php if(isset($dep['dep_name']))echo $dep['dep_name']?>">					
				</div>
				<div class="form-group">
					<label for="dep_description">Description</label>
					<textarea name="dep_description" class="form-control"><?= $dep['dep_description']??'' ;?></textarea>
				</div>
				<div class="form-group">
					<label for="dep_img_name">Image</label>
					<input type="file" id="dep_img_name" name="dep_img_name" class="form-control" <?php if(!isset($this->dep_info)) echo "required=";?>>
					<?php
					if(isset($this->dep_info))
					{
					?> 
					<input type="hidden" name="dep_img_name" value="<?=$dep['dep_img_name']??''?>">
					<?php }?>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Save and Next</button>
				</div>
			</form>
		</div>
	</div>
	
</div>