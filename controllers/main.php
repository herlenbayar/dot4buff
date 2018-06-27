<?php
class Index extends Controller {
	function __construct(){
		parent::__construct();
		$this->loadTheme('default');
<<<<<<< HEAD:controllers/main.php

	}
	public function index() {

		$this->view->render('main/index',$this->theme_name);
=======
	}
	public function index() {

		$this->view->render('main/index',$this->theme_name,false);
>>>>>>> 8ddc5fcd4b7613f647bd02880ca0b4d60aca50ad:controllers/index.php
	}
}
?>
