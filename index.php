<?php 
session_start();
require 'cores/JATOVI_Controller.php';
include_once BASEPATH.'controllers/home.php';
include_once BASEPATH.'controllers/dangky.php';
include_once BASEPATH.'controllers/giohang.php';
include_once BASEPATH.'controllers/tintuc.php';

$module='';
if (isset($_GET['module'])) {
	$module = $_GET['module'];
}
switch ($module) {
	case "dangky" :
		$dangky->dieuhuong();
		break;
	case "giohang" :
		$giohang->dieuhuong();
		break;
	case "tintuc" :
		$tintuc->dieuhuong();
		break;
	default:
		$home->index();
		break;
}
?>