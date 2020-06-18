<?php
class Model extends MYSQLi
{
	function __construct()
	{
	parent::__construct(HOSTNAME,USERNAME,PASSWORD,DB);
	}

	function fetchAlls($sub_id,$year,$sem)
	{
		$sql="SELECT 
		paper.paper_name,
		paper.year,
		paper.sem,
		subject.sub_name 
		FROM paper
		INNER JOIN subject 
		ON paper.sub_id=subject.id 
		WHERE subject.course_id IN($sub_id) 
		AND paper.year IN ($year) 
		AND paper.sem='$sem' 
		AND paper.status='Yes' ";
		//echo $sql;
		$sql=$this->query($sql)->fetch_all(MYSQLI_ASSOC);
		return $sql; 
	}
	function addEdit($data,$id='')
	{

		$qry="INSERT INTO $this->table SET ";
		$where='';
		if($id)
		{
			$qry="UPDATE $this->table SET ";
			$where=" WHERE id=$id";
		}
		foreach($data as $key=>$value)
		{
			$qry.="$key ='$value',";
		}
		$qry=substr($qry,0,-1);
		if($id)
		{
			$qry.=$where;
		}
		if($this->query($qry))
		{
			return true;
		}
		return false;
	}
	function delete($id,$key='id')
	{
		$qry="DELETE FROM $this->table WHERE $key IN ($id)";
		//echo $qry;
		//echo "<br>";
		$this->exec($qry);
	}
	function fetchOne($id)
	{
		$qry="SELECT * FROM $this->table WHERE id=$id";	
		$qry = $this->query($qry)->fetch_all(MYSQLI_ASSOC);;
		return $qry;
	}
	function addNew($data,$filename)
	{
		$qry="INSERT INTO $this->table SET ";
		foreach ($data as $key => $value) {
			$qry.= "$key='$value',";
		}
		$qry.="paper_name='$filename'";
		//echo $qry;
		$this->exec($qry);
	}
	function fetchUser($uname='')
	{
		$qry="SELECT * FROM $this->table";
		if($uname)
		{
		$qry.=" WHERE uname='$uname'";
		}
		$qry = $this->query($qry)->fetch_all(MYSQLI_ASSOC);
		return $qry;
	}
	function fetchPaper($sem='')
	{
	$qry="SELECT paper.id,paper.paper_name,paper.year,paper.sem,subject.sub_name,course.course_name FROM paper INNER JOIN subject ON subject.id=paper.sub_id INNER JOIN course 
ON course.id=subject.course_id WHERE paper.status='No' ORDER BY paper.time DESC";	
	if($sem)
	{
		$qry="SELECT * FROM $this->table WHERE sem=$sem";
	}
		$qry = $this->query($qry)->fetch_all(MYSQLI_ASSOC);
		return $qry;
	}
	// new working
	function fetchDepartInfo($colls='*',$id='')
	{
		$qry="SELECT $colls FROM `department`";
		//echo $qry;
		//exit();
		if($id)
		{
			$qry.=" WHERE id=
			$id";
		}
		return $this->query($qry)->fetch_all(MYSQLI_ASSOC);
	}
	function fetchCourse($dep_id,$colls='*')
	{
		$qry="SELECT $colls FROM `course` WHERE dep_id=$dep_id";
		return $this->query($qry)->fetch_all(MYSQLI_ASSOC);
	}
	function fetchSubject($course_id,$sem='',$colls='*')
	{
		$qry="SELECT $colls FROM `subject` WHERE course_id IN ($course_id) ";
		if($sem)
		{
			$qry.= "AND sem='$sem'";
		}
		return $this->query($qry)->fetch_all(MYSQLI_ASSOC);
	}
	function fetchSem($course_id,$colls='*')
	{
		$qry="SELECT $colls FROM `course` WHERE id=$course_id";
		return $this->query($qry)->fetch_all(MYSQLI_ASSOC);
	}
	function fetchOneCourse($id,$data='*')
	{
		$qry="SELECT $data FROM `course` WHERE id=$id";
		return $this->query($qry)->fetch_all(MYSQLI_ASSOC);
	}
	function fetchAllCourse($id)
	{
		$qry="SELECT * FROM `course` WHERE dep_id=$id";
		return $this->query($qry)->fetch_all(MYSQLI_ASSOC);
	}
	function fetchSingleCourse($id)
	{
		$qry="SELECT * FROM `course` WHERE id=$id";
		//echo "$qry";
		return $this->query($qry)->fetch_all(MYSQLI_ASSOC);;
	}
	function fetchOneSubject($sub_id)
	{
		$qry="SELECT * FROM `subject` WHERE id=$sub_id ";
		return $this->query($qry)->fetch_all(MYSQLI_ASSOC);
	}
	function getPapersName($id)
	{
		$qry="SELECT paper_name FROM `paper` WHERE sub_id IN($id)";
		return $this->query($qry)->fetch_all(MYSQLI_ASSOC);
	}	
}
?>