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
				header('location:'.BASEPATH.'index.php');
				break;
			
			default:
				$this->login_check();
				break;
		}
	}
	public function login()
	{
		header("Location:".base_url."views/login.php");
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
	}       
	public function logout()
	{       
		unset($_SESSION['userID']);
	}       
}           
$page = new page();
?>