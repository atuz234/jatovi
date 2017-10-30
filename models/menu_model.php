<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class menu_controller extends JATOVI_Model
{
	private $_table = 'tb_menu';
	function __construct()
	{
		parent::__construct();
	}
	public function select_menu()
	{
		$sql = "SELECT * FROM {$this->_table} WHERE trangthai = 1";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
}
$menu_controller = new menu_controller();
?>