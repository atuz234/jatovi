<?php 
session_start();
require 'cores/JATOVI_Controller.php';
include_once BASEPATH.'controllers/home.php';

$module='';
if (isset($_GET['module'])) {
	$module = $_GET['module'];
}
switch ($module) {
	default:
		$home->index();
		break;
}
?>