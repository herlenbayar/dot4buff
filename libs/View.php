<?php
class View {
	function __construct(){

	}
	public function render($name, $theme_name ,$noInclude = false){
		if ($noInclude == true) {
			require 'views/' .$name. '.php';
		}
		else {
			require 'views/'.$theme_name.'header.php';
			require 'views/'.$theme_name.$name. '.php';
			require 'views/'.$theme_name.'footer.php';
		}
	}
	public function render_admin($name, $noInclude = false) {
        if ($noInclude == true) {
            require 'views/' .$name. '.php';
        } else {
            require 'views/header_admin.php';
            require 'views/' .$name. '.php';
            require 'views/footer_admin.php';
        }
	}
}
?>
