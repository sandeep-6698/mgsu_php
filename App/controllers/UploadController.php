<?php
class UploadController extends Controller
{
	function index($id='')
	{	if(Session::get('user')){
		$this->loadModel('Upload');
		$this->view->dep_data = $this->Upload->fetchDep('id,dep_name');
		$this->view->loadView("Upload/index");
		$deldata=$this->Upload->getData(date('Y')-5);
		foreach ($deldata as $data) {
			$path="public/file/".$data['file'];
			if(file_exists($path))
			unlink($path);
			$this->Upload->delPaper($data['id']);
		}
	}
		else
		header("Location:".BASEPATH."Login");	
	}
	function insert($id='')
	{
		if(Session::get('user'))
		{
		if(isset($_POST['sem']) && $_FILES['file']['type']=="application/pdf")
		{
		foreach ($_FILES as $file){}
			$filename=time().$file['name'];
		$path="public/file/".$filename;
		move_uploaded_file($file['tmp_name'], $path);
		$this->loadModel('Upload');
		//print_r($_POST);
		//exit();
		$this->Upload->addData($_POST,$filename);
		Session::set('success',"Paper uploaded successfully.");
		header("Location:".BASEPATH."Upload/index");
		}
		else
		{
			?>
			<script type="text/javascript">
				alert('Enter valid format( .pdf file only)');
				window.open('<?php echo BASEPATH."Upload";?>','_self');
			</script>
			<?php
		}return;
	}
	header("Location:".BASEPATH."Login");	
	}
	function update($id='')
	{
		if($id){
		$this->loadModel('Upload');
		$this->Upload->updateStatus($id);
		Session::set('success',"Status Update successfully.");
		header("Location:".BASEPATH."Download/allpaper");
		}
	}
	function delete($id='')
	{
		if($id)
		{	
			$this->loadModel('Upload');
			$data=$this->Upload->getFile($id);
			$filename = $data[0]['paper_name'];
			$path="public/file/".$filename;
			if(file_exists($path))
			unlink($path);
			$this->Upload->delPaper($id);
			Session::set('success',"Paper deleted successfully.");
			header("Location:".BASEPATH."Download/allpaper");
		}
	}
	function getCourse()
	{
		if(isset($_POST))
		{
			$this->loadModel('Course');
			$this->view->data=$this->Course->fetchCourseData($_POST['dep_id']);
			$this->view->loadView('Department/coursesOption',0,0);
		}
		
	}
	function getSubject()
	{
		if(isset($_POST))
		{
			$this->loadModel('Upload');
			$this->view->data=$this->Upload->fetchSubjectData($_POST['course_id'],$_POST['sem']);
			$this->view->loadView('Department/subjectsOption',0,0);
		}
		
	}
}

?>