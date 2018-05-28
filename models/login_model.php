<?php

class Login_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	
	}
	
	public function run() {
		$sth = $this->db->prepare("SELECT id FROM users WHERE username = :username AND password = :password");
		$sth->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password']
		));
	//	$data = $sth->fetchAll();
		//print_r($data);
		$count = $sth->rowCount();
		if ($count > 0){
		//	Session::set('loggedIn', true);
			$_SESSION['logged'] = "logged";
			header('location: /mvc');
			
		} else {
			header('location: /mvc/login');
		}
	}
}
?>