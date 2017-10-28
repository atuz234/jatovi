<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class quanlydonhang extends JATOVI_Controller
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
			case 'capnhat':
				$this->capnhat();
				break;
			case 'chitiet':
				$this->chitiet();
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
		include "models/admin/quanlydonhang_model.php";
		$data['content'] = 'donhang/quanlydonhang';
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
			$list= $quanlydonhang_model->getlist($search, $limit, $batdau);
		if ($list!=NULL	) {
			foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;
			$tongdong =$quanlydonhang_model->sodong();
			$data['contentdata']['tongdong']= $tongdong;
		}
		}else{
			$tongdong =0;
			$data['contentdata']['tongdong']= $tongdong;
			$data['contentdata']['list'] = "";
		}
		
		foreach ($list as $key => $value) {
		$data['contentdata']['list'][$key] = $value;
		}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
		}	
		public function chitiet(){
			$id='';
			if(isset($_GET['id'])){
			$id = $_GET['id'];
			include "models/admin/quanlydonhang_model.php";
			$list= $quanlydonhang_model->chitiet($id);
			$data['content'] = 'donhang/chitietdonhang';
			$data['contentdata'] = array();
			foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;
			}
			$data['JATOVI']=$this->JATOVI;
			$this->JATOVI->load->view('admin/master',$data);
			}
		}
		public function capnhat(){
			$tinhtrang=$id_donhang="";			
			if(isset($_POST['tinhtrang'])){
				$id_donhang = $_POST['id_donhang'];
				$tinhtrang = $_POST['tinhtrang'];
				include "models/admin/quanlydonhang_model.php";
				$capnhat = $quanlydonhang_model->capnhat($tinhtrang, $id_donhang);
				}
			}
		public function timkiem(){
			$search="";
		if(isset($_POST['timkiem'])){
			$search = $_POST['timkiem'];
			include "models/admin/quanlydonhang_model.php";
			$list = $quanlydonhang_model->search($search);
			
				$data['content'] = 'donhang/quanlydonhang';
			$data['contentdata'] = array();
			foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;
			}
			$data['JATOVI']=$this->JATOVI;
			$this->JATOVI->load->view('admin/master',$data);
			}
		}
}
$quanlydonhang = new quanlydonhang($JATOVI);
?>