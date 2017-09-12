<?php 
session_start();
require 'cores/JATOVI_Controller.php';
include_once BASEPATH.'/controllers/page.php';

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
	default:
		$page->index();
		break;
}
?>