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
	private $_table4 = 'tb_sanpham';
	function __construct()
	{
		parent::__construct();
	}

	public function select_spnb()
	{
		$sql = "SELECT * FROM {$this->_table4} ORDER BY luotxem DESC LIMIT 0,10";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function sodong($search)
	{
		$sql = "SELECT id FROM tb_sanpham where ten like '%$search%'";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_spbc()
	{
		$sql = "SELECT * FROM {$this->_table4} ORDER BY damua DESC LIMIT 0,10";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_spm()
	{
		$sql = "SELECT * FROM {$this->_table4} ORDER BY tgcapnhat DESC LIMIT 0,10";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function search($search, $limit, $batdau)
	{
		$sql = "SELECT * FROM tb_sanpham where ten like '%$search%' ORDER BY luotxem DESC LIMIT {$batdau},{$limit}";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
}
$home_controller = new home_controller();
?>