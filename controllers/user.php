<?php
class User extends Controller {
	function __construct(){
		parent::__construct();

	
		//$logged = Session::get('loggedIn');
		if($_SESSION['logged'] == "logged"){
		
		} else {
			Session::destroy();
			header('location: ../login');
			exit;
			
		}
		
	}
	public function index(){ 
	
		$this->view->render('user/profile');

	}
	public function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
		
	
	}
}
?> 