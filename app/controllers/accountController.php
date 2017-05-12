<?php
/**
* Login class
* This is where the login, logout and other stuff happens
*/
use oauth\facebook\sdk\facebook as facebook;

class AccountController extends Controller
{
	protected $username;
	protected $email;
	protected $telephone;

	public function index(){
		/*if(LoginController::islogedin()){
			$this->viewTemplate->render('account/login', $this->data);
		}else{
			$this->viewTemplate->render('account/register', $this->data);
		}*/
	}

	
	public function signup(){
		$this->viewTemplate->render('account/register', $this->data);
	}

	

	public function login(){

		if($_POST){
			Mysession::init();

			$_SESSION['username'] = $_POST['username'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['telephone'] = $_POST['telephone'];

			$msg = "Upload was Success";
			echo $_SESSION['username'];
			echo $msg;
		}

		$this->viewTemplate->render('account/login', $this->data);
	}

	public function facebookLogin(){
		if (($loader = ROOT . '/vendor/autoload.php') == null)  {
		  die('Vendor directory not found, Please run composer install.');
		}

		$facebook = new Facebook(array(
		  'appId'  => '165163067343941',
		  'secret' => 'daf64f98be95207d656f8c2ef7fb5890',
		));

		// Get User ID
		$user = $facebook->getUser();
		if ($user) {
			var_dump($user);
		}
		else{
			throw new Exception("Failed to define $user variabkle". die());
		}
	}

	/**
	* isLogedIn is the check whether user is login 
	* @param $userid userid
	* @return boolan 
	*
	*/
	public static function isLogedin(/*$userid*/){
		/**
		* if user is login
		**/
		if(Mysession::init()){
			return true;
		}
		return false;
	}

	public static function logout(){
		Mysession::destroy();
	}
	
	function __construct()
	{
		parent::__construct();
		

		$this->data['action'] = $this->url->link('account/login');
		$this->data['register'] = $this->url->link('account/register');
		$this->data['forgot_password'] = $this->url->link('account/forgot_password');
		$this->data['username'] = $this->username;
	}
}