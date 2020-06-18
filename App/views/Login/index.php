<div class="container">
	<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
	<div class="account-wall">
	<img class="profile-img" src="<?php echo BASEPATH."public/img/user.png"?>"
	alt="">
	<form class="form-signin" action="<?php echo BASEPATH."Login/login";?>" method="post">
	<input type="text" class="form-control" name="uname" id="username" placeholder="Username " required autofocus>
	<input type="password" class="form-control" name="pass" id="password" placeholder="Password" required>
	<input class="btn btn-lg btn-primary btn-block" type="submit"
	value="Sign in" onclick="return validate()">
	<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
	</form>
	</div>
	</div>
	</div>
	</div>