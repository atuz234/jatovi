<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class phanquyen_model extends JATOVI_Model
{
	
	private $_table = 'tb_phanquyen';
	private $_table2 = 'tb_nhomnguoidung';
	private $_table3 = 'tb_chucnang';
	function __construct()
	{
		parent::__construct();
	}

	public function select_all()
	{
		$sql = "SELECT pq.id as idphanquyen, pq.id_nhom,pq.id_chucnang, nhom.tennhom, cn.ten as tenchucnang FROM {$this->_table} pq INNER JOIN {$this->_table2} nhom ON pq.id_nhom = nhom.id INNER JOIN {$this->_table3} cn ON pq.id_chucnang = cn.id ORDER BY pq.id_nhom ASC, pq.id_chucnang ASC";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_nhom()
	{
		$sql = "SELECT id as idnhom, tennhom FROM {$this->_table2}";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
}
$phanquyen_model = new phanquyen_model();
?>