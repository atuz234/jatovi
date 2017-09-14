<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class taikhoanadmin extends JATOVI_Controller
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
		switch ($action) {
			case 'value':
				# code...
				break;
			
			default:
				$this->index();
				break;
		}
	}
	public function index()
	{
		if (!isset($_SESSION['userID'])) {
			$this->login();
		}
		$data['content'] = 'page/index';
		$data['contentdata'] = array();
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}
}
?>