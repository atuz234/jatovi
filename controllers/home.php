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
			default:
				$this->index();
				break;
		}
	}
	public function index()
	{	$data['content'] = 'home';
		$data['contentdata'] = array();
		include_once 'models/home_model.php';
		
		$limit = 2;
		$batdau =0;	
		$spnb = "";
		$p = "";
		if (isset($_GET['search']))
		{
			$search = $_GET['search'];
			$data['contentdata']['search']= $search;
		}
		else if(isset($_POST['timkiem']) )
		{
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
			$spnb = $home_controller->search($search, $limit, $batdau);
			if($spnb != NULL){
			foreach ($spnb as $key => $value) {
			$data['contentdata']['spnb'][$key] = $value;}
			$tongdong =$home_controller->sodong($search);
			$data['contentdata']['tongdong']= $tongdong;
			}else{
				$tongdong = 0;
				$data['contentdata']['tongdong']= $tongdong;
				$data['contentdata']['spnb']="";
				}
			$menus = $home_controller->select_menu();
			foreach ($menus as $key => $value) {
			$data['menus'][$key] = $value;
			}

		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}
	
}           
$home = new home($JATOVI);
?>