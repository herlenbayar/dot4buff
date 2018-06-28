<?php
class Admin extends Controller {
	function __construct(){
		parent::__construct();

		
	}
	public function index() {

		if(!isset($_SESSION['admin'])){
            $this->view->render_admin('admin/login',true);

        } else  {
            $this->view->render_admin('admin/index');
        }
    }
    public function users() {
		$this->view->users = $this->model->users();
		$this->view->render_admin('admin/users');
    }
    public function edit($id) {
        $this->view->userEdit =  $this->model->userEdit($id);

        $this->view->render_admin('admin/userEdit');
    }
    public function login() {
					$this->model->login();
    }
    public function logout() {
	    Session::destroy();
    }
}
?>
