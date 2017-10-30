<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class sanpham extends JATOVI_Controller
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
		$data['content'] = 'sanpham';
		$data['contentdata'] = array();
		$id = '';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		include_once 'models/sanpham_model.php';

		$sanphams = $sanpham_model->select_sanpham($id);

		foreach ($sanphams as $key => $value) {
			$data['contentdata']['sanphams'] = $value;
		}

		$splienquan = $sanpham_model->select_splienquan($id);
		foreach ($splienquan as $key => $value) {
			$data['contentdata']['splienquan'][$key] = $value; 
		}

		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}
}
$sanpham = new sanpham($JATOVI);
?>