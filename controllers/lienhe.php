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
			case 'them':
				$this->them();
				break;
			default:
				$this->index();
				break;
		}
	}
	public function index()
	{
	$data['content'] = 'lienhe';
	$data['contentdata'] = array();
	
	$data['JATOVI']=$this->JATOVI;
	$this->JATOVI->load->view('master',$data);	
	}
	public function them(){
		$hoten = $email = $tieude = $noidung = "";
		if(isset($_POST['ten'])){
		$hoten = $_POST['ten'];
		$email = $_POST['email'];
		$tieude = $_POST['tieude'];
		$noidung = $_POST['noidung'];
		}
		include BASEPATH."models/lienhe_model.php";
		$list = $lienhe_model->them($hoten, $email, $tieude, $noidung);		
		header("Location:".base_url."index.php");
	}
}        
$lienhe = new lienhe($JATOVI);
?>