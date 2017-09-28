<?php 
class loader
{
	public function view($name='',$data=array())
	{
		extract($data);
		include BASEPATH.'views/'.$name.'.php' ;	
	}

	public function controller($name='',$data=array())
	{
		extract($data);
		include_once BASEPATH.'controllers/'.$name.'.php';
	}

	public function model($name='',$data=array())
	{
		extract($data);
		include_once BASEPATH.'models/'.$name.'.php' ;
	}
}
?>