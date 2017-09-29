<?php 
/**
* 
*/
class JATOVI_Model
{
	public $connection='';
	private $host = 'localhost';
	private $dbname = 'project_jatovi';
	private $dbuser = 'root';
	private $dbpass = '';
	
	function __construct()
	{
		try {
			$this->connection  = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8",$this->dbuser,$this->dbpass);
		} catch (PDOException $e) {
			echo "(DB connection error) Lỗi kết nối cơ sở dữ liệu: ".$e->getMessage();
		}
	}

	
}
?>