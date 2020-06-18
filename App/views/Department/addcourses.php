<?php $id=''; if(isset($this->dep_data)){$id=$this->dep_data[0]['id'];}?>
<div class="container">
	<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 col-sm-12">
		<div class="heading col-sm-12">
    <h3>Add New Courses</h3>
		 <div style="float: right"><a href="<?=BASEPATH."Department/update/".$id?>" class="btn btn-warning btn-sm">Update Courses</a>
     </div>
    </div>
<div class="form-box col-sm-12">
  <form action="<?=BASEPATH."Department/addcourses/".$id?>" method="post">
     <div class="form-group">
    <label for="dep_name">Department</label>
    <select id="dep_name" class="form-control select-box">	
	<?php 
  if($this->dep_data):
	foreach ($this->dep_data as $dep_data) {
 ?>
 <option value="<?=$dep_data['id']?>"><?=$dep_data['dep_name']?></option>
 <?php
    	} else: ?>
		 <option><?php echo Session::get('new_dep')['dep_name'];?></option>
    <?php endif; ?>
    </select>
  </div>
  <div class="form-group course-box" id="course">
  	 <span class="btn btn-warning btn-sm" id="addBtn" style="float: right;" title="Add new input box"><i class="glyphicon glyphicon-plus-sign"> Add</i></span>
  	<label for="course_name">Courses</label>
  	<div style="margin-bottom: 20px;">
    
    </div>
   </div>
    <div class="form-group">
  <button type="submit" class="btn btn-success btn-block">Submit</button>
</div>
 </form>
</div>	
</div>
</div>
</div>