<?php
//print_r($this->course);
//print_r($this->sub);
foreach ($this->sub as $sub) {}
?>
<div class="container">
	<form action="<?=BASEPATH."Department/updatesub/".$sub['id']?>" method="post">
	<table class="table table-bordered text-right">
	<tr>
		<td>Subject Name: </td>
		<td><input type="text" name="sub_name" class="form-control" value="<?=$sub['sub_name']?>"></td>
	</tr>	
	<tr>
		<td><?php
		if($this->course[0]['yearly']==0)
			echo "Semester";
		else
			echo "Year";
		?></td>
		<td>
			<select class="form-control" name="sem">
				<?php
				$j=1;
				for ($i=1; $i <= $this->course[0]['num_year_sem']; $i++) { 
					?>
					<option value="<?php
			if($this->course[0]['yearly']==0){echo "$i";} 
			else {echo ($i+10);} 
			?>"
			<?php if($sub['sem']==$i or $sub['sem']==($i+10)){echo "selected";}?>
			>
		<?php
		if($this->course[0]['yearly']==0){echo "Semester";}
		else {echo "Year";} 

		echo " - $i"; 
		?>
		</option>
		<?php }?>
		</select></td>
	</tr>
	<tr><td colspan="2"><input type="submit" class="btn btn-success btn-block" value="Update"></td></tr>
	</form>
	</table>
</div>