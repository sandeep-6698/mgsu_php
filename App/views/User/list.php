<div class="container">
<h1 class="text-center">Users List</h1>
<table class="table table-bordered table-hover text-center">
	<tr>
		<th>
			#
		</th>
		<th>
			Username
		</th>
		<th>
			Password
		</th>
		<th>
			Mobile No.
		</th>
		<th>
			Role
		</th>
		<th>
			Status
		</th>
		<th>
			<a href="<?php echo BASEPATH."User" ?>" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-plus-sign">&nbsp;Add New</span></a>
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
			<?php echo $data['uname']; ?>
		</td>
		<td>
			<?php echo $data['dcrypt_pass'] ?>
		</td>
		<td>
			<?php echo $data['mob']; ?>
		</td>
		<td>
			<?php echo $data['role']; ?>
		</td>
		<td>
			<?php if($data['active']=='Yes')
			{?>
				<span class="glyphicon glyphicon-eye-open" style="color:green">&nbsp;Active</span>
				<?php } else {?> <span class="glyphicon glyphicon-eye-close" style="color:red" >&nbsp;Inactive</span><?php }?>
		</td>
		<td>
			<a href="<?php echo BASEPATH."User/update/".$data['id'];?>"><span class="glyphicon glyphicon-pencil" style="color: yellow"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 
 			 <?php if($data['uname']!=Session::get('user')['uname']):?>
			  <a onclick="return del();" href="<?php echo BASEPATH."User/delete/".$data['id'];?>"><span class="glyphicon glyphicon-trash" style="color: red"></span></a>
			  <?php else:
				?>
				<a onclick="alert('You can not delete the current user!')" href="#"><span  class="glyphicon glyphicon-trash"></span></a>
				<?php
				endif;
				?>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</div>