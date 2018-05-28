<?php

class Help extends Controller {
	function __construct(){
		parent::__construct();
		echo 'HELP';
		
	}
	public function other() {
		echo 'we are inside other';
	}
}
?>