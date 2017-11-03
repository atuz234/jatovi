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

	public function select_by_email($email)
	{
		$sql = "SELECT * FROM {$this->_table} WHERE email ='{$email}' ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
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
	public function lichsu($id_kh,$batdau,$ketthuc)
	{

		$sql = "SELECT *,DATE_FORMAT(tb_donhang.ngaydathang, '%d-%m-%Y') as datedathang FROM tb_donhang WHERE id_khachhang ='{$id_kh}' and '{$batdau}' <= ngaydathang and ngaydathang  <='{$ketthuc}' ";

		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;

	}
	public function chitietdh($id)
	{
		$sql = "SELECT tb_chitietdonhang.* , tb_sanpham.ten FROM `tb_chitietdonhang` INNER JOIN tb_sanpham on tb_chitietdonhang.id_sanpham = tb_sanpham.id where id_donhang = {$id} ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
		
	}
}
$khachhang_model = new khachhang_model();
?>