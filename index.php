<?php
$configfiles=glob("config/*.php");
foreach($configfiles as $fls)
	require_once $fls;
$libsfiles=glob("libs/*.php");
foreach($libsfiles as $fls)
	require_once $fls;
$obj=new Autoloader();


?>

