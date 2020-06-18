<?php
class Upload extends Model
{
	public $table='paper';
	function addData($data,$filename)
	{
		$this->addNew($data,$filename);
	}
	function updateStatus($id)
	{
		$data=array('status'=>'Yes');
		$this->addEdit($data,$id);
	}
	function delPaper($id)
	{
		$this->delete($id);
	}
	function getFile($id)
	{
		return $this->fetchOne($id);
	}
	function getData($year)
	{
		return $this->fetchPaper($year);
	}
	function fetchDep($colls)
	{
		return $this->fetchDepartInfo($colls);
	}
	function fetchCourseData($dep_id)
	{
		return $this->fetchCourse($dep_id);
	}
	function fetchSubjectData($course_id,$sem)
	{
		return $this->fetchSubject($course_id,$sem);
	}

}
?>