	<?php
	class DownloadController extends Controller
	{
		function index($id='')
		{	$this->loadModel('Download');
			$this->view->dep_info=$this->Download->fetchDepart();
			$this->view->loadView('Download/index');
		}
		function listing($id='')
		{
			//print_r($_POST); 
				$year=implode(',',$_POST['year']);
			$this->loadModel('Download');
			if(isset($_POST['class'])):
			$this->view->data=$this->Download->getData($_POST['class'],$year,$_POST['sem']);
			$this->view->loadView('Download/listing');
			return;
		endif;
		header("Location:".BASEPATH."Download");
		}
		function download($filename)
		{
			$file = scandir("public/file");
			foreach ($file as $key) {
				if($key==$filename)
				{	$filename = "public/file/$filename";
					header('Content-Description: File Transfer');
					header('Content-Type: application/pdf');
					header('Content-Description: attechment; filename="'.basename($filename).'" ');
					
					header('Content-Transfer-Encoding: binary');
					header('Accept-TAnges: bytes');
					@readfile($filename);
				}

			}
		}
		function allpaper($id='')
		{
			if(Session::get('user')){
			$this->loadModel('Download');
			$this->view->data=$this->Download->paperList();
			$this->view->loadView('Download/paperlist');
			return;
			}
			header("Location:".BASEPATH."Download/");
			

		}
		function form($dep_id='')
		{
			if($dep_id)
			{
			$this->loadModel('Download');
			$this->view->data=$this->Download->fetchAllCourse($dep_id);
			$this->view->loadView('Download/form');
			}
		}
		function getSem()
		{
			if(isset($_POST['course_id']))
			{
			$this->loadModel('Course');
			$sem_data = $this->Course->getYear($_POST['course_id'],'yearly,num_year_sem');
			foreach ($sem_data as $data) {}
			echo implode(',',$data);
			}
		}
	}
	?>