<?php 
session_start();
require 'cores/JATOVI_Controller.php';
include_once BASEPATH.'controllers/home.php';
include_once BASEPATH.'controllers/dangky.php';
include_once BASEPATH.'controllers/sanpham.php';

$module='';
if (isset($_GET['module'])) {
	$module = $_GET['module'];
}
switch ($module) {
	case "dangky" :
	$dangky->dieuhuong();
	break;
	case 'sanpham':
		$sanpham->dieuhuong();
		break;
	default:
		$home->index();
		break;
}
?>