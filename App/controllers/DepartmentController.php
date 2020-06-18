<?php
class DepartmentController extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->loadModel('Department');
		$this->loadModel('Course');
		$this->loadModel('Subject');
		$this->loadModel('Upload');
	}
	function index($id='')
	{
		if(Session::get('user')['role']=='Owner'){
		$this->view->dep_data=$this->Department->getDepData();
		$this->view->loadView('Department/index');
		return;
		}
		header("Location:".BASEPATH."Login");
	}
	function insert($id='')
	{
		if(isset($_POST['dep_name']))
		{
			$file = array("dep_img_name"=>time().$_FILES['dep_img_name']['name']);
			$_POST=array_merge($_POST,$file);
			Session::set('new_dep',$_POST);
			$tmp_name= $_FILES['dep_img_name']['tmp_name'];
			$filename=$_POST['dep_img_name'];
			$path="public/img/".$filename;
			move_uploaded_file($tmp_name, $path);
			
			//insert new Department
			header("Location:".BASEPATH."Department/addcourses");
			return;
		}
		$this->view->loadView('Department/adddepartment');
	}
	function delete($id='')
	{
		if($id){
		$course_id = $this->Course->getCourses($id);
		$cs_id = '';
		foreach($course_id as $c_id)
		{
			$cs_id .= $c_id['id'].",";
		}
		$dep_img_name = $this->Department->getDepData('dep_img_name',$id);
		if(file_exists("public/img/".$dep_img_name[0]['dep_img_name']))
			{
			unlink("public/img/".$dep_img_name[0]['dep_img_name']);
			}

			//get subjects id
		if($cs_id)
		{
		$sub_id = $this->Subject->getSubjects(substr($cs_id,0,-1),$sem='','id');
		$sb_id='';
		foreach($sub_id as $s_id)
		{
			$sb_id .= $s_id['id'].",";
		}
		//get paper name
		$paper_name = $this->Department->getPaperData(substr($sb_id,0,-1));
		foreach($paper_name as $paper)
		{
			if(file_exists("public/file/".$paper['paper_name']))
			{
			unlink("public/file/".$paper['paper_name']);
			}
		}
		$this->Department->delPapers(substr($sb_id,0,-1));
		}
		$this->Subject->delSubjests(substr($cs_id,0,-1));
		$this->Course->delCourses($id);
		$this->Department->delDepartmen($id);
		Session::set('success',"Department, Courses, Subjects and Papers deleted successfully.");	
		header("Location:".BASEPATH."Department");
		}
		header("Location:".BASEPATH."Department");

	}
	function edit($id='')
	{
		if(isset($id))
		{
		 	$this->view->dep_data=$this->Department->getDepData('id,dep_name',$id);
		 	$this->view->loadView('Department/addcourses');
			//$this->view->loadView('Department/editdepartment');
		}
	}
	function addcourses($id='')
	{
		if(isset($_POST['course0']) and Session::get('new_dep'))
		{
			$courses = $_POST;
			$_POST=Session::get('new_dep');
			$this->Department->insertDep($_POST);
			$id = $this->Department->getId($_POST['dep_name']);
			foreach ($courses as $course){
			$add_course = ['course_name'=>$course[0],'yearly'=>$course[1],'num_year_sem'=>$course[2],'dep_id'=>$id[0]['dep_id']];
				$this->Course->insertCourse($add_course);
				Session::set('success',"New Department created successfully.");			  
			}
			header("Location:".BASEPATH."Department");
			Session::del('new_dep');
			return;
		}
		if(Session::get('new_dep'))
		{
			$this->view->loadView('Department/addcourses');
			return;
		}
		if($id)
		{
			foreach ($_POST as $course){
			$add_course = ['course_name'=>$course[0],'yearly'=>$course[1],'num_year_sem'=>$course[2],'dep_id'=>$id];
				$this->Course->insertCourse($add_course);
				Session::set('success',"Courses inserted successfully.");	

				}
				header("Location:".BASEPATH."Department");
			return;
		}
			header("Location:".BASEPATH."Department");
	}
	function addsubjects($id='')
	{
		if($id)
		{
		$this->view->course_data=$this->Course->fetchOneCourseData($id);
		$this->view->loadView('Department/addsubjects');
		return;
		}

		if($_POST)
		{
			$count = count($_POST);	//4
			$course = $_POST['sem'][$count-1];
			for($i=1;$i < $count;$i++)
			{
				for($j=0;$j < count($_POST['sem'.$i]); $j++)
				{
					if($_POST['sem'.$i][$j] != '')
					{
						//echo $_POST['sem'.$i][$j]."<br>";
						$sub = ['sub_name'=>addslashes($_POST['sem'.$i][$j]),'course_id'=>$course,'sem'=>$_POST['sem'][$i-1]]; 
						//print_r($sub);
						$this->Subject->insertSubject($sub);
						Session::set('success',"New Subjects inserted successfully.");	
					}	
				}
			}
			header("Location:".BASEPATH."Department");
			return;
		}
		header("Location:".BASEPATH."Department");
	}
	function update($id='')
	{	
			if($id):
			$this->view->courses=$this->Upload->fetchCourseData($id);
		 	$this->view->loadView('Department/updatecourse');
		 else:
		 	foreach ($_POST as $course){
		 		$update_course = ['course_name'=>$course[0],'yearly'=>$course[1],'num_year_sem'=>$course[2]];
		 		$id=$course[3];
		 		$this->Course->insertCourse($update_course,$id);
		 		Session::set('success',"Courses updated successfully.");	
		 		header("Location:".BASEPATH."Department");
		 	}
		 	header("Location:".BASEPATH."Department");
		 endif;
	}
	function updatesubjects($id='')
	{
		if($id)
		{
			$this->view->num_year_sem = $sem = $id%10;
				 $id = $id/10;
				 $id = (int)$id;
			$this->view->yearly = $yearly = $id%10;
				$id = (int)$id/10;
				$id = (int)$id;
			$this->view->sub_data = $this->Subject->getSubjects($id);
			$this->view->loadView('Department/updatesubject');
		}
	}
	function updatesub($id='')
	{
		if($_POST)
		{
			$_POST['sub_name']=addslashes($_POST['sub_name']);
			$this->Subject->addsubject($_POST,$id);
			Session::set('success',"Subject updated successfully.");	
			header("Location:".BASEPATH."Department");
			return;
		}
		if($id){
		$data = $this->Subject->getOneSubjects($id);
		$this->view->sub = $data;
		$this->view->course=$this->Course->getOneCourse($data['0']['course_id']);
		$this->view->loadView('Department/updatesub');
		return;
		}
		header("Location:".BASEPATH."Department");

	}
	function deletesub($id='')
	{
		if($id)
		{
			$paper_name = $this->Department->getPaperData($id);
			if($paper_name){
			if(file_exists("public/file/".$paper_name[0]['paper_name']))
				{
				unlink("public/file/".$$paper_name[0]['paper_name']);
				}
			}
			$this->Department->delPapers($id);
			$this->Course->delSub($id);
			Session::set('success',"Subject and papers deleted successfully.");	
			header("Location:".BASEPATH."Department");
		}

	}
	function delcourse($id='')
	{
		if($id)
		{
			$sub_id = $this->Subject->getSubjects($id,$sem='','id');
			$sb_id='';
			if($sb_id){
			foreach($sub_id as $s_id)
			{
				$sb_id .= $s_id['id'].",";
			}
			//get paper name
			$paper_name = $this->Department->getPaperData(substr($sb_id,0,-1));
			foreach($paper_name as $paper)
			{
				if(file_exists("public/file/".$paper['paper_name']))
				{
				unlink("public/file/".$paper['paper_name']);
				}
			}
			$this->Department->delPapers(substr($sb_id,0,-1));
			}
			$this->Course->delSubjests($id);
			$this->Course->delCourse($id);
			Session::set('success',"Coures, Subjects and Papers deleted successfully.");	
			header("Location:".BASEPATH."Department");
		}

	}
}
?>