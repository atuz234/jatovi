<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class tintuc_model extends JATOVI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function index($limit, $batdau)
	{
		$sql = "SELECT * from tb_tintuc limit {$batdau},{$limit}";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
		
	}
	public function sodong()
	{
		$sql = "SELECT id_tintuc from tb_tintuc";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
		
	}
	public function chitiet($id)
	{
		$sql = "SELECT * from tb_tintuc where id_tintuc = {$id} ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
		
	}
	
}
$tintuc_model = new tintuc_model();
?>