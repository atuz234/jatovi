<?php
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class quanlytintuc_model extends JATOVI_Model
{
	private $_table = 'tb_tintuc';
	
	function __construct()
	{
		parent::__construct();
	}
	public function sodong($search)
	{
		$sql = "SELECT id_tintuc from {$this->_table} where tieude like '%{$search}%' ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
		
	}
	public function add($tieude, $hinhanh, $noidung, $tacgia)
	{
		$sql = "insert into {$this->_table}(tieude, hinhanh, noidung, tacgia) values ('{$tieude}', '{$hinhanh}', '{$noidung}','{$tacgia}' )";
		$query = $this->connection->prepare($sql);
 		$query->execute();
	}
		public function delete($id)
	{
		$sql = "DELETE FROM {$this->_table} WHERE id_tintuc={$id}";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		if ($query->execute()) {
			return True;
		}
		return False;
	}		
		public function edit($tieude, $hinhanh, $noidung, $tacgia, $id )
	{
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$ngaydang =date("Y-m-d h:i:s");
		$sql = "UPDATE {$this->_table} SET tieude = '{$tieude}', hinhanh = '{$hinhanh}', noidung = '{$noidung}',  tacgia = '{$tacgia}', ngaydang ='{$ngaydang}'  WHERE id_tintuc={$id}";
		$query = $this->connection->prepare($sql);
 		$query->execute();
	}
	public function search 	($search, $limit, $batdau)
	{
		$sql = "SELECT * from {$this->_table} where tieude like '%{$search}%' limit {$batdau},{$limit}  ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}	
}
$quanlytintuc_model = new quanlytintuc_model();
?>