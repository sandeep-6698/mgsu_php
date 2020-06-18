<!DOCTYPE html>
<html>
<head>
	<title>mgsu paper</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH;?>public/css/bootstrap.min.css">
  <script type="text/javascript" src="<?php echo BASEPATH;?>public/js/jQuery.js"></script>
  <script type="text/javascript" src="<?php echo BASEPATH;?>public/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH;?>public/css/style.css">
  <script type="text/javascript" src="<?php echo BASEPATH;?>config/JSconfig.js"></script>
  <script type="text/javascript" src="<?php echo BASEPATH;?>public/js/custom.js"></script>
</head>
<body>
  <!--Navbar start-->
	<nav class="navbar" style="margin-bottom: 0px;">
  <div class="container-fluid">
    <div class="navbar-header dropdown">
     <a class="btn navbar-brand dropdown-toggle" data-toggle="dropdown">MGSU <span class="caret"></span></a>
      <ul class="dropdown-menu">
      <li><a href="https://mgsubikaner.ac.in/" target="blank"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Mgsu Offical</a></li>
      <li><a href="http://mgsulibrary.ezyro.com" target="blank"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Library</a></li>
    </ul>

    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo BASEPATH."Download"?>">Home</a></li>
      <?php if(Session::get('user')){?>
      <li><a href="<?php echo BASEPATH."Upload"?>">Upload</a></li>
  <?php } if(@Session::get('user')['role']=="Owner"){ ?>
      <li><a href="<?php echo BASEPATH."User/list"?>">User List</a></li>
       <li><a href="<?php echo BASEPATH."Download/allpaper"?>">Paper List</a></li>
       <li><a href="<?php echo BASEPATH."Department/index"?>">Department</a></li>
      <?php } ?>
    </ul>
    <?php
    if(!Session::get('user')){
    ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo BASEPATH."Login"?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
<?php } else {?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo BASEPATH."Login/logout"?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
<?php } ?>
  </div>
</nav>
<!-- navbar closed-->

<!-- alert box-->
    <?php
    //login error alert box
    if(Session::get('logerr'))
    {
      ?>
      <div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Error! </strong>
      <?php
      echo Session::get('logerr');
      ?>
      </div>
      <?php
      Session::del('logerr');
    }
    //Success box
    if(Session::get('success'))
    {
      ?>
      <div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success! </strong>
      <?php
      echo Session::get('success');
      ?>
      </div>
      <?php
      Session::del('success');
    }

    if(Session::get('alert'))
    {
      ?>
      <div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Alert! </strong>
      <?php
      echo Session::get('alert');
      ?>
      </div>
      <?php
      Session::del('alert');
    }
    ?>
    <div id="main">
