<?php 
include_once 'JATOVI_Model.php';

class quanlysanpham_model extends JATOVI_Model
{
	private $_table = 'tb_sanpham';
	private $_table2 = 'tb_danhmuc';
	private $_table3 = 'tb_nhasanxuat';
	
	function __construct()
	{
		parent::__construct();
	}

	public function select_all_product()
	{
		$sql = "SELECT sp.*, sp.id as idsanpham, sp.ten, nsx.id as idnsx, nsx.nsx_ten, DATE_FORMAT(sp.ngaysanxuat, '%d-%m-%Y') as datesanxuat, DATE_FORMAT(sp.hansudung, '%d-%m-%Y') as datesudung FROM {$this->_table} sp INNER JOIN {$this->_table2} dm ON sp.id_danhmuc = dm.id INNER JOIN {$this->_table3} nsx ON sp.id_nsx = nsx.id   ORDER BY sp.id";
		
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchALL();
		return $result;
	} 
	public function select_danhmuc()
	{
		$sql = "SELECT id , name FROM {$this->_table2}";
		$query = $this ->connection ->prepare($sql);
		$query->execute();
		$result = $query->fetchALL();
		return $result;
	}
	public function select_nhasanxuat()
	{
		$sql = "SELECT id, nsx_ten FROM {$this->_table3}";
		$query = $this ->connection ->prepare($sql);
		$query->execute();
		$result = $query ->fetchALL();
		return $result;
	}
	public function delete($id)
	{
		$sql = "DELETE FROM {$this->_table} WHERE id={$id}";
		echo $sql;
		$query = $this->connection->prepare($sql);
		$query->execute();
		if ($query->execute()) {
			return True;
		}
		return False;
	}

	public function update ($id='', $mang = array('ten' => '', 'mota' => '', 'id_danhmuc' => '', 'id_nsx' => '', 'xuatsu' => '', 'giacu' => '', 'giamoi' => '', 'ngaysanxuat' => '', 'hansudung' => '', 'donvi' => '', 'hinhanh' => ''))
	{
		extract($mang);
		$sql = "UPDATE {$this->_table} SET ten = '{$ten}', mota = '{$mota}', id_danhmuc = '{$id_danhmuc}', id_nsx = '{$id_nsx}', xuatsu = '{$xuatsu}', giacu = '{$giacu}', giamoi = '{$giamoi}', ngaysanxuat = '{$ngaysanxuat}', hansudung = '{$hansudung}', donvi = '{$donvi}', hinhanh = '{$hinhanh}' WHERE id = '{$id}'";
		$query = $this->connection->prepare($sql);
		$query->execute();
	}

	public function insert($mang = array('ten' => '', 'mota' => '', 'id_danhmuc' => '', 'id_nsx' =>'', 'xuatsu' => '', 'giacu' => '', 'giamoi' => '', 'ngaysanxuat' =>'', 'hansudung' =>'', 'donvi' => '', 'hinhanh' => ''))
	{
		extract($mang);
		$sql = "INSERT INTO {$this->_table}(ten, mota, id_danhmuc, id_nsx, xuatsu, giacu, giamoi, ngaysanxuat, hansudung, donvi) values ('{$ten}', '{$mota}', '{$id_danhmuc}', '{$id_nsx}', '{$xuatsu}', {$giacu}, {$giamoi}, '{$ngaysanxuat}', '{$hansudung}', '{$donvi}')";
		
		$query = $this->connection->prepare($sql);
		$query->execute();
	}
}

$quanlysanpham_model = new quanlysanpham_model();
 ?>