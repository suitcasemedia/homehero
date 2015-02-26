<?php

/**
* 
*/
class Note extends Controller
{
	
	function __construct()

	{
		parent::__construct();
		Auth::handleLogin();

		// print_r($_SESSION);
		// print_r($_SESSION);
		
		
		
	}

	function Index(){
		$this->view->title = 'Notes' ;
	$this->view->noteList = $this->model->noteList() ;
	$this->view->render('header');
	$this->view->render('note/index');
	$this->view->render('footer');
		
	}

	public function create() {

		$data = array(
		'title' =>  $_POST['title'],
		'content' =>  $_POST['content'],
		
		);

		
		// do your error checking

		$this->model->create($data);
		header('location:' .URL. 'note');
	}
public function edit($id) {
		$this->view->title = 'Edit Note' ;
	// fetch indivivual user
	echo $id;
	$this->view->note = $this->model->noteSingleList($id);
	if (empty($this->view->note)){

		die('This is an invalid note');

	}

	$this->view->render('header');
	$this->view->render('note/edit');
	$this->view->render('footer');
		
	}

public function editSave($id){
	$data = array(
		'title' =>  $_POST['title'],
		'content' =>  $_POST['content'],
		'noteid' =>  $_POST['noteid']
		);

$this->model->editSave($data);

header('location:' .URL. 'note');

}
public function delete($id) {
		$this->model->delete($id);
		echo $id;
		header('location:' .URL. 'note');
	}

	}