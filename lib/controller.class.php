<?php
class Controller
{
	protected $data;
	protected $model;
	protected $params;
	protected $url;
	protected $viewTemplate;

	public function getData(){
		return $this->data;
	}

	public function getModel(){
		return $this->model;
	}

	public function getParams(){
		return $this->params;
	}
	
	public function __construct($data = array())
	{
		# code...
		$this->data = $data;
		$this->params = App::getRouter()->getParams();

		$this->model = new Model();

		$this->viewTemplate = new View();

		$this->url = new Url();
	}
}