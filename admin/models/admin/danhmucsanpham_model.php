<?php 
include_once 'JATOVI_Model.php';
/**
* 
*/
class danhmucsanpham_model extends JATOVI_Model
{
	private $_table = 'tb_danhmuc';
	
	function __construct()
	{
		parent::__construct();
	}

	public function select_all_danhmuc()
	{
		$sql = "SELECT * FROM {$this->_table} ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function delete($id)
	{
		$sql = "DELETE FROM {$this->_table} WHERE id ={$id}";
		$query = $this->connection->prepare($sql);
		$query->execute();
		if ($query->execute()) {
			return TRUE;
		}
		return FALSE;
}
	public function update ($name)
	{
		$sql = "UPDATE {$this->_table} SET name = '{$name}'";
		$query = $this->connection->prepare($sql);
		$query->execute();
	}
	public function insert ($name)
	{
		$sql = "INSERT INTO {$this->_table} (name) VALUES '{$name}'";
		$query = $this->connection->prepare($sql);
		$query->execute();
	}
}
$danhmucsanpham_model = new danhmucsanpham_model();
 ?>