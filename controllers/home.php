<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends JATOVI_Controller
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
			case 'viewproduct':
				$this->viewproduct;
				break;
			case 'timkiem':
				$this->timkiem();
				break;
			default:
				$this->index();
				break;
		}
	}
	public function index()
	{	$data['content'] = 'home';
		$data['contentdata'] = array();
		include_once 'models/home_model.php';


		$spnb = $home_controller->select_spnb();
		foreach ($spnb as $key => $value) {
			$data['contentdata']['nhomsp']['Sản phẩm nổi bật'][$key] = $value;
		}

		$spbc = $home_controller->select_spbc();
		foreach ($spbc as $key => $value) {
			$data['contentdata']['nhomsp']['Sản phẩm bán chạy'][$key] = $value;
		}

		$spm = $home_controller->select_spm();
		foreach ($spm as $key => $value) {
			$data['contentdata']['nhomsp']['Sản phẩm mới'][$key] = $value;
		}

		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}
	public function timkiem(){
		$limit = 8	;
		$batdau =0;	
		$spnb = "";
		$p = 1;
		$data['content'] = 'timkiem';
		$data['contentdata'] = array();
		include_once 'models/home_model.php';
		if (isset($_GET['search']))
		{
			$search = $_GET['search'];
			$data['contentdata']['search']= $search;
		}
		else if(isset($_POST['timkiem']) )
		{
			$_SESSION['gtritimkiem'] = $_POST['timkiem'];
			$search = $_POST['timkiem'];
			$data['contentdata']['search']= $search;
		}
		else
		{
			$search="";
			$data['contentdata']['search']= "";
		}
		if(isset($_GET['p']))
		{
			$p = $_GET['p'];			
		}
		
		else{$p=1;}
			$data['contentdata']['p']= $p;
			$batdau = ($p -1)*$limit;
			$list = $home_controller->search($search, $limit, $batdau);
			if($list != NULL){
			foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;}
			$tongdong =$home_controller->sodong($search);
			$data['contentdata']['tongdong']= $tongdong;
			}else{
				$tongdong = 0;
				$data['contentdata']['tongdong']= $tongdong;
				$data['contentdata']['list']="";
				}	

		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);

	}
	
}           
$home = new home($JATOVI);
?>