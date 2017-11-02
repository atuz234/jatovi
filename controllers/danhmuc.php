<?php 
/**
* 
*/
class danhmuc extends JATOVI_Controller
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
		$iddanhmuc = '';
		if (isset($_GET['dm'])) {
			$iddanhmuc = $_GET['dm'];
		}
		$data['content'] = 'danhmuc';
		$data['contentdata'] = array();
		include_once 'models/danhmuc_model.php';
		$spbydm = $danhmuc_model->select_by_danhmuc($iddanhmuc);
		foreach ($spbydm as $key => $value) {
			$data['contentdata']['spbydm'][$key] = $value;
		}

		$tendm = $danhmuc_model->select_danhmuc_by_id($iddanhmuc);
		foreach ($tendm as $key => $value) {
			$data['contentdata']['tendm'][$key] = $value;
		}

		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}

	

}
$danhmuc = new danhmuc($JATOVI);
?>