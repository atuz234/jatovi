<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class phanquyenchucnang extends JATOVI_Model
{
	private $_table = "tb_phanquyen";
	private $_table2 = "tb_chucnang";
	function __construct()
	{
		parent::__construct();
	}

	public function getrole($id_nhom)
	{
		$sql = "SELECT * FROM {$this->_table}  INNER JOIN {$this->_table2} WHERE id_nhom = {$id_nhom} AND {$this->_table}.id_chucnang = {$this->_table2}.id ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
}
$phanquyenchucnang = new phanquyenchucnang();
?>