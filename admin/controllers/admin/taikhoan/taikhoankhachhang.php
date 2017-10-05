<?php 
/**
* 
*/

defined('BASEPATH') OR exit('No direct script access allowed');
class taikhoankhachhang extends JATOVI_Controller
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
			case 'getlist':
					$this->index();
					break;
			case 'add':
					$this->add();
					break;
			case 'delete':
					$this->delete();
					break;
			case 'edit':
					$this->edit();
					break;
			
			default:
				$this->index();
				break;
		}		
	}
	public function index(){
		include "models/admin/taikhoankhachhang_model.php";
		$list= $taikhoan_model->getlist();
		$data['content'] = 'admin/taikhoan/taikhoankhachhang';
		$data['contentdata'] = array();
		foreach ($list as $key => $value) {
		$data['contentdata']['list'][$key] = $value;
		}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
		}	
	public function delete(){
		$id = '';
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
			include 'models/admin/taikhoankhachhang_model.php';
			$del = $taikhoan_model->delete($id);
			if ($del) {
			header("Location:".base_url."index.php?module=taikhoankhachhang");
			}
		}
	public function add(){
		$email = $sodienthoai = $ngaysinh = $gioitinh = $matkhau = $diachi= $ten = "";
		if(isset($_POST['email'])&& isset($_POST['sodienthoai'])&&isset($_POST['diachi'])&& isset($_POST['matkhau'])){
			$email =$_POST['email'];
			$matkhau = $_POST['matkhau'];
			$sodienthoai = $_POST['sodienthoai'];
			$ten = $_POST['ten'];
			$ngaysinh =$_POST['ngaysinh'];
			$gioitinh = $_POST['gioitinh'];
			$diachi = $_POST['diachi'];

			include_once 'models/admin/taikhoankhachhang_model.php';

			$add = $taikhoan_model->add($email, $matkhau, $sodienthoai, $ten, $ngaysinh, $gioitinh, $diachi);
			header("Location:".base_url."index.php?module=taikhoankhachhang");
			}
		}
		public function edit(){
		$email = $sodienthoai = $ngaysinh = $gioitinh = $diachi= $ten = $id ="";
			if(isset($_POST['edit_email'])&& isset($_POST['edit_sodienthoai'])&&isset($_POST['edit_diachi'])){
				$id = $_POST['edit_id'];
				$email =$_POST['edit_email'];
				$sodienthoai = $_POST['edit_sodienthoai'];
				$ten = $_POST['edit_ten'];
				$ngaysinh =$_POST['edit_ngaysinh'];
				$gioitinh = $_POST['edit_gioitinh'];
				$diachi = $_POST['edit_diachi'];
				

				include_once 'models/admin/taikhoankhachhang_model.php';

				$edit = $taikhoan_model->edit( $id, $email, $sodienthoai, $ten, $ngaysinh, $gioitinh, $diachi);
				header("Location:".base_url."index.php?module=taikhoankhachhang");
			}
		}
		
}
$taikhoankhachhang = new taikhoankhachhang($JATOVI);
?>