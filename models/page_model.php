<?php
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class page_model extends JATOVI_Model
{
	private $_table = 'tb_admin';
	private $_table2 = 'tb_chucnang';
	function __construct()
	{
		parent::__construct();
	}

	public function login($ten_taikhoan, $matkhau)
	{
		$sql = "SELECT count(*) FROM {$this->_table} WHERE ten_taikhoan='{$ten_taikhoan}' AND matkhau='{$matkhau}'";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchColumn();
		return $result;
	}

}

?>