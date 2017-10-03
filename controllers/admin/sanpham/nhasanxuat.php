<?php 
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class nhasanxuat extends JATOVI_Controller
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

	$data['content'] ='sanpham/nhasanxuat';
	$data['contentdata'] = array();
	include BASEPATH.'models/nhasanxuat_model.php';
	$nsx = $nhasanxuat_model->select_all_nsx();
	foreach ($nsx as $key => $value) {
		$data['contentdata']['nsx'][$key] = $value;
	}
	$data['JATOVI'] = $this->JATOVI;
	$this->JATOVI->load->view('master',$data);
}

	public function delete()
	{
		$id='';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		include BASEPATH.'models/nhasanxuat_model.php';
		$del = $nhasanxuat_model->delete($id);
		if ($del) {
			header("Location:".base_url."index.php?module=nhasanxuat");
		}
	}

	public function update()
	{
		include BASEPATH.'models/nhasanxuat_model.php';
		$id = $_POST['txtid'];
		$nsx_ten = $_POST['txtten'];
		$nsx_diachi = $_POST['txtdiachi'];
		$nsx_sodienthoai = $_POST['txtsodienthoai'];
		$nsx_email = $_POST['txtemail'];
		$nsx_website = $_POST['txtwebsite'];
		$nsx_logo = $_POST['logo'];
		$nsx_mota = $_POST['mota'];

		$mang = array('nsx_ten' =>$nsx_ten, 'nsx_diachi'=>$nsx_diachi, 'nsx_sodienthoai' =>$nsx_sodienthoai, 'nsx_email'=>$nsx_email, 'nsx_website'=>$nsx_website, 'nsx_logo'=>$nsx_logo, 'nsx_mota'=>$nsx_mota);

		$nhasanxuat_model->update($id, $mang);
		header("Location:".base_url."index.php?module=nhasanxuat");
	}
	public function insert()
	{
		$nsx_ten = $_POST['nsx_ten'];
		$nsx_diachi = $_POST['nsx_diachi'];
		$nsx_sodienthoai = $_POST['nsx_sodienthoai'];
		$nsx_email = $_POST['nsx_email'];
		$nsx_website = $_POST['nsx_website'];
		$nsx_logo = $_POST['nsx_logo'];
		$nsx_mota = $_POST['nsx_mota'];
		include BASEPATH.'models/nhasanxuat_model.php';

		$mang = array('nsx_ten' =>$nsx_ten, 'nsx_diachi'=>$nsx_diachi,  'nsx_sodienthoai' =>$nsx_sodienthoai, 'nsx_email'=>$nsx_email, 'nsx_website'=>$nsx_website, 'nsx_logo'=>$nsx_logo, 'nsx_mota'=>$nsx_mota);

		$nhasanxuat_model->insert($mang);
		//header("Location:".base_url."index.php?module=nhasanxuat");
	}
}
$nhasanxuat = new nhasanxuat($JATOVI);
 ?>