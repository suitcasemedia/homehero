<?php

/**
* Controller
*       My controller extends Controller
*			Dashboard extends My_Controller
*/
class Dashboard extends Controller
{
	
	function __construct()

	{
		parent::__construct();
		Auth::handleLogin();

		$this->view->js  = array('dashboard/js/default.js');
		
		

		// print_r($_SESSION);
		
		
		
	}

	function Index(){
	$this->view->title = 'Dashboard' ;

	$this->view->render('header') ;
	$this->view->render('dashboard/index') ;
	$this->view->render('footer') ;
		
	}



	public function edit($id) {
		$this->view->title = 'Edit dashboard' ;
	// fetch indivivual user
	echo $id;
	$this->view->dash = $this->model->dashSingleList($id);
	if (empty($this->view->dash)){

		die('This is an invalid note');

	}

	$this->view->render('header');
	$this->view->render('note/edit');
	$this->view->render('footer');
		
	}





	function logout(){

		Session::destroy();
		header('location:../login');
		exit;
	}

	function xhrInsert()
	{

		$this->model->xhrInsert();
	}

	function xhrGetListings()
	{

		$this->model->xhrGetListings();
	}

	function xhrDeleteListing(){

		$this->model->xhrDeleteListing();
	}
}