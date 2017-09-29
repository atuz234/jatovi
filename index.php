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
	default:
		$page->index();
		break;
}
?>