<?php
/**
* 
*/
class Model
{
	protected $data = array();

	public function getData(){
		return $this->data;
	}

	public function __construct($data = NULL){
		$this->data = strtolower($data);
	}
}