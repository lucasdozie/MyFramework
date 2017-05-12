<?php

/**
* Mysession class
* it handles SESSION stuff, checks if user is login, if yes as a session to them
*
*/
class MySession{
	/*
	protected $key;
	protected $value;*/

	/*
	*It assigns session only if the current browser session_id is empty
	*/
	public static function init(){

		if(session_id() == ''){
			session_start();
		}
		
	}

	/**
	* its set the value to session key
	* @param mixed $key key
    * @param mixed $value value
	*/
	public static function set($key, $value){

		$_SESSION[$key] = $value;
	}


	/**
	*it gets the value of the session using its key
	* @param mixed $key key
	* @return  mixed $key return the assign value in Mysession::set($key, $Value)
	*/
	public static function get($key){

		isset($_SESSION[$key]) ? $value = $_SESSION[$key] : '';
		return $value;
	}

	/*
	* This method destroys the session once the user logouts 
	*/
	public static function destroy(){
		session_destroy();
	}

	/*public function __construct(){
		$this->value = 
	}*/
	


}