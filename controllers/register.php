<?php
class Register extends Controller {
	function __construct(){
		parent::__construct();

	}
	public function index() {
		
	//	$this->view->users = $this->model->users();
		$this->view->render('index/index');
	}

	public function create() {
		$data = array();
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];

		$this->model->create($data);
		header('Location:' .URL. 'register');
	}
}
?> 