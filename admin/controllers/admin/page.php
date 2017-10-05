<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class page extends JATOVI_Controller
{

	public $action = '';
	public $JATOVI = '';
	function __construct($JATOVI)
	{
		parent::__construct();
		$this->JATOVI = $JATOVI;
	}
	public function dieuhuong()
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
				break;
			case 'permision':
				$this->permission();
				break;
			default:
				$this->index();
				break;
		}
	}
	public function index()
	{
		if (!isset($_SESSION['userID'])) {
			$this->login();
		}
		$data['content'] = 'admin/page/index';
		$data['contentdata'] = array();
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
	}
	public function permission()
	{
		$this->JATOVI->load->view('admin/page/permission');
	}
	public function login()
	{
		header("Location:".base_url."views/admin/login.php");
	}
	public function login_check()
	{
		$ten_taikhoan='';
		$matkhau='';

		if (isset($_POST['ten_taikhoan']) && isset($_POST['matkhau']) ) {
			$ten_taikhoan = $_POST['ten_taikhoan'];
			$matkhau = $_POST['matkhau'];
		}
		include BASEPATH.'models/admin/page_model.php';
		
		$check = $page_model->login($ten_taikhoan, $matkhau);
		if (count($check) > 0) {
			foreach ($check as $value) {
				$_SESSION['userID'] = $value['id'];
				$_SESSION['userName'] = $value['hoten'];
				$_SESSION['userGroup'] = $value['id_nhom'];
				$_SESSION['userChucdanh'] = $value['tennhom'];
			}
			
		}else{
			echo "NNOOOOOOO";
		};  
		$this->index();
	}       
	public function logout()
	{       
		unset($_SESSION['userID']);
		$this->index();
	} 
}           
$page = new page($JATOVI);
?>