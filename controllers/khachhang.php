<?php 
/**
* 
*/
class khachhang extends JATOVI_Controller
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
			case 'dangky':
				$this->dangky();
				break;
			case 'dangnhap':
				$this->dangnhap();
				break;
			case 'dangxuat':
				$this->dangxuat();
				break;
			default:
				$this->index();
				break;
		}
	}


	public function index()
	{
		$data['content'] = 'khachhang';
		$data['contentdata'] = array();
		include_once 'models/khachhang_model.php';
		
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}

	public function dangnhap()
	{
		$tentk='';
		$mk='';

		if (isset($_POST['tentk']) && isset($_POST['mk']) ) {
			$tentk = $_POST['tentk'];
			$mk = $_POST['mk'];
		}
		include BASEPATH.'models/khachhang_model.php';
		
		$check = $khachhang_model->dangnhap($tentk, $mk);
		if (count($check) > 0) {
			foreach ($check as $value) {
				$_SESSION['khachhang_ID'] = $value['id'];
				$_SESSION['khachhang_Name'] = $value['ten'];
				$_SESSION['khachhang_Phone'] = $value['sodienthoai'];
				$_SESSION['khachhang_Birthday'] = $value['ngaysinh'];
				$_SESSION['khachhang_Gender'] = $value['gioitinh'];
				$_SESSION['khachhang_Address'] = $value['diachi'];
			}
		}else{
			echo "NNOOOOOOO";
		};  
		header("Location:".base_url."index.php");
	}

	public function dangxuat()
	{       
		unset($_SESSION['khachhang_ID']);
		unset($_SESSION['khachhang_Name']);
		unset($_SESSION['khachhang_Phone']);
		unset($_SESSION['khachhang_Birthday']);
		unset($_SESSION['khachhang_Gender']);
		unset($_SESSION['khachhang_Address']);
		header("Location:".base_url."index.php");
	} 

	public function dangky()
	{
		$email = $sodienthoai = $ngaysinh = $gioitinh = $matkhau = $diachi= $ten = "";
		unset($_SESSION['dangkythanhcong']);
		if(isset($_POST['email'])&& isset($_POST['sodienthoai'])&&isset($_POST['diachi'])&& isset($_POST['matkhau'])){
			echo $email =$_POST['email'];
			$matkhau = $_POST['matkhau'];
			$sodienthoai = $_POST['sodienthoai'];
			$ten = $_POST['ten'];
			$ngaysinh =$_POST['ngaysinh'];
			$gioitinh = $_POST['gioitinh'];
			$diachi = $_POST['diachi'];

			include_once 'models/khachhang_model.php';

			$add = $khachhang_model->add($email, $matkhau, $sodienthoai, $ten, $ngaysinh, $gioitinh, $diachi);
			$_SESSION['dangkythanhcong']="True";
			
		}
		header("Location:".base_url."index.php");

		
	}

}
$khachhang = new khachhang($JATOVI);
?>