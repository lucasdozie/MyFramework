<?php
use zvook\Skrill\Models\QuickCheckout;
class PagesController extends Controller{
	
	public function index(){
		//echo "Controller is working";
		$this->viewTemplate->render('pages/index', $this->data);
	}

	public function about(){
		//echo "Welcome to about us page";
		$this->viewTemplate->render('pages/about', $this->data);
	}

	/**
	* Checkout page for text 
	**/
	public function checkout(){
		

		$this->data = array(
			"user" => array(
				'first_name' => "Lucas", 
				'last_name' => "Imo",
				'bio' => "I'm just who God created me to be.", 
				'profession' => 'Software Engineer'
				),
			"items" => array('T-Shirt', 'Jeans', 'Shoes'),
			"total_price" => "N200,000",
			"message" => "Thank you for your patronage"
			);

		$this->viewTemplate->render('pages/checkout', $this->data);
	}

	public function __construct(){
		parent::__construct();

		$this->data['meta_title'] = "Alright I'm good";
		$this->data['site_line'] = "This is myFramework";
		$this->data["welcome"] = "Controller is working";
	}

}