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
	
	}


	function xhrInsert()
	{

		$this->model->xhrInsert();
	}

	

	
}