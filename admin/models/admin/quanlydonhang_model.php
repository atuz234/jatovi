<?php
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class quanlydonhang_model extends JATOVI_Model
{
	private $_table = 'tb_sanpham';
	private $_table2 = 'tb_chitietdonhang';
	private $_table3 = 'tb_donhang';
	
	function __construct()
	{
		parent::__construct();
	}

public function sodong()
	{
		$sql = "SELECT tb_donhang.id_donhang
				FROM (tb_donhang INNER JOIN tb_khachhang ON tb_khachhang.id = tb_donhang.id_khachhang) ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function getlist($search, $limit, $batdau)
	{
		$sql = "SELECT tb_donhang.diachi, tb_donhang.ngaydathang, tb_donhang.sotien, tb_donhang.tinhtrang,tb_donhang.id_donhang, tb_khachhang.email, tb_khachhang.sodienthoai
				FROM (tb_donhang INNER JOIN tb_khachhang ON tb_khachhang.id = tb_donhang.id_khachhang) where tb_khachhang.email like '%$search%' limit $batdau, $limit";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function chitiet($id)
	{
		$sql = "SELECT tb_donhang.id_donhang,tb_donhang.ngaydathang, tb_chitietdonhang.soluong, tb_chitietdonhang.dongia, tb_sanpham.ten
		 FROM tb_donhang 
		 INNER JOIN tb_chitietdonhang ON tb_chitietdonhang.id_donhang = tb_donhang.id_donhang 
		 INNER JOIN tb_sanpham ON tb_sanpham.id = tb_chitietdonhang.id_sanpham 
		 WHERE tb_donhang.id_donhang ='{$id}';";		
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function capnhat($tinhtrang, $id_donhang)
	{
		$sql = "UPDATE tb_donhang SET tinhtrang = '{$tinhtrang}' WHERE `tb_donhang`.`id_donhang` = '{$id_donhang}' ";
		echo $sql;
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	
	public function search($search)
	{
		$sql = "SELECT tb_donhang.diachi, tb_donhang.ngaydathang, tb_donhang.sotien, tb_donhang.tinhtrang,tb_donhang.id_donhang, tb_khachhang.email, tb_khachhang.sodienthoai
				FROM (tb_donhang INNER JOIN tb_khachhang ON tb_khachhang.id = tb_donhang.id_khachhang)
				where tb_khachhang.email LIKE '%{$search}%' ";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
}

$quanlydonhang_model = new quanlydonhang_model();
?>