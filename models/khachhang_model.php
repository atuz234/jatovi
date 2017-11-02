<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class khachhang_model extends JATOVI_Model
{
	
	private $_table = 'tb_khachhang';
	function __construct()
	{
		parent::__construct();
	}

	public function dangnhap($tk, $mk)
	{
		$sql = "SELECT * FROM {$this->_table} WHERE email ='{$tk}' AND matkhau='{$mk}' ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function add($email, $matkhau, $sodienthoai, $ten, $ngaysinh, $gioitinh, $diachi)
	{
		$sql = "insert into {$this->_table}(email, matkhau, sodienthoai, ten, ngaysinh, gioitinh, diachi) values ('{$email}', '{$matkhau}', {$sodienthoai}, '{$ten}', '{$ngaysinh}', {$gioitinh}, '{$diachi}' )";
		$query = $this->connection->prepare($sql);
 		$query->execute();
	}
	public function lichsu($id_kh)
	{
		$sql = "SELECT *,DATE_FORMAT(tb_donhang.ngaydathang, '%d-%m-%Y') as datedathang FROM tb_donhang WHERE id_khachhang ='{$id_kh}' ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;

	}
}
$khachhang_model = new khachhang_model();
?>