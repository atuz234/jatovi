<?php 
include_once 'JATOVI_Model.php'; 
/**
* 
*/
class lienhe_model extends JATOVI_Model
{
	function __construct()
	{
		parent::__construct();
	}
public function them($hoten, $email, $tieude, $noidung)
	{
		$sql = "insert into tb_lienhe (ten, email, tieude, noidung) values ('{$hoten}', '{$email}', '{$tieude}','{$noidung}' )";
		$query = $this->connection->prepare($sql);
 		$query->execute();
	}
}
$lienhe_model = new lienhe_model();
?>