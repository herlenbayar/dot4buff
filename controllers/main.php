<?php
class Index extends Controller {
	function __construct(){
		parent::__construct();
		$this->loadTheme('default');

	}
	public function index() {

		$this->view->render('main/index',$this->theme_name);
	}
}
?>
