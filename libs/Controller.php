<?php
class Controller {
	function __construct() {
		$this->view = new View();
				Session::init();

	}

	public function loadModel($name) {
		$path = 'models/'.$name.'_model.php';

		if(file_exists($path)) {
			require 'models/'.$name.'_model.php';
			$modelName = $name .'_Model';
			$this->model = new $modelName();
		}
	}

	public function loadTheme($theme_name) {
	   	$this->theme_name = $theme_name;
			$this->view->theme_name = $this->theme_name;
	}

}
?>
