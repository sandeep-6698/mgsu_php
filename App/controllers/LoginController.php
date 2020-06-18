<?php
class LoginController extends Controller
{
	function index($id='')
	{
		if(!Session::get('user'))
		{
		$this->view->loadView('Login/index');
		return;
		}
			header("Location:".BASEPATH."Upload");
	}
	function login($id='')
	{
		if(isset($_POST['uname']))
		{
			$this->loadModel('User');
			if(isset($_POST))
			{
			$users=$this->User->getOne($_POST['uname']);
			foreach ($users as $user)
			{
				if($user['pass']==md5($_POST['pass']))
				{
					if($user['active']=='Yes')
					{
					Session::set('user',$user);
					header("Location:".BASEPATH."Upload");
					return;
					}
					else
					Session::set('logerr',"You are blocked,Contact to admin!");
					header("Location:".BASEPATH."Login");
					return;
				}
			}
			Session::set('logerr','Username and Password not matched!');
			}
		}
		header("Location:".BASEPATH."Login");
	}
	function logout($id='')
	{
		if(Session::get('user'))
		Session::destroy();
		header("Location:".BASEPATH."Login");
	}

}
?>