<?php 
/**
* 
*/
// defined('BASEPATH') OR exit('No direct script access allowed');
class page extends JATOVI_Controller
{

	public $action = '';
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (isset($_GET['action'])) {
			$this->action = $_GET['action'];
		}

		switch ($this->action) {
			case 'page_logincheck':
				$this->login_check();
				break;
			case 'page_logout':
				$this->logout();
				header('location:'.BASEPATH.'index.php');
				break;
			
			default:
				# code...
				break;
		}
	}
	public function login($JATOVI)
	{
		$data['JATOVI']=$JATOVI;
		$JATOVI->load->view('login',$data);
	}
	public function login_check()
	{
		$ten_taikhoan='';
		$matkhau='';

		if (isset($_POST['ten_taikhoan']) && isset($_POST['matkhau']) ) {
			$ten_taikhoan = $_POST['ten_taikhoan'];
			$matkhau = $_POST['matkhau'];
		}
		include BASEPATH.'models/page_model.php';
		$page_model = new page_model();
		$check = $page_model->login($ten_taikhoan, $matkhau);
		    
		if ($check > 0) {
			$_SESSION['userID'] = '1';
			header("Location:".BASEPATH."index.php");
		}else{
			echo "NNOOOOOOO";
		};  
	}       
	public function logout()
	{       
		unset($_SESSION['userID']);
	}       
}           
$page = new page();
$page->index();
?>