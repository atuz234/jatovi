<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class home_controller extends JATOVI_Model
{
	private $_table = 'tb_menu';
	private $_table2 = 'tb_chucnang';
	private $_table3 = 'tb_nhomnguoidung';
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

	public function select_spnb()
	{
		
	}
}
$home_controller = new home_controller();
?>