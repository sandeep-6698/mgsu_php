<?php
class User extends Model
	{
	
	public $table='User';
	function getOne($username)
	{
		return $this->fetchUser($username);
	}
	function addEditUser($data,$id='')
	{
		return $this->addEdit($data,$id);
	}	
	function listUser()
	{
		return $this->fetchUser();
	}
	function delUser($id)
	{
		$this->delete($id);
	}
	function oneUser($id)
	{
		return $this->fetchOne($id);
	}
}
?>