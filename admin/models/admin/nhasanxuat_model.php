<?php 
include_once 'JATOVI_Model.php';
/**
 * 
 */
class nhasanxuat_model extends JATOVI_Model
{
	private $_table = 'tb_nhasanxuat';
	private $_table2 = 'tb_sanpham';
	function __construct()
	{
		parent::__construct();
	}

	public function select_all_nsx()
	{
		$sql = "SELECT nsx.*, nsx.id as idnsx
		FROM tb_nhasanxuat nsx
		ORDER BY nsx.id";
			$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	
	public function delete($id)
	{
		$sql = "DELETE FROM {$this->_table} WHERE id={$id}";
		$query = $this->connection->prepare($sql);
		$query->execute();
		if ($query->execute()) {
			return True;
		}
		return False;
}
	public function update($id = '', $mang = array('nsx_ten' =>'', 'nsx_diachi'=>'',  'nsx_sodienthoai' =>'', 'nsx_email'=>'', 'nsx_website'=>'', 'nsx_logo'=>'', 'nsx_mota'=>'') )
	{
		extract($mang);
		$sql = "UPDATE {$this->_table} SET nsx_ten = '{$nsx_ten}', nsx_diachi = '{$nsx_diachi}', nsx_sodienthoai = {$nsx_sodienthoai}, nsx_email = '{$nsx_email}', nsx_website = '{$nsx_website}', nsx_logo = '{$nsx_logo}', nsx_mota = '{$nsx_mota}' WHERE id = {$id}";

		$query = $this->connection->prepare($sql);
		$query->execute();
	}
	public function insert($mang = array('nsx_ten' =>'', 'nsx_diachi'=>'',  'nsx_sodienthoai' =>'', 'nsx_email'=>'', 'nsx_website'=>'', 'nsx_mota'=>'') )
	{
		extract($mang);
		$sql = "INSERT INTO {$this->_table}(nsx_ten, nsx_diachi, nsx_sodienthoai, nsx_email, nsx_website,  nsx_mota) VALUES('{$nsx_ten}','{$nsx_diachi}', '{$nsx_sodienthoai}', '{$nsx_email}', '{$nsx_website}','{$nsx_mota}')";
		$query = $this->connection->prepare($sql);
		$query->execute();
	}
	
}

$nhasanxuat_model = new nhasanxuat_model();

 ?>