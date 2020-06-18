	<?php

if(!$this->data)
{   ?>
      <div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Info! </strong>
      <?php
      echo "Data Not Found.";
      ?>
      </div>
  </div>
  <?php }
else
{
$year='';
foreach ($this->data as $data){
	$year.= $data['year'].',';
	}
?>
<div class="container" style="margin-top: 10px; border:1px solid; padding: 0px">
<table class="table table-hover text-center" style="">
	<tr>
		<th colspan="4">Semester: 
			<?php if($data['sem']=='0'){echo "Annual";}else echo "Semester-".$data['sem'];?>
		</th>
	</tr>
	<tr>
		<th colspan="4">Year: 
			<?php echo substr($year,0,-1);
			 ?>
				
			</th>
	</tr>
	<tr>
		<th>#</th>
		<th>Subject</th>
		<th>Year</th>
		<th>Action</th>
	</tr>
	<?php
$count=1;
foreach ($this->data as $data) 
{
	?>
	<tr>
		<td>
			<?php echo $count++."."; ?>
		</td>
		<td>
			<?php echo $data['sub_name'];?>
		</td>
		<td>
			<?=$data['year'];?>
		</td>
		<td>
			<a href="<?php echo "../Download/download/".$data['paper_name']; ?>" >Download</a>
		</td>
	</tr>
	<?php
}
?>
</table>
</div>
<?php }?>