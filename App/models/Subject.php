<?php

class Subject extends Model
{
	
	public $table = "Subject";
	function insertSubject($data)
	{
		$this->addEdit($data);
	}
	function getSubjects($id,$sem='',$colls='')
	{
		return $this->fetchSubject($id,$sem='',$colls='*');
	}
	function getOneSubjects($id)
	{
		return $this->fetchOneSubject($id);
	}
	function addsubject($data,$id='')
	{
		$this->addEdit($data,$id);
	}
	function delSub($id)
	{
		$this->delete($id);
	}
	function delSubjests($id)
	{
		$this->delete($id,'course_id');
	}
}
?>