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
		switch ($this->action) {
			case 'delete':
				$this->delete();
				break;
			case 'update':
				$this->update();
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
		
		$data['content'] = 'taikhoan/taikhoanadmin';
		$data['contentdata'] = array();
		include BASEPATH.'models/taikhoanadmin_model.php';
		$tks = $taikhoanadmin_model->select_all_admin();
		foreach ($tks as $key => $value) {
			$data['contentdata']['tkadmin'][$key] = $value;
		}
		$nhom = $taikhoanadmin_model->select_nhom();
		foreach ($nhom as $key => $value) {
			$data['contentdata']['groups'][$key] = $value;
		}

		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('master',$data);
	}

	public function delete()
	{
		$id='';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		include BASEPATH.'models/taikhoanadmin_model.php';
		$del = $taikhoanadmin_model->delete($id);
		if ($del) {
			header("Location:".base_url."index.php?module=taikhoanadmin");
		}
	}

	public function update()
	{
		# code...
	}
}
$taikhoanadmin = new taikhoanadmin($JATOVI);
?>


contentdata => array (
   tkdamin=>array(
        0 => array(
     		id=>1,
     		mk=>,
    	)
    	1 => array(
     		id=>2,
     		mk=>3,
    	)
   )
);

array(
	content => ...,
	contentdata => $tkadmin,
)
$tkadmin = array(
				taikhoan=>'a',
				matkhau=>'b',
			)