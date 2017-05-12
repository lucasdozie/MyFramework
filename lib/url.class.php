<?php
/**
* Url Class
* Its gets the full route the user is taking
**/

class Url
{
	
	protected $route;
	protected $domain;
	protected $ssl;

	/**
	*
	* @param mixed $route route url::link('account/login')
	*
	*/
	public function link($route, $data = Null, $secure = false){
		$url = config::get('Home_url').$route;
		if(config::get('ENV') == "Development"){
			$url = "http://localhost/myFramework/$route";
		}
		return $url;
	}

	function __construct()
	{
		# code...
	}
}