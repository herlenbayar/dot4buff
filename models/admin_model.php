<?php

class Admin_Model extends Model {

	public function __construct() {
		parent::__construct();

	}

	public function users() {
		$sth = $this->db->prepare("SELECT * FROM users");
		$sth->execute();
		$result = $sth->fetchAll();

		return $result;
	}
	public function userEdit($id) {
		$sth = $this->db->prepare('SELECT * FROM users where id = :id');
		$sth->execute(array(':id'=> $id));

		return $sth->fetch();

	}

	public function login() {
		$sth = $this->db->prepare("SELECT id FROM admin WHERE admin_name = :username AND admin_passwd = :password");
		$sth->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['passwd']
		));

		echo  $_POST['username'];
		echo  $_POST['passwd'];

	//	$data = $sth->fetchAll();
		//print_r($data);
		$count = $sth->rowCount();
		if ($count > 0){
		//	Session::set('loggedIn', true);
			$_SESSION['admin'] = "admin";
		//	Session::set('admin','admin');
			header('location:'.URL.ROOT.'/admin' );

		} else {
	  	header('location:'.URL.ROOT.'/admin' );
		}
	}

}
?>
