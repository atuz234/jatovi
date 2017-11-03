<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class quanlytintuc extends JATOVI_Controller
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
			case 'add':
				$this->add();
				break;
			case 'edit':
				$this->edit();
				break;
			case 'delete':
				$this->delete();
				break;
			case 'timkiem':
					$this->index();
					break;
			default:
				$this->index();
				break;
		}
	}
	public function index(){
		$limit = 10;
		$batdau =0;	
		$search="";
		$list ="";
		$data['content'] = 'admin/tintuc/quanlytintuc';
		$data['contentdata'] = array();	
		include BASEPATH."models/admin/quanlytintuc_model.php";
		$p = "";
		if (isset($_GET['search'])){
			$search = $_GET['search'];
			$data['contentdata']['search']= $search;
			}
			else if(isset ($_POST['timkiem']) ){
			$search = $_POST['timkiem'];
			$data['contentdata']['search']= $search;
		}
		else{$search="";
		$data['contentdata']['search']= "";
		}
		if(isset($_GET['p'])){
			$p = $_GET['p'];			
			}else{$p=1;}
			$data['contentdata']['p']= $p;
			$batdau = ($p -1)*$limit;
		$list = $quanlytintuc_model->search($search, $limit, $batdau);
		if ($list!=NULL	) {
			foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;
			$tongdong =$quanlytintuc_model->sodong($search);
			$data['contentdata']['tongdong']= $tongdong;
		}
		}else{
			$tongdong =0;
			$data['contentdata']['tongdong']= $tongdong;
			$data['contentdata']['list'] = "";
		}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
				
		}
	public function add(){
		$uploadOk=0;
		$mangtype= array('png','PNG','jpg','JPG', 'jpeg', 'gif','GIF' );
		$hinhanh = $tieude = $noidung ="";
		$tacgia = $_SESSION['userName'];
		if(isset($_POST['tieude'])&& isset($_POST['noidung'])){
			
			
			$mangfile = $_FILES["hinhanh"];
			foreach($mangfile['name'] as $value){
				}
			for($i=0; $i <count($mangfile["name"]); $i++){
			// upload file
			$target_file = "public/images/tintuc/" . basename($mangfile["name"][$i]);
			$uploadOk = 0;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			// check fake
			$check = getimagesize($mangfile["tmp_name"][$i]);
			if($check != false) {
				$uploadOk = 1;
			} else {
				$uploadOk = 0;
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				$uploadOk = 0;
			}
			
			// Check file size (100mb)
			if ($mangfile["size"][$i] > 100*1024*1024) {
				$uploadOk = 0;
			} 
			
			// Allow certain file formats
			if( !in_array($imageFileType, $mangtype) ) {
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			} else {
				if (move_uploaded_file($mangfile["tmp_name"][$i], $target_file)) {
					$hinhanh = $mangfile['name'][$i];
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
			// end upload file
			}
			$tieude =$_POST['tieude'];
			$noidung = $_POST['noidung'];
			include_once 'models/admin/quanlytintuc_model.php';
			//nỗi chuỗi cách nhau bởi |
			$hinhanh = implode("|", $mangfile["name"]);
			//tách chuỗi  $a = explode('|', $hinhanh);
			$add = $quanlytintuc_model->add($tieude, $hinhanh, $noidung,$tacgia);
			header("Location:".base_url."index.php?module=quanlytintuc");
			}
		}
	public function edit(){
		
		
		$uploadOk=0;
		$mangtype= array('png','PNG','jpg','JPG', 'jpeg', 'gif','GIF' );
		if(isset($_FILES['hinhanh']) and isset($_POST['changeimage']) and $_POST['changeimage']=='changed'){
			$mangfile = $_FILES["hinhanh"];
			// upload file
			$target_file = "../public/images/tintuc/" .  basename($mangfile['name']);
			$uploadOk = 0;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			// check fake
			$check = getimagesize($mangfile["tmp_name"]);
			if($check != false) {
				$uploadOk = 1;
			} else {
				$uploadOk = 0;
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				$uploadOk = 0;
			}
			
			// Check file size (100mb)
			if ($mangfile["size"] > 100*1024*1024) {
				$uploadOk = 0;
			} 
			
			// Allow certain file formats
			if( !in_array($imageFileType, $mangtype) ) {
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			} else {
				if (move_uploaded_file($mangfile["tmp_name"], $target_file)) {
					$hinhanh = $mangfile['name'];
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			
			}
			$hinhanh =$mangfile["name"];
		}
		else{
				$hinhanh = $_POST["hinhanhcu"];
			}
		
	 $tieude = $noidung = $id	="";
		if(isset($_POST['tieude'])&& isset($_POST['noidung'])){
			
			$id =$_POST['edit_id'];
			$tieude =$_POST['tieude'];
			$noidung = $_POST['noidung'];
			include_once 'models/admin/quanlytintuc_model.php';
			$edit = $quanlytintuc_model->edit($tieude,$noidung, $id, $hinhanh);
			//header("Location:".base_url."index.php?module=quanlytintuc");

			}
		}
	public function delete(){
		$id = '';
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
			include 'models/admin/quanlytintuc_model.php';
			$del = $quanlytintuc_model->delete($id);
			if ($del) {
			header("Location:".base_url."index.php?module=quanlytintuc");
			}
		}
	public function timkiem(){
			
		
	}
}
$quanlytintuc = new quanlytintuc($JATOVI);
?>