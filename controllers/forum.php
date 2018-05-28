<?php

class Forum  extends Controller {
	function __construct(){
		parent::__construct();
		
	}
	public function index() {

    $this->view->list = $this->model->list();
		$this->view->render('forum/index');
  }
    public function add() {
    
    $this->view->js = array('public/ckeditor/ckeditor.js');
		$this->view->render('forum/add');
  }

    public function create() {
            
            $data = array();
            $data['title'] = $_POST['title'];
            $data['category'] = $_POST['category'];
            $data['text'] = $_POST['text'];
       
            $this->model->create($data);
            print_r($data);

            header('Location:'.URL.'forum');
        
  }
  public function view($title) {
      $this->view->title = $title;
  
      $this->view->render('forum/view');
  }
}