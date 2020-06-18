<?php

class Course extends Model
{
	
	public $table = "Course";

	function insertCourse($data,$id='')
	{
		$this->addEdit($data,$id);
	}
	function fetchOneCourseData($id)
	{
		return $this->fetchSingleCourse($id);
	}
	function getOneCourse($course_id)
	{
		return $this->fetchSingleCourse($course_id);
	}
	function fetchCourseData($dep_id)
	{
		return $this->fetchOneCourse($dep_id,$data='*');
	}
	function delCourse($id)
	{
		$this->delete($id);
	}
	function delCourses($id)
	{
		$this->delete($id,'dep_id');
	}
	function getCourses($dep_id)
	{
		return $this->fetchCourse($dep_id,'id');
	}
	function getYear($course_id,$data)
	{
		return $this->fetchOneCourse($course_id,$data);
	}
}
?>