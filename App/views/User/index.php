<div class="container">
	<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
	<h1 class="text-center login-title">Create an account</h1>
	<div class="account-wall">
	<form class="form-signin" method="post" action="<?php echo BASEPATH."User/adduser"?>">
	Enter You Username:
	<input type="text" onkeyup="validUname(this)" onchange="validUname(this)" class="form-control" name="uname" placeholder=" At Least 6 Character(Only @_.- Allow)" required autofocus>
	Enter Your Password:
	<input type="password" onkeyup="validPass(this)" onchange="validPass(this)" class="form-control" name="pass" id="pass" placeholder="6-8 Character Only(Only @_.- Allow)" required>
	Confirm Password:
	<input type="password" onkeyup="confPass(this.value,$('#pass').val())" onchange="confPass(this.value,$('#pass').val())" class="form-control" placeholder="Confirm password" required><p id="confMsg" style="color: red;"></p>
	Enter Your Mobile No.:
	<input type="text" onkeyup="validMob(this)" onchange="validMob(this)" class="form-control" name="mob" placeholder="10 Digits Only" required>
	Select User Role:
	<select name="role" class="form-control">
		<option disabled="">Role</option>
		<option value="Owner">Owner</option>
		<option value="Operator" selected>Operator</option>
	</select>
	Select User Status:
	<select name="active" class="form-control">
		<option disabled="">Active</option>
		<option value="Yes">Yes</option>
		<option value="No" >No</option>
	</select>
	<input class="btn btn-lg btn-primary btn-block" onclick="return validStatus();" type="submit"  value="Sign Up">
	</form>
	</div>
	</div>
	</div>
	</div>