<?php
/**
* 
*/
class View
{
	
	protected $data = array();
	protected $path;

	public function getDefaultViewPath(){
		$router = APP::getRouter();

		if (!$router) {
			return false;
		}

		$controller_dir = $router()->getController();
		echo "<pre>";
		print_r($controller_dir);
	}

	public function render($filename, $data = NULL){
		//$data will be taken from the model
		$this->path = config::get('TEMPLATE_URI').$filename.'.php';
		
		if($data){
			foreach ($data as $key => $value) {
				$this->{$key} = $value;
			}
		}

		if (!$filename) {
			//Display default View template
			require config::get('TEMPLATE_URI').'index.php';
		}
		if(!file_exists($this->path)){
			throw new Exception("Template file can not be found in path: {$filename}");
		}
		require config::get('TEMPLATE_URI').'_template/header.php';
		require config::get('TEMPLATE_URI').$filename.'.php';
		require config::get('TEMPLATE_URI').'_template/footer.php';
	}

	/*function __construct($data = array(), $path = null)
	{
		if (!$path) {
			//Display Default View template
		}
		if(!file_exists($path)){
			throw new Exception("Template file can not be found in path: {$path}");
		}
	}*/
}