<?php 
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class baocao extends JATOVI_Controller
{
	
	public $action = '';
	public $JATOVI = '';
	function __construct($JATOVI)
	{
		parent::__construct();
		$this->JATOVI = $JATOVI;
	}
	public function dieuhuong()
	{
		if (isset($_GET['action'])) {
			$this->action = $_GET['action'];
		}
		switch ($this->action) {

			default:
				$this->index();
				break;
		}
	}
	public function index()
	{
		$data['content'] = 'thongke/baocao';
		$data['contentdata'] = array();
		include BASEPATH.'models/admin/baocao_model.php';
		// Lấy các thông tin về sản phẩm đã được bán
		$dlbaocao = $baocao_model->doanhthu_sp();
		// Lấy id sản phẩm đã bán, id không lặp lại
		$list_idsp = $baocao_model->select_ctdh_idsp();
		// Lấy thành tiền theo id
		$list_thanhtien = $baocao_model->select_ctdh_thanhtien();

		// Tính doanh thu theo từng id sản phẩm
		$tongthanhtien = array();
		foreach ($list_idsp as $k => $v) {
			$tongthanhtien[$v['id_sanpham']]= 0 ;
			foreach ($list_thanhtien as $key => $value) {
				if ($value['id_sanpham']==$v['id_sanpham']) {
					$tongthanhtien[$v['id_sanpham']]+=$value['thanhtien'];
				}
			}
		}
		
		// Gán doanh thu vào chi tiết sản phẩm
		foreach ($dlbaocao as $key=>$value) {
			$dlbaocao[$key]['doanhthu'] = 0;
			foreach ($tongthanhtien as $k => $v) {
				if ($k == $value['idsp']) {
					$dlbaocao[$key]['doanhthu'] = $v;
				}
			}
		}

		// Truyền dl sang view
		foreach ($dlbaocao as $key => $value) {
			$data['contentdata']['dlbaocao'][$key]=$value;
		}
		

		
		$data['JATOVI']=$this->JATOVI;
		$this->JATOVI->load->view('admin/master',$data);
	}
}
$baocao = new baocao($JATOVI);
?>