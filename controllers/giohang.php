<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class giohang extends JATOVI_Controller
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
			case "themsp":
				$this->themsp();
				break;
				case "dathang":
				$this->dathang();
				break;
			case "xoasp":
				$this->xoasp();
				break;
			case "capnhatsoluong":
				$this->capnhatsoluong();
				break;
			default:
				$this->index();
				break;
		}
	}
public function capnhatsoluong()
	{
		// cap nhat soluong		
		if(isset($_POST['submitsl']) )
		{
			
			foreach($_POST['soluong'] as $key=>$value)
			{
				if( ($value == 0) and (is_numeric($value)))
				{
					unset ($_SESSION['cart'][$key]);
				}
				elseif(($value > 0) and (is_numeric($value)))
				{
					$_SESSION['cart'][$key]=$value;
				}		
			} 
			header("Location:".base_url."index.php?module=giohang");
		}else if(isset($_POST['submit']))
		{	$i=0;
			$data['content'] = 'thanhtoan';
			$data['contentdata'] = array();
			include_once 'models/giohang_model.php';
			$soluong = $_POST['soluong'];
			$data['contentdata']['soluong'] = $soluong;
			$donhang = $giohang_model->maxdh();
			$maxdh = $donhang[0]['maxdh'];
			$data['contentdata']['maxdh'] = $maxdh;
			foreach($_POST['soluong'] as $k => $v){
				$idsp[] = $k;
				}				
				$str=implode(",",$idsp);
				$list = $giohang_model->thanhtoan($str);
				foreach($list as $key =>$value){
				$data['contentdata']['list'][$key] = $value;
				}
		
		} else{
			header("Location:".base_url."index.php?module=giohang");
			}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);		

}
public function index()
	{
		$list = "";
	$data['content'] = 'giohang';
	$data['contentdata'] = array();
	include_once 'models/giohang_model.php';
	$ok=1;
	if(isset($_SESSION['cart']))
	{
		foreach($_SESSION['cart'] as $k=>$v)
		{
			if(isset($k))
			{
			$ok=2;
			}
		}
	}

	if ($ok != 2)
	 {
		$data['contentdata']['qty']= "";
		$data['contentdata']['list'] = "";
	} else {
	//hien thi gio hang
	foreach($_SESSION['cart'] as $key=>$value)
	{
		$item[]=$key;
	}
	$str=implode(",",$item);
	$qty = $_SESSION['cart'];	
	$list = $giohang_model->index($str);
	foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;}
	}
	

//----------------	
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}
public function themsp()
	{
		//them vao session 
	$id=$_GET['id'];
	if(isset($_SESSION['cart'][$id]))
	{
	$qty = $_SESSION['cart'][$id] + 1;
	}
	else
	{
	$qty=1;
	}
	$_SESSION['cart'][$id]=$qty;
	
	header("Location:".base_url."index.php?module=giohang");
	//---------------------
	}
public function xoasp(){
		
	$cart=$_SESSION['cart'];
	$id="";
	if(isset($_GET['idsp']))
	{
		$id= $_GET['idsp'];
		unset($_SESSION['cart'][$id]);
	}
	header ("Location: http://localhost/jatovi/index.php?module=giohang");	
	}
public function dathang(){
	$i = 0;
	include_once 'models/giohang_model.php';
		
		$id_kh = $_SESSION['khachhang_ID'];
		$diachi = $_POST['diachi'];
		$sotien = $_POST['tongtien'];
		$ngaydathang = date("Y-m-d");
		$tinhtrang = 1;
		
		$dathang= $giohang_model->dathang($id_kh,$diachi,$sotien,$ngaydathang,$tinhtrang);
		
		
		for($i; $i<count($_POST['idsp']); $i++){
		
		$idsp = $_POST['idsp'][$i];
		$iddh = $_POST['iddh'];
		$sl = $_POST['soluong'][$i];
		$gia = $_POST['gia'][$i];
		$thanhtien = $sl *$gia;
		$damua = $giohang_model->damua($idsp);
		$lm = $damua[0]['damua']+$sl;
		$giohang_model->themdamua($idsp, $lm);
		$chitiet= $giohang_model->chitiet($idsp,$iddh,$sl,$gia,$thanhtien);
		}
		unset($_SESSION['cart']);
		$data['content'] = 'camon_muahang';
		$data['contentdata'] = array();
		
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);	
		
	}
}           
$giohang = new giohang($JATOVI);