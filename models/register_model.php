<?php

class Register_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	
	}
	
	public function create($data) {

		$sth = $this->db->prepare('INSERT INTO users
			(`username`, `password`) 
			VALUES (:username, :password)
			');
		$sth->execute(array(
			':username' => $data['username'],
			'password' => $data['password']
			));
	}
}
?>