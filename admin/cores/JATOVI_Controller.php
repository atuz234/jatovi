<?php 
// defined('BASEPATH') OR exit('No direct script access allowed');
require 'define.php';
require 'loader.php';
/**
* Controller he thong
* 
*/
/**
* 
*/
class JATOVI_Controller
{
	public $load;
	function __construct()
	{
		$this->load = new loader();
	}
}
$JATOVI = new JATOVI_Controller();
?>