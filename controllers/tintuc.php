<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class tintuc extends JATOVI_Controller
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
			case 'chitiet':
				$this->chitiet();
				break;
			default:
				$this->index();
				break;
		}
	}
	public function index(){
		$limit = 6;
		$batdau =0;	
		$list ="";
		$data['content'] = 'tintuc';
		$data['contentdata'] = array();	
		include BASEPATH."models/tintuc_model.php";
		$p = "";
		if(isset($_GET['p'])){
			$p = $_GET['p'];			
			}else{$p=1;}
			$data['contentdata']['p']= $p;
			$batdau = ($p -1)*$limit;
		$list = $tintuc_model->index($limit, $batdau);
		if ($list!=NULL	) {
			foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;
			$tongdong =$tintuc_model->sodong();
			$data['contentdata']['tongdong']= $tongdong;
		}
		}else{
			$tongdong =0;
			$data['contentdata']['tongdong']= $tongdong;
			$data['contentdata']['list'] = "";
		}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
				
		}
	
	public function chitiet(){
		$id = '';
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
		$data['content'] = 'chitiet_tt';
		$data['contentdata'] = array();	
		include BASEPATH."models/tintuc_model.php";
		$list = $tintuc_model->chitiet($id);
		foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
		}
}
$tintuc = new tintuc($JATOVI);
?>