<?php 
session_start();
require 'cores/JATOVI_Controller.php';
include_once BASEPATH.'controllers/home.php';
include_once BASEPATH.'controllers/dangky.php';
include_once BASEPATH.'controllers/giohang.php';
include_once BASEPATH.'controllers/tintuc.php';
include_once BASEPATH.'controllers/sanpham.php';

include_once BASEPATH.'controllers/lienhe.php';

include_once BASEPATH.'controllers/khachhang.php';


$module='';
if (isset($_GET['module'])) {
	$module = $_GET['module'];
}
switch ($module) {
	case 'khachhang':
		$khachhang->dieuhuong();
		break;
	case "dangky" :
		$dangky->dieuhuong();
		break;
	case "giohang" :
		$giohang->dieuhuong();
		break;
	case "tintuc" :
		$tintuc->dieuhuong();
	break;
	case 'sanpham':
		$sanpham->dieuhuong();
		break;
	case 'lienhe':
		$lienhe->dieuhuong();
		break;
	default:
		$home->index();
		break;
}
?>