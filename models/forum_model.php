<?php

class Forum_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	
	}
	
	public function create($data) {

        $sth = $this->db->prepare('INSERT INTO forum
			(`title`,`category`, `text`) 
			VALUES (:title,:category,:text)
			');
		$sth->execute(array(
            ':title' => $data['title'],
            ':category' => $data['category'],
			':text' => $data['text']
			));
	}
	public function list() {
		$sth = $this->db->prepare("SELECT * FROM forum");
		$sth->execute();

			$result = $sth->fetchAll();
			return $result;
	}

}
?>