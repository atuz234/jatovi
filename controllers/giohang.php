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
		}
		if(isset($_POST['submit']))
		{	$i=0;
			$data['content'] = 'thanhtoan';
			$data['contentdata'] = array();
			include_once 'models/giohang_model.php';
			$soluong = $_POST['soluong'];
			$data['contentdata']['soluong'] = $soluong;
			foreach($_POST['soluong'] as $k => $v){
				$idsp[] = $k;
				}				
				$str=implode(",",$idsp);
				$list = $giohang_model->thanhtoan($str);
				foreach($list as $key =>$value){
				$data['contentdata']['list'][$key] = $value;
				}
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
	echo date("Y-m-d");
	
	}
}           
$giohang = new giohang($JATOVI);