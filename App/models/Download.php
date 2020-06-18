<?php
class Download extends Model
{
	public $table='paper';
	function getData($course_id,$year,$sem)
	{
		return $this->fetchAlls($course_id,$year,$sem);
	}
	function paperList()
	{
		return $this->fetchPaper();
	}
	function fetchDepart()
	{
	return $this->fetchDepartInfo();
	}
	function sub_data($course_id)
	{
		return $this->fetch($course_id);
	}
}
?>