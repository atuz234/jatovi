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
	case 'taikhoankhachang':
		$taikhoankhachang->dieuhuong();
		break;
	default:
		
		break;
}
if (!isset($_SESSION['userID'])) {
	$page->login();
}
$data['JATOVI']=$JATOVI;
$JATOVI->load->view('master',$data);
?>