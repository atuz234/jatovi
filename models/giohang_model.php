<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class giohang_model extends JATOVI_Model
{
	private $_table = 'tb_sanpham';
	function __construct()
	{
		parent::__construct();
	}
	public function index($str)
	{
		$sql = "SELECT id,ten, giamoi from  {$this->_table} where id in ($str) order by id desc ";	
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchALL();
		return $result;
	}
	public function thanhtoan($str){
		$sql = "SELECT id,ten, giamoi from  {$this->_table} where id in ($str) order by id desc ";	
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchALL();
		return $result;
	}
	public function dathang($id_kh,$diachi,$sotien,$ngaydathang,$tinhtrang){
		$sql = "INSERT INTO tb_donhang (id_khachhang, diachi, sotien, ngaydathang, tinhtrang) VALUES ({$id_kh},'{$diachi}', {$sotien}, '{$ngaydathang}', {$tinhtrang})";	
		$query = $this->connection->prepare($sql);
		$query->execute();
	}
}
$giohang_model = new giohang_model();
?>