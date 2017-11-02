<?php 
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class lienhe extends JATOVI_Controller
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
			$this->login();
		}

		$data['content'] ='admin/tintuc/lienhe';
		$data['contentdata'] = array();
		include BASEPATH.'models/admin/lienhe_model.php';
		$lienhe = $lienhe_model->selectall();
		foreach ($lienhe as $key => $value) {
			$data['contentdata']['lienhe'][$key] = $value;
		}
		$data['JATOVI'] = $this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
	}
}
$lienhe = new lienhe($JATOVI);
 ?>