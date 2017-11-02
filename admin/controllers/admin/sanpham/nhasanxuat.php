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

	$data['content'] ='admin/sanpham/nhasanxuat';
	$data['contentdata'] = array();
	include BASEPATH.'models/admin/nhasanxuat_model.php';
	$nsx = $nhasanxuat_model->select_all_nsx();
	foreach ($nsx as $key => $value) {
		$data['contentdata']['nsx'][$key] = $value;
	}
	$data['JATOVI'] = $this->JATOVI;
	$this->JATOVI->load->view('admin/master',$data);
}

	public function delete()
	{
		$id='';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		include BASEPATH.'models/admin/nhasanxuat_model.php';
		$del = $nhasanxuat_model->delete($id);
		if ($del) {
			header("Location:".base_url."index.php?module=nhasanxuat");
		}
	}

	public function update()
	{
		$nsx_ten = $nsx_diachi = $nsx_sodienthoai = $nsx_email = $nsx_website = $nsx_logo = $nsx_mota = $id ="";
		if(isset($_POST['update_nsx_ten'])&& isset($_POST['update_nsx_diachi'])&&isset($_POST['update_nsx_sodienthoai'])&&isset($_POST['update_nsx_email'])&&isset($_POST['update_nsx_website'])&&isset($_POST['update_nsx_logo'])&&isset($_POST['update_nsx_mota'])){
		$id = $_POST['txtid'];
		$nsx_ten = $_POST['txtten'];
		$nsx_diachi = $_POST['txtdiachi'];
		$nsx_sodienthoai = $_POST['txtsodienthoai'];
		$nsx_email = $_POST['txtemail'];
		$nsx_website = $_POST['txtwebsite'];
		$nsx_logo = $_POST['logo'];
		$nsx_mota = $_POST['mota'];

		include_once 'models/admin/nhasanxuat_model.php';
		$update = $nhasanxuat_model->update($id, $nsx_ten, $nsx_diachi, $nsx_sodienthoai, $nsx_email, $nsx_website, $nsx_logo, $nsx_mota);

		
	header("Location:".base_url."index.php?module=nhasanxuat");
	}
}
	public function insert()
	{
		$nsx_ten = $diachi = $nsx_sodienthoai = $email = $nsx_website = $nsx_mota ="";
		if(isset($_POST['email'])&& isset($_POST['mota'])){
			$nsx_ten =$_POST['ten'];
			$nsx_diachi = $_POST['diachi'];
			$nsx_sodienthoai = $_POST['sodienthoai'];
			$nsx_email = $_POST['email'];
			$nsx_website = $_POST['website'];
			$nsx_mota = $_POST['mota'];
			include_once 'models/admin/nhasanxuat_model.php';
			$insert = $nhasanxuat_model->insert($nsx_ten, $nsx_diachi, $nsx_sodienthoai, $nsx_email, $nsx_website, $nsx_mota);
			}
			header("Location:".base_url."index.php?module=nhasanxuat");

}
}
$nhasanxuat = new nhasanxuat($JATOVI);
 ?>