<?php 
include_once 'JATOVI_Model.php';
/**
 * 
 */
class lienhe_model extends JATOVI_Model
{
	private $_table = 'tb_lienhe';
	function __construct()
	{
		parent::__construct();
	}

	public function selectall()
	{
		$sql = "SELECT * FROM {$this->_table}";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	
}

$lienhe_model = new lienhe_model();

 ?>