<?php

class Index_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	
	}
	
	public function users() {
		$sth = $this->db->prepare("SELECT * FROM users");
		$sth->execute();

			$result = $sth->fetchAll();
			
			return $result;
			
	}
}
?>