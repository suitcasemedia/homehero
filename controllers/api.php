<?php

/**
* Controller
*       My controller extends Controller
*			Dashboard extends My_Controller
*/
class Api extends Controller
{
	
	function __construct()

	{
		parent::__construct();
		

		$this->view->js  = array('admin/js/default.js');
		
		

		// print_r($_SESSION);
		
		
		
	}

function Index(){
	$this->view->title = 'Admin' ;

	$this->view->render('header') ;
	
	$this->view->render('footer') ;
		
	}


	function xhrInsert()
	{

		$this->model->xhrInsert();
	}

	

	
}