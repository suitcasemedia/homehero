<?php

/**
* 
*/
class Error extends Controller

{
	
	function __construct()
	{
		parent::__construct();
		
		
	}

	function Index(){
	$this->view->title = '404 Error' ;
	$this->view->msg = 'This page doesn\'t exist';
		$this->view->render('error/inc/header') ;
		$this->view->render('error/index') ;
		$this->view->render('error/inc/footer') ;

		
	}
}