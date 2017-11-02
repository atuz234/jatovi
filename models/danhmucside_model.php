<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class danhmucside_model extends JATOVI_Model
{
	private $_table2 = 'tb_danhmuc';
	function __construct()
	{
		parent::__construct();
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
$danhmucside_model = new danhmucside_model();
?>