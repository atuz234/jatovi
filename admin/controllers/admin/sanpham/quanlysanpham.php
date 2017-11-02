<?php 
 class quanlysanpham extends JATOVI_Controller
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
		$sanpham ='';
		if (!isset($_SESSION['userID'])) {
			$this->login();
		}
		
		$limit = 5;
		$batdau =0;	
		$search="";
		$list ="";
		$data['content'] = 'admin/sanpham/quanlysanpham';
		$data['contentdata'] = array();
		include BASEPATH.'models/admin/quanlysanpham_model.php';
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
		$list = $quanlysanpham_model->select_all_product($search, $limit, $batdau);
		if ($list!=NULL	) {
			foreach ($list as $key => $value) {
			$data['contentdata']['list'][$key] = $value;
			$tongdong =$quanlysanpham_model->sodong($search);
			$data['contentdata']['tongdong']= $tongdong;
		}
		}else{
			$tongdong =0;
			$data['contentdata']['tongdong']= $tongdong;
			$data['contentdata']['list'] = "";
		}
		$danhmuc = $quanlysanpham_model->select_danhmuc();
		foreach ($danhmuc as $key => $value) {
			$data['contentdata']['danhmuc'][$key] = $value;
		}
		$nsx = $quanlysanpham_model->select_nhasanxuat();
		foreach ($nsx as $key => $value) {
			$data['contentdata']['nsx'][$key] = $value;
		}
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
	}
	public function delete()
	{
		$id ='';
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
		include BASEPATH.'models/admin/quanlysanpham_model.php';
		$del = $quanlysanpham_model->delete($id);
		if($del) {
			header("Location:".base_url."index.php?module=quanlysanpham");
		}
	}
	public function update()
	{
		include BASEPATH.'models/admin/quanlysanpham_model.php';
		$ten = $_POST['txtten'];
		$mota = $_POST['txtmota'];
		$id_danhmuc = $_POST['txtid_danhmuc'];
		$id_nsx = $_POST['txtid_nsx'];
		$giacu = $_POST['txtgiacu'];
		$giamoi = $_POST['txtgiamoi'];
		$ngaysanxuat = $_POST['txtngaysanxuat'];
		$hansudung = $_POST['txthansudung'];
		$donvi = $_POST['txtdonvi'];
		$hinhanh = $_POST['txthinhanh'];
		
		$mang = array('ten' => $ten, 'mota' => $mota, 'id_danhmuc' => $id_danhmuc, 'id_nsx' => $id_nsx ,'xuatsu' =>$xuatsu, 'giacu' => $giacu, 'giamoi' =>$giamoi, 'ngaysanxuat' => $ngaysanxuat, 'hansudung'=> $hansudung, 'donvi' => $donvi, 'hinhanh' => $hinhanh);
		$quanlysanpham_model->update($mang);
		header("Location:".base_url."index.php?module=quanlysanpham");
	}


	public function insert()
	{
		$uploadOk=0;
		$mangtype= array('png','PNG','jpg','JPG', 'jpeg', 'gif','GIF' );
		$mangfile = $_FILES["hinhanh"];
			foreach($mangfile['name'] as $value){
				}
			for($i=0; $i <count($mangfile["name"]); $i++){
			// upload file
			$target_file = "../public/images/sanpham/" . basename($mangfile["name"][$i]);
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
			}
			// end upload file
		
		$ten = $_POST['ten'];
		$mota = $_POST['mota'];
		$id_danhmuc = $_POST['id_danhmuc'];
		$id_nsx = $_POST['id_nsx'];
		$xuatsu = $_POST['xuatsu'];
		$giacu = $_POST['giacu'];
		$giamoi = $_POST['giamoi'];
		$ngaysanxuat = $_POST['ngaysanxuat'];
		$hansudung = $_POST['hansudung'];
		$donvi = $_POST['donvi'];
		$hinhanh = implode("|", $mangfile["name"]);
		
		include BASEPATH.'models/admin/quanlysanpham_model.php';
		$quanlysanpham_model->insert($ten, $mota, $id_danhmuc, $id_nsx, $xuatsu, $giacu, $giamoi, $ngaysanxuat, $hansudung, $donvi, $hinhanh );
		//header("Location:".base_url."index.php?module=quanlysanpham");
	}

 }


 $quanlysanpham = new quanlysanpham($JATOVI);
 ?>