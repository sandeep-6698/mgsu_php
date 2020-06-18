<?php
foreach ($this->data as $data) {}
?>
<div class="container">
	<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
	<h1 class="text-center login-title">Update Account</h1>
	<div class="account-wall">
	<form class="form-signin" method="post" action="<?php echo BASEPATH."User/adduser/".$data['id'];?>">
	Enter You Username:
	<input type="text" value="<?php echo $data['uname'];?>" class="form-control" name="uname" placeholder="Username " required readonly>
	Enter Your Password:
	<input type="text" onkeyup="validPass(this)" onchange="validPass(this)" value="<?php echo $data['dcrypt_pass'];?>" class="form-control" id="pass" name="pass" placeholder="Password" required autofocus>
	
	Confirm Password:
	<input type="password" onkeyup="confPass(this.value,$('#pass').val())" onchange="confPass(this.value,$('#pass').val())" class="form-control" placeholder="Confirm password" required><p id="confMsg" style="color: red;"></p>

	Enter Your Mobile No.:
	<input type="text" onkeyup="validMob(this)" onchange="validMob(this)" value="<?php echo $data['mob'];?>" class="form-control" name="mob" placeholder="Mobile" required>
	
	Select User Role:
	<select name="role" class="form-control" <?php if($data['uname']==Session::get('user')['uname']) echo "disabled";?> >
		<option disabled="">Role</option>
		<option value="Owner" <?php if($data['role']=="Owner") echo "Selected";?> >Owner</option>
		<option value="Operator" <?php if($data['role']=="Operator") echo "Selected";?>>Operator</option>
	</select>
	Select User Status:
	<select name="active" class="form-control" <?php if($data['uname']==Session::get('user')['uname']) echo "disabled";?>>
		<option disabled="">Active</option>
		<option value="Yes" <?php if($data['active']=="Yes") echo "Selected";?>>Yes</option>
		<option value="No" <?php if($data['active']=="No") echo "Selected";?> >No</option>
	</select>
	<input class="btn btn-lg btn-primary btn-block"  type="submit"
	value="Update" onclick="return validUpdateStatus();">
	</form>
	</div>
	</div>
	</div>
	</div>