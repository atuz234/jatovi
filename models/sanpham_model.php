<?php
include_once 'JATOVI_Model.php';  
/**
* 
*/
class sanpham_model extends JATOVI_Model
{
	private $_table = 'tb_sanpham';
	private $_table2 = 'tb_nhasanxuat';
	private $_table3 = 'tb_danhmuc';	

	function __construct()
	{
		parent::__construct();
	}

	public function select_sanpham($id)
	{
		$sql = "SELECT sp.id, sp.ten, sp.mota, sp.xuatsu, sp.giacu, sp.giamoi, sp.ngaysanxuat, sp.hansudung, sp.donvi, sp.hinhanh, sp.dshinhanh, sp.damua, sp.luotxem, sp.tgcapnhat, sp.trangthai, nsx.nsx_ten, dm.name as tendanhmuc FROM {$this->_table} sp INNER JOIN {$this->_table2} nsx  ON sp.id_nsx = nsx.id INNER JOIN {$this->_table3} dm ON sp.id_danhmuc = dm.id  WHERE sp.id = {$id} ";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_splienquan($id)
	{
		$sql = "SELECT * FROM {$this->_table} WHERE (id_danhmuc = (SELECT id_danhmuc FROM {$this->_table} WHERE id = {$id})  OR (SELECT id_nsx  FROM {$this->_table} WHERE id = {$id}) ) AND id != {$id} LIMIT 0,8";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}


}
$sanpham_model = new sanpham_model();

?>