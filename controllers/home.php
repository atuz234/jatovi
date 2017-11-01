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
			default:
				$this->index();
				break;
		}
	}
	public function index()
	{
		
		$data['content'] = 'home';
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
	
}           
$home = new home($JATOVI);
?>