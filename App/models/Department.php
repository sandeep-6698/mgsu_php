<?php
class Department extends Model
{
	public $table='department';

	function getDepData($colls='*',$wh='')
	{
		return $this->fetchDepartInfo($colls,$wh);
	}
	function insertDep($data,$id='')
	{
		$this->addEdit($data,$id);
	}
	function updateDep($id)
	{	
		return $this->fetchOne($id);
	}
	function getId($dep_name)
	{
		$wh = "dep_name = '$dep_name'";
		return $this->fetchDepartInfo('id',$wh);	
	}
	
	function delDepartmen($dep_id)
	{
		$this->table = 'department';
		$this->delete($dep_id);
	}
	function delPapers($id)
	{
		$this->table = 'paper';
		$this->delete($id,'sub_id');
	}
	function getPaperData($id)
	{
		return $this->getPapersName($id);
	}
	
}
?>