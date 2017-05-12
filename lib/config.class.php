<?php
class Config{
	protected static $settings = array();

	public static function get($key){
		return isset(self::$settings[$key]) ? self::$settings[$key] : NULL;
		//return "This is it";
	}

	public static function set($key, $value){
		self::$settings[$key] = $value;
	}
}

/*class Config {
	private $data = array();

	public function get($key) {
		return (isset($this->data[$key]) ? $this->data[$key] : "null");
	}

	public function set($key, $value) {
		$this->data[$key] = $value;
	}

	public function has($key) {
		return isset($this->data[$key]);
	}
}*/