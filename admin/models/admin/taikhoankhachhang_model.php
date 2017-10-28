<?php
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class taikhoan_model extends JATOVI_Model
{
	private $_table = 'tb_admin';
	private $_table2 = 'tb_khachhang';
	function __construct()
	{
		parent::__construct();
	}
	public function sodong()
	{
		$sql = "SELECT id FROM {$this->_table2} ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function getlist($search, $limit, $batdau)
	{
		$sql = "SELECT *, DATE_FORMAT( ngaysinh, '%d-%m-%Y' ) as sinhnhat  FROM {$this->_table2} where email like '%$search%' limit $batdau,$limit";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function add($email, $matkhau, $sodienthoai, $ten, $ngaysinh, $gioitinh, $diachi)
	{
		$sql = "insert into {$this->_table2}(email, matkhau, sodienthoai, ten, ngaysinh, gioitinh, diachi) values ('{$email}', '{$matkhau}', {$sodienthoai}, '{$ten}', '{$ngaysinh}', {$gioitinh}, '{$diachi}' )";
		$query = $this->connection->prepare($sql);
 		$query->execute();
	}
		public function delete($id)
	{
		$sql = "DELETE FROM {$this->_table2} WHERE id={$id}";
		$query = $this->connection->prepare($sql);
 		$query->execute();
		if ($query->execute()) {
			return True;
		}
		return False;
	}
	public function edit( $id,$email, $sodienthoai, $ten, $ngaysinh, $gioitinh, $diachi)
	{
		$sql = "UPDATE {$this->_table2} SET email = '{$email}', sodienthoai = {$sodienthoai}, ten = '{$ten}', ngaysinh = '{$ngaysinh}', gioitinh = {$gioitinh}, diachi = '{$diachi}' WHERE id={$id}";
		$query = $this->connection->prepare($sql);
 		$query->execute();
	}
	public function timkiem($search)
	{
		$sql = "SELECT *, DATE_FORMAT( ngaysinh, '%d-%m-%Y' ) as sinhnhat  FROM {$this->_table2} where email like '%{$search}%' or ten like '%{$search}%' ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	
}
$taikhoan_model = new taikhoan_model();
?>