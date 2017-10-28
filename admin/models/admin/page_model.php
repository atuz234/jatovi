<?php
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class page_model extends JATOVI_Model
{
	private $_table = 'tb_admin';
	private $_table2 = 'tb_chucnang';
	private $_table3 = 'tb_nhomnguoidung';
	function __construct()
	{
		parent::__construct();
	}

	public function login($ten_taikhoan='', $matkhau='')
	{
		$sql = "SELECT ad.id, ten_taikhoan, matkhau, hoten, gioitinh, id_nhom,trangthai, gr.tennhom FROM {$this->_table} as ad INNER JOIN {$this->_table3} as gr WHERE ad.ten_taikhoan='{$ten_taikhoan}' AND ad.matkhau='{$matkhau}' AND ad.id_nhom = gr.id ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function countdh()
	{
		$sql = "SELECT id_donhang FROM tb_donhang ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function countsp()
	{
		$sql = "SELECT id FROM tb_sanpham ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function counttt()
	{
		$sql = "SELECT id_tintuc FROM tb_tintuc ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function countadmin()
	{
		$sql = "SELECT id FROM tb_admin ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function countkh()
	{
		$sql = "SELECT id FROM tb_khachhang ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

}
$page_model = new page_model();
?>