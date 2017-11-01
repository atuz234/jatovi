<?php
include_once 'JATOVI_Model.php';  
/**
* 
*/
class danhmuc_model extends JATOVI_Model
{
	private $_table = 'tb_sanpham';
	private $_table2 = 'tb_nhasanxuat';
	private $_table3 = 'tb_danhmuc';	

	function __construct()
	{
		parent::__construct();
	}

	function select_danhmuc()
	{
		
	}


}
$danhmuc_model = new danhmuc_model();

?>