<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class baocao_model extends JATOVI_Model
{
	private $_table = 'tb_sanpham';
	private $_table2 = 'tb_danhmuc';
	private $_table3 = 'tb_nhasanxuat';
	private $_table4 = 'tb_chitietdonhang';
	function __construct()
	{
		parent::__construct();
	}

	public function doanhthu_sp()
	{
		$sql = "
			SELECT sp.id as idsp, sp.ten,sp.hinhanh, sp.luotxem, sp.damua, sp.trangthai, dm.id iddm, dm.name tendm, nsx.*, nsx.id idnsx, ctdh.id_sanpham ctdh_idsp
			FROM {$this->_table} sp 
			INNER JOIN {$this->_table2} dm ON sp.id_danhmuc = dm.id 
			INNER JOIN {$this->_table3} nsx ON sp.id_nsx = nsx.id
			INNER JOIN {$this->_table4} ctdh ON ctdh.id_sanpham = sp.id
			GROUP BY id_sanpham
			ORDER BY id_sanpham
			";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_ctdh_idsp()
	{
		$sql = "
			SELECT id_sanpham
			FROM {$this->_table4} 
			GROUP BY id_sanpham
			ORDER BY id_sanpham
			";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

	public function select_ctdh_thanhtien()
	{
		$sql = "
			SELECT id_sanpham, thanhtien
			FROM {$this->_table4} 
			ORDER BY id_sanpham
			";
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}

}
$baocao_model = new baocao_model();
?>