<?php
class Login extends Controller {
	function __construct(){
		parent::__construct();
		$this->loadTheme('default');
	}
	function index() {
		$this->view->render('login/index',$this->theme_name);

	}
	function run() {
		$this->model->run();
	}

	function test() {
		$this->view->render('login/test',$this->theme_name);
	}
}
?>
