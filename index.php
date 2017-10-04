<?php 
session_start();
if ($_SESSION['userID']==NULL) {
	header("Location: index.php");
}
require 'cores/JATOVI_Controller.php';
include_once BASEPATH.'/controllers/admin/page.php';
include_once BASEPATH.'/controllers/admin/taikhoan/taikhoanadmin.php';
include_once BASEPATH.'/controllers/admin/taikhoan/taikhoankhachhang.php'; 
include_once BASEPATH.'/controllers/admin/taikhoan/phanquyen.php';
include_once BASEPATH.'/controllers/admin/quanlytintuc.php';
include_once BASEPATH.'controllers/admin/sanpham/quanlysanpham.php';
include_once BASEPATH.'controllers/admin/sanpham/nhasanxuat.php';
include_once BASEPATH.'controllers/admin/sanpham/danhmucsanpham.php';


include_once BASEPATH.'controllers/site/home.php';

$module='';
if (isset($_GET['module'])) {
	$module = $_GET['module'];
}
switch ($module) {
	case 'page':
		$page->dieuhuong();
		break;
	case 'taikhoankhachhang':
		$taikhoankhachhang->dieuhuong();
		break;
	case 'taikhoanadmin':
		$taikhoanadmin->dieuhuong();
		break;
	case 'phanquyen':
		$phanquyen->dieuhuong();
		break;
	case 'quanlytintuc':
		$quanlytintuc->dieuhuong();
		break;
	case 'quanlysanpham':
		$quanlysanpham->dieuhuong();
		break;
	case 'nhasanxuat':
		$nhasanxuat->dieuhuong();
		break;
	case 'danhmucsanpham':
		$danhmucsanpham->dieuhuong();
		break;
	default:
		$home->index();
		break;
}
?>