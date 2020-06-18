<?php
class UserController extends Controller
{
	function index($id='')
	{	
		if(Session::get('user'))
		{
		$this->view->loadView('User/index');
		return;
		}
		header("Location:".BASEPATH."Login");
	}
	function adduser($id='')
	{
		if(Session::get('user'))
		{
		if(isset($_POST['uname']))
		{
			$this->loadModel('User');
		//$userdata=$this->User->listUser();
			$_POST['uname']=addslashes($_POST['uname']);
			$_POST['dcrypt_pass']=addslashes($_POST['pass']);
			$_POST['pass']=md5(addslashes($_POST['pass']));
			$_POST['mob']=addslashes($_POST['mob']);
			$user_data=$_POST;
			if($id)
			{
				unset($user_data['uname']);
			}
			if($this->User->addEditUser($user_data,$id))
			{
				if($_POST['uname']==Session::get('user')['uname'])
				{
					$tmp = Session::get('user');
					$tmp['mob']=$_POST['mob'];
					$tmp['pass']=$_POST['pass'];
					Session::set('user',$tmp);
					Session::set('success',"Admin updated successfully.");
					header("Location:".BASEPATH."User/list");
					return;
				}
				Session::set('success',"New user inserted.");
			if($id)
				Session::set('success',"User updated successfully.");
			header("Location:".BASEPATH."User/list");
			return;
			}
			else
			{
			Session::set('alert','Sorry this username is already exists!');
			header("Location:".BASEPATH."User");
			return;
			}
		}
			header("Location:".BASEPATH."User/list");
		    return;
		   }
		 header("Location:".BASEPATH."Login");
		}
		
	function list($id='')
	{	if(Session::get('user'))
		{
		$this->loadModel('User');
		$this->view->data=$this->User->listUser();
		$this->view->loadView('User/list');
		return;
		}
		header("Location:".BASEPATH."Login");
	}
	function delete($id='')
	{
		if($id)
		{
			$this->loadModel('User');
			$this->User->delUser($id);
			Session::set('success',"User deleted successfully.");
			header("Location:".BASEPATH."User/list");
		}
	}
	function update($id)
	{
		if($id)
		{
			$this->loadModel('User');
			$this->view->data=$this->User->oneUser($id);
			$this->view->loadView('User/update');
		}
	}
}
?>