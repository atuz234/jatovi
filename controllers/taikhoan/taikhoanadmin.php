<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class taikhoanadmin extends JATOVI_Controller
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
			case 'delete':
				$this->delete();
				break;
			case 'update':
				$this->update();
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

		$data['content'] = 'taikhoan/taikhoanadmin';
		$data['contentdata'] = array();
		include BASEPATH.'models/taikhoanadmin_model.php';
		$tks = $taikhoanadmin_model->select_all_admin();
		foreach ($tks as $key => $value) {
			$data['contentdata']['tkadmin'][$key] = $value;
		}
		$nhom = $taikhoanadmin_model->select_nhom();
		foreach ($nhom as $key => $value) {
			$data['contentdata']['groups'][$key] = $value;
		}

		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}

	public function delete()
	{
		$id='';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		include BASEPATH.'models/taikhoanadmin_model.php';
		$del = $taikhoanadmin_model->delete($id);
		if ($del) {
			header("Location:".base_url."index.php?module=taikhoanadmin");
		}
	}

	public function update()
<<<<<<< HEAD
	{	
		$id = $_POST['txtid'];
		$ten_taikhoan = $_POST['txttaikhoan'];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	{	$ten_taikhoan = $_POST['txttaikhoan'];
=======
	{	
		$id = $_POST['txtid'];
		$ten_taikhoan = $_POST['txttaikhoan'];
>>>>>>> 052d3db594291d47f8764c203c3e1a217ba6b67e
=======
	{	
		$id = $_POST['txtid'];
		$ten_taikhoan = $_POST['txttaikhoan'];
>>>>>>> 50a3155e713f3eb9fea7dce27ffc010b18dd1fbb
=======
	{	
		$id = $_POST['txtid'];
		$ten_taikhoan = $_POST['txttaikhoan'];
>>>>>>> 50a3155e713f3eb9fea7dce27ffc010b18dd1fbb
>>>>>>> 2315b4442afee2b3a862b08e86bdeac99ab76f32
		$matkhau = $_POST['txtmatkhau'];
		$hoten = $_POST['txthoten'];
		$gioitinh = $_POST['gender'];
		$id_nhom = $_POST['nhom']; 
		$trangthai = $_POST['trangthai'];
<<<<<<< HEAD
		include BASEPATH.'models/taikhoanadmin_model.php';
		$taikhoanadmin_model->update();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		if () {
			$ten_taikhoan = $_POST['txttaikhoan'];
			$matkhau = $_POST['txtmatkhau'];
			$hoten = $_POST['txthoten'];
			$gioitinh = $_POST['gender'];
			$id_nhom = $_POST['nhom']; 
			$trangthai = $_POST['trangthai'];
		}
=======
		include BASEPATH.'models/taikhoanadmin_model.php';
		$taikhoanadmin_model->update();
>>>>>>> 052d3db594291d47f8764c203c3e1a217ba6b67e
=======
		include BASEPATH.'models/taikhoanadmin_model.php';
		$taikhoanadmin_model->update();
>>>>>>> 50a3155e713f3eb9fea7dce27ffc010b18dd1fbb
=======
		include BASEPATH.'models/taikhoanadmin_model.php';
		$taikhoanadmin_model->update();
>>>>>>> 50a3155e713f3eb9fea7dce27ffc010b18dd1fbb
>>>>>>> 2315b4442afee2b3a862b08e86bdeac99ab76f32
	}
}
$taikhoanadmin = new taikhoanadmin($JATOVI);
?>