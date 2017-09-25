<?php 
session_start();
if ($_SESSION['userID']==NULL) {
	header("Location: index.php");
}
require 'cores/JATOVI_Controller.php';
include_once BASEPATH.'/controllers/page.php';
include_once BASEPATH.'/controllers/taikhoan/taikhoanadmin.php';
include_once BASEPATH.'/controllers/taikhoan/taikhoankhachhang.php';

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
	default:
		$page->index();
		break;
}
// Cap nhat index
?>