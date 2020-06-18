<?php foreach($this->course_data as $course){}?>
 <div class="container">
 	<div class="row">
 		<div class="col-sm-2"></div>
 		<div class="col-sm-8">
 			<form action="<?=BASEPATH."Department/addsubjects"?>" method="post" id="sub_form">
 				<h2 align="center"><?=$course['course_name']?></h2>
 				<?php
				for($i=1;$i<=$course['num_year_sem'];$i++){
					?>
					<div>
					<?php
					if($course['yearly']==0):
						echo "Semester-$i";
						?>
						<input type="hidden" name="sem[]" value="<?=$i?>">
						<?php
					else:
						echo "Year-$i";
						?>
	
						<input type="hidden" name="sem[]" value="<?='1'.$i?>">
						<?php
					endif;
					?>
					<a style="float: right" class="btn btn-info btn-sm" href="#" onclick="return addsub(this.id)" id="<?=$i?>">Add New</a></div>
				<div class="form-group sub_box" id="sub<?=$i?>" style="float: left;">
 					<input type="text" class="form-control" name="sem<?=$i?>[]">
 					<input type="text" class="form-control" name="sem<?=$i?>[]">
 					<input type="text" class="form-control" name="sem<?=$i?>[]">
 					<input type="text" class="form-control" name="sem<?=$i?>[]">
 				</div>
				<?php }?>	
 				<input type="hidden" name="sem[]" value="<?=$course['id']?>">
 				<input type="submit" class="btn btn-success btn-block" value="Submit">
 			</form>
 		</div>
 	</div>
 </div>