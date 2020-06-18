	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<h1 class="text-center login-title">Download Paper</h1>
				<div class="account-wall">
		<form class="form-signin" name="form" action="<?php echo BASEPATH."Download/listing";?>" method="post">
	<div class="form-group">
		Class:<select name="class" id="class" onchange ="getSem(this);" class="form-control" required="" autofocus="">
			<option value="" selected="">Choose Course</option>
			<?php 
			foreach ($this->data as $data) {
			?>
			<option value="<?=$data['id'];?>"><?=$data['course_name']?></option>
			<?php
				}
			?>
		</select>	
	</div>
	<div class="form-group">
		Semester:<select name="sem" id="sem" class="form-control" required="">
			<option value="" selected="">Choose</option>
		</select>	
	</div>
	<div class="form-group">
		<?php
		$dt= new DateTime("now", new DateTimeZone('Asia/Kolkata'));
		$dt->setTimestamp(time());
		$cy = $dt->format('Y');
		?>
		Year:<select name="year[]" class="form-control" required="">
			<option value="" disabled="">Choose Year</option>
		<option value="<?php echo $cy; ?>"><?php echo $cy; ?></option>
	<option value="<?php echo $cy-1; ?>"><?php echo $cy-1; ?></option>
	<option value="<?php echo $cy-2; ?>"><?php echo $cy-2; ?></option>
	<option value="<?php echo $cy-3; ?>"><?php echo $cy-3; ?></option>
	<option value="<?php echo $cy-4; ?>"><?php echo $cy-4; ?></option>	
		</select>	
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit">
	</div>
</form>
</div>
</div>
</div>
</div>
<!--
<div id="course"> </div>
<script type="text/javascript">
function course(dep_id)
	{
		$('#course').html('loading...');
		$.ajax({
			url:"http://localhost/mgsu/Download/getCourse",
			data:"dep_id="+dep_id,
			type:'post',
			success:function(r){
				$('#course').html(r);
			}
		});
	}
	
</script>
-->