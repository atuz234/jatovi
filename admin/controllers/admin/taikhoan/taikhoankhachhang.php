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
			case 'timkiem':
					$this->timkiem();
					break;
			
			default:
				$this->index();
				break;
		}		
	}
	public function index(){
		$limit = 10;
		$batdau =0;	
		$search="";
		$list ="";
		include "models/admin/taikhoankhachhang_model.php";
		$data['content'] = 'admin/taikhoan/taikhoankhachhang';
		$data['contentdata'] = array();
		$p = "";
		if (isset($_GET['search'])){
			$search = $_GET['search'];
			$data['contentdata']['search']= $search;
			}else if(isset ($_POST['timkiem']) ){
			$search = $_POST['timkiem'];
			$data['contentdata']['search']= $search;
			}else{$search="";
			$data['contentdata']['search']= $search;
			}
		if(isset($_GET['p'])){
			$p = $_GET['p'];			
			}else{$p=1;}
			$data['contentdata']['p']= $p;
			$batdau = ($p -1)*$limit;
		$list= $taikhoan_model->getlist($search, $limit, $batdau);
		if ($list!=NULL	) {
			foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;
			$tongdong =$taikhoan_model->sodong();
			$data['contentdata']['tongdong']= $tongdong;
		}
		}else{
			$tongdong =0;
			$data['contentdata']['tongdong']= $tongdong;
			$data['contentdata']['list'] = "";
		}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
		}	
	public function delete(){
		$id = '';
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		
			include 'models/admin/taikhoankhachhang_model.php';
			$del = $taikhoan_model->delete($id);
			if ($del) {
			header("Location:".base_url."index.php?module=taikhoankhachhang");
			}
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
				if(isset($_POST['chkkh'])){
				$trangthai = $_POST['chkkh'];	
				}else {$trangthai=0;}

				include_once 'models/admin/taikhoankhachhang_model.php';

				$edit = $taikhoan_model->edit( $id, $email, $sodienthoai, $ten, $ngaysinh, $gioitinh, $diachi,$trangthai);
				header("Location:".base_url."index.php?module=taikhoankhachhang");
			}
		}
	
		public function timkiem(){
			$search="";
		if(isset($_POST['timkiem'])){
			$search = $_POST['timkiem'];
			include "models/admin/taikhoankhachhang_model.php";
			$list = $taikhoan_model->timkiem($search);
			if($list !=""){
				$data['content'] = 'admin/taikhoan/taikhoankhachhang';
			$data['contentdata'] = array();
			foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;
			}
			$data['JATOVI']=$this->JATOVI;
			$this->JATOVI->load->view('admin/master',$data);
			}
			}else{
			}
		}	
				
}
$taikhoankhachhang = new taikhoankhachhang($JATOVI);
?>