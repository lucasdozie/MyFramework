<?php
/**
* 
*/
class MyError
{
	

	protected $data;
	protected static $msg;

	public static function run($data = NULL)
	{
	 throw new Exception($data);

	}
}