<?php
class View
{
	function loadView($filename,$h=1,$f=1)
	{
		if($h)
		{
			include "App/views/header.php";
		}
		$filename="App/views/$filename.php";
	if(file_exists($filename))
	{
	include_once($filename);
	}
	if($f)
		{
			include "App/views/footer.php";
		}
	}
}
?>