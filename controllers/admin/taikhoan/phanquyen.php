<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class phanquyen extends JATOVI_Controller
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
			case 'delete':
				$this->delete();
				break;
			case 'update':
				$this->update();
				break;
			case 'insert':
				$this->insert();
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

		$data['content'] = 'admin/taikhoan/phanquyen';
		$data['contentdata'] = array();
		include BASEPATH.'models/admin/phanquyen_model.php';
		$dulieu = $phanquyen_model->select_all();
		foreach ($dulieu as $key => $value) {
			$data['contentdata']['dulieu'][$key] = $value;
		}

		$nhoms = $phanquyen_model->select_nhom();
		foreach ($nhoms as $key => $value) {
			$data['contentdata']['nhoms'][$key] = $value;
		}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
	}
}
$phanquyen = new phanquyen($JATOVI);
?>