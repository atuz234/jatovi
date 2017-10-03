<?php 
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class danhmucsanpham extends JATOVI_Controller
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
	$data['content'] = 'sanpham/danhmucsanpham';
	$data['contentdata'] = array();
	include BASEPATH.'models/danhmucsanpham_model.php';
	$danhmuc = $danhmucsanpham_model->select_all_danhmuc();
	foreach ($danhmuc as $key => $value) {
		$data['contentdata']['danhmuc'][$key] = $value;
	}

	$data['JATOVI'] = $this->JATOVI;
	$this->JATOVI->load->view('master', $data);
}
	public function delete()
	{
		$id='';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		include BASEPATH.'models/danhmucsanpham_model.php';
		$del = $danhmucsanpham_model->delete($id);
		if ($del) {
			header("Location:".base_url."index.php?module=danhmucsanpham");
		}
	}
	public function update()
	{
		include BASEPATH.'models/danhmucsanpham_model.php';
		$id =$_POST['txtid'];
		$name = $_POST['txtname'];

		 $mang = array('name' => $name);

		$danhmucsanpham_model->update($id, $mang);
		header("Location:".base_url."index.php?module=danhmucsanpham");
	}

	public function insert()
	{
		include BASEPATH.'models/danhmucsanpham_model.php';
		$name = $_POST['name'];

		 $mang = array('name' => $name);

		$danhmucsanpham_model->insert($name);
		//header("Location:".base_url."index.php?module=danhmucsanpham");
	}
}
	$danhmucsanpham = new danhmucsanpham($JATOVI);
	?>