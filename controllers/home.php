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
	{
		
		$data['content'] = 'home';
		$data['contentdata'] = array();
		include_once 'models/home_model.php';
		$menus = $home_controller->select_menu();
		foreach ($menus as $key => $value) {
			$data['menus'][$key] = $value;
		}

		$spnb = $home_controller->select_spnb();
		foreach ($spnb as $key => $value) {
			$data['contentdata']['spnb'][$key] = $value;
		}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}
	
}           
$home = new home($JATOVI);
?>