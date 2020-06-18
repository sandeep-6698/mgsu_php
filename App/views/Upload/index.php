<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<h1 class="text-center login-title">Upload Paper</h1>
				<div class="account-wall" style="padding: 20px">
	<form action="<?= BASEPATH."Upload/insert";?>" method="post" enctype="multipart/form-data" >
<div class="form-group">
Department:	
	<select onclick="scourse(this.value)" class="form-control select-box" required="" autofocus="">
		<option value="" selected="">Choose Department</option>
		<?php
		foreach ($this->dep_data as $dep) {
		?>
		<option value="<?=$dep['id']?>"><?=$dep['dep_name']?></option>
		<?php
		}
		?>
	</select>
</div>
<div class="form-group">
	Course:
	<select id="course" required="" class="form-control select-box"  onclick="subject(document.getElementById('sem').value , document.getElementById('course').value),getSem(this)" >
	<option value="" selected="">Choose Course</option>
	</select>
</div>
<div class="form-group">
	Semester:
	<select name="sem" id="sem" class=" form-control select-box" onclick="subject(this.value , document.getElementById('course').value)">	
		</select>
		<input type="hidden" name="status" value='No'>	
</div>
<div class="form-group">
	Subject
	<select id="sub" name="sub_id" required="" class=" form-control select-box" >
	<option value="" selected="">Choose Subject</option>
	</select>
</div>
<div class="form-group">
		<?php
		$dt= new DateTime("now", new DateTimeZone('Asia/Kolkata'));
		$dt->setTimestamp(time());
		$cy = $dt->format('Y');
		?>
	Year:<select name="year" class="form-control select-box" required="">
		<option value="" selected="">Choose Year</option>
		<option value="<?php echo $cy; ?>"><?php echo $cy; ?></option>
		<option value="<?php echo $cy-1; ?>"><?php echo $cy-1; ?></option>
		<option value="<?php echo $cy-2; ?>"><?php echo $cy-2; ?></option>
		<option value="<?php echo $cy-3; ?>"><?php echo $cy-3; ?></option>
		<option value="<?php echo $cy-4; ?>"><?php echo $cy-4; ?></option>	
	</select>	
</div>
<div class="form-group">
		File:
		<input type="file" name="file" accept="application/pdf" class=" form-control" requird="">
</div>
<div class="form-group">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
