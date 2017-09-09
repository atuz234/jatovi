<?php 
class loader
{
	public function view($name='',$data=array())
	{
		//tao bien tu mang
		// foreach ($data as $key => $value) {
		// 	$$key = $value;
		// }
		extract($data);
		include BASEPATH.'views/'.$name.'.php' ;
		
	}

	public function model($name='',$data=array())
	{
		include_once BASEPATH.'models/'.$name.'.php' ;
	}
}
?>