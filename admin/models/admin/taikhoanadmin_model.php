<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class taikhoanadmin_model extends JATOVI_Model
{
	private $_table = 'tb_admin';
	private $_table2 = 'tb_nhomnguoidung';
	function __construct()
	{
		parent::__construct();
	}
	public function sodong()
	{
		$sql = "SELECT  ad.id FROM {$this->_table} ad INNER JOIN {$this->_table2} gr WHERE ad.id_nhom = gr.id ORDER BY ad.id";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function select_all_admin($search, $limit, $batdau)
	{
		$sql = "SELECT ad.*, ad.id as idadmin,gr.id as idnhom, gr.tennhom FROM {$this->_table} ad INNER JOIN {$this->_table2} gr WHERE ad.id_nhom = gr.id and ten_taikhoan like '%$search%' ORDER BY ad.id limit $batdau, $limit";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_nhom()
	{
		$sql = "SELECT id as grid, tennhom FROM {$this->_table2}";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_by_id($id)
	{
		$sql = "SELECT ad.*, ad.id as idadmin,gr.id as idnhom, gr.tennhom FROM {$this->_table} ad INNER JOIN {$this->_table2} gr WHERE ad.id_nhom = gr.id AND ad.id = {$id} ORDER BY ad.id";
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

	public function update($id = '', $mang = array('ten_taikhoan' => '', 'matkhau'=>'', 'hoten' => '' , 'gioitinh' => '', 'id_nhom' => '') )
	{
		extract($mang);
		$sql = "UPDATE {$this->_table} SET ten_taikhoan = '{$ten_taikhoan}',matkhau = '{$matkhau}', hoten='{$hoten}', gioitinh={$gioitinh}, id_nhom ={$id_nhom} WHERE id = {$id}";
		if ($matkhau=='') {
			$sql = "UPDATE {$this->_table} SET ten_taikhoan = '{$ten_taikhoan}', hoten='{$hoten}', gioitinh={$gioitinh}, id_nhom ={$id_nhom} WHERE id = {$id}";
		}
		$query = $this->connection->prepare($sql);
		$query->execute();
	}

	public function insert($mang = array('ten_taikhoan' => '', 'matkhau', 'hoten' => '' , 'gioitinh' => '', 'id_nhom' => ''))
	{
		extract($mang);
		$sql = "INSERT INTO {$this->_table}(ten_taikhoan, matkhau, hoten, gioitinh, id_nhom) VALUES('{$ten_taikhoan}','{$matkhau}','{$hoten}',{$gioitinh},{$id_nhom}) ";
		$query = $this->connection->prepare($sql);
		$query->execute();
	}
}
$taikhoanadmin_model = new taikhoanadmin_model();
?>