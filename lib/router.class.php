<?php
class Router{
	protected $url;

	protected $controller;

	protected $action;

	protected $params;

	protected $method_prefix;

	protected $language;

	protected $route;

	public function getUrl(){
		return $this->url;
	}

	public function getController(){
		return $this->controller;
	}

	public function getAction(){
		return $this->action;
	}
	public function getParams(){
		return $this->params;
	}

	public function getRoute(){
		return $this->route;
	}

	public function getMethodPrefix(){
		return $this->method_prefix;
	}
	public function getLanguage(){
		return $this->language;
	}
	public function __construct($url){
		$this->url = urldecode(trim($url, '/'));

		// Get defaults
		$routes = Config::get('routes');
		$this->route = Config::get('default_route');
		$this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route] : '';
		$this->language = Config::get('default_langauge');
		$this->controller = Config::get('default_controller');
		$this->action = Config::get('default_action');

		$url_parts = explode('?', $this->url);

		//Get path controller, action and params
		$path = $url_parts[0];

		$path_parts = explode('/', $path);

		//echo "<pre>"; print_r($path_parts);
		
		if( count($path_parts)){
			//Get route or language at first element

			//Sub folder for the site url
			$app_subFolder = Config::get('app_subFolder');
			$app_subFolders = explode('/', $app_subFolder);
			$count_dir = count($app_subFolders);

			if ($app_subFolder != '') {
				for ($i=0; $i < $count_dir; $i++) { 
					array_shift($path_parts);
				}

			}

			if(in_array($path_parts, array_keys($routes))){
				$this->route = strtolower(current($path_parts));
				$this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route] : '';
				array_shift($path_parts);
			}elseif (in_array(strtolower(current($path_parts)), Config::get('languages'))) {
				$this->language = strtolower(current($path_parts));
				array_shift($path_parts);
			}

			//Get controller
			if(current($path_parts)){
				$this->controller = strtolower(current($path_parts));
				array_shift($path_parts);
			}

			//Get action
			if(current($path_parts)){
				$this->action = strtolower(current($path_parts));
				array_shift($path_parts);
			}

			//Get params
			$this->params = $path_parts;
		}

	}

}