<?php 
session_start();
require 'cores/JATOVI_Controller.php';
include_once BASEPATH.'/controllers/page.php';
include_once BASEPATH.'/controllers/taikhoan/taikhoanadmin.php';
include_once BASEPATH.'/controllers/taikhoan/taikhoankhachhang.php';
include_once BASEPATH.'/controllers/quanlytintuc.php';

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
	case 'quanlytintuc':
		$quanlytintuc->dieuhuong();
		break;
	default:
		$page->index();
		break;
}
?>