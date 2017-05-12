<?php
class App{
	protected static $router;
	protected static $Params;


	public static function getRouter(){
		return self::$router;
	}
	public static function run($url){
		self::$router = new Router($url);

		$controller_class = ucfirst(self::$router->getController()).'Controller';
		//$controller_class = ucfirst(self::$router->getController());
		$controller_method = strtolower(self::$router->getMethodPrefix().self::$router->getAction());
		//call the controller's class
		$controller_object = new $controller_class();


		if(method_exists($controller_object, $controller_method)){
			$result = $controller_object->$controller_method();
		}else{
			//throw new Exception('Method of '.$controller_method.' class '.$controller_class.' does not exist');
			$msg = 'Method of '.$controller_method.' class '.$controller_class.' does not exist';
			MyError::run($msg);
			
		}
	}
	


}