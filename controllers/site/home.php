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
		if (!isset($_SESSION['userID'])) {
			
		}
		$data['content'] = 'site/home/index';
		$data['contentdata'] = array();
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('site/home',$data);
	}
	
}           
$home = new home($JATOVI);
?>