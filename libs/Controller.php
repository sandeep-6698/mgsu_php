<?php
class Controller
{
	function __construct()
	{
	$this->view = new View();
	}
	function loadModel($modalname,$modalobjname='')
	{
		if(!$modalobjname)
		{
			$modalobjname=$modalname;
		}
		$modalname=ucfirst(strtolower($modalname));
		$modalpath="App/models/$modalname.php";
		if(file_exists($modalpath))
		{
			include_once($modalpath);
			$this->$modalobjname=new $modalname;
		}
	}
}
?>