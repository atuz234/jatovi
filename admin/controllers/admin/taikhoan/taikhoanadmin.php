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
			case 'insert':
				$this->insert();
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

		$data['content'] = 'admin/taikhoan/taikhoanadmin';
		$data['contentdata'] = array();
		include BASEPATH.'models/admin/taikhoanadmin_model.php';
		$tks = $taikhoanadmin_model->select_all_admin();
		foreach ($tks as $key => $value) {
			$data['contentdata']['tkadmin'][$key] = $value;
		}
		$nhom = $taikhoanadmin_model->select_nhom();
		foreach ($nhom as $key => $value) {
			$data['contentdata']['groups'][$key] = $value;
		}

		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
	}

	public function delete()
	{
		$id='';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		include BASEPATH.'models/admin/taikhoanadmin_model.php';
		$del = $taikhoanadmin_model->delete($id);
		if ($del) {
			header("Location:".base_url."index.php?module=taikhoanadmin");
		}
	}

	public function update()
	{	
		include BASEPATH.'models/admin/taikhoanadmin_model.php';
		$id = $_POST['txtid'];
		$ten_taikhoan = $_POST['txttaikhoan'];
		$hoten = $_POST['txthoten'];
		$gioitinh = $_POST['gender'];
		$id_nhom = $_POST['nhom']; 
		$matkhau = $_POST['newpass'];

		$mang = array('ten_taikhoan'=>$ten_taikhoan, 'hoten'=>$hoten, 'matkhau'=>$matkhau, 'gioitinh'=> $gioitinh, 'id_nhom'=>$id_nhom);
		
		$taikhoanadmin_model->update($id,$mang);
		header("Location:".base_url."index.php?module=taikhoanadmin");
	}

	public function insert()
	{
		$ten_taikhoan = $_POST['insert_taikhoan'];
		$matkhau = $_POST['insert_password'];
		$hoten = $_POST['insert_hoten'];
		$gioitinh = $_POST['insert_gender'];
		$id_nhom = $_POST['insert_nhom']; 
		include BASEPATH.'models/admin/taikhoanadmin_model.php';

		$mang = array('ten_taikhoan'=>$ten_taikhoan, 'hoten'=>$hoten, 'matkhau'=>$matkhau, 'gioitinh'=> $gioitinh, 'id_nhom'=>$id_nhom);

		$taikhoanadmin_model->insert($mang);
		header("Location:".base_url."index.php?module=taikhoanadmin");

	}
}
$taikhoanadmin = new taikhoanadmin($JATOVI);
?>