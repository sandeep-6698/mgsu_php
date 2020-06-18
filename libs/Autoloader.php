<?php
class Autoloader
{
	function __construct()
	{
		Session::init();
//include_once("App/views/header.php");
$controller='DownloadController';
$method='index';
$id='';
if(isset($_GET['url']))
{
$url=explode('/',(rtrim($_GET['url'],'/')));
$controller=ucfirst(strtolower($url[0])).'Controller';
if(!file_exists("App/controllers/$controller.php"))
	$controller='DownloadController';
include("App/controllers/".$controller.'.php');
$obj=new $controller;
if(isset($url[1]) && method_exists($obj, $newMethod=strtolower($url[1])))
{
$method=$newMethod;
}
if(isset($url[2])){$id=$url[2];}
$obj->$method($id);
return;
}
include("App/controllers/".$controller.'.php');	
$obj=new $controller;
$obj->$method($id);
}
}
?>
