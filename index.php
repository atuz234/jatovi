<?php 
session_start();
require 'cores/JATOVI_Controller.php';
include_once BASEPATH.'/controllers/page.php';


if (!isset($_SESSION['userID'])) {
	// $data['JATOVI']=$JATOVI;
	// $JATOVI->load->view('login',$data);
	$page->login($JATOVI);
}else{
	$data['JATOVI']=$JATOVI;
	$JATOVI->load->view('master',$data);
}
?>