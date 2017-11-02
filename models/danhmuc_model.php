<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class danhmuc_model extends JATOVI_Model
{
	
	private $_table = 'tb_sanpham';
	private $_table2 = 'tb_danhmuc';
	function __construct()
	{
		parent::__construct();
	}

	public function select_by_danhmuc($iddanhmuc)
	{
		$sql = "SELECT * FROM {$this->_table} WHERE id_danhmuc = {$iddanhmuc} ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_danhmuc_by_id($iddanhmuc)
	{
		$sql = "SELECT name FROM {$this->_table2} WHERE id = {$iddanhmuc} ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_danhmuc()
	{
		$sql = "SELECT * FROM {$this->_table2} ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
}
$danhmuc_model = new danhmuc_model();
?>