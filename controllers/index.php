<?php

/**
* 
*/
 class Index extends Controller{
	
	function __construct()

	{
		parent::__construct();
		$this->view->js  = array(
			'index/js/js/bootstrap.min.js',
			'index/js/cbpAnimatedHeader.js',
			'index/js/cbpAnimatedHeader.min.js',
			'index/js/classie.js',
			'index/js/contact_me.js',
			'index/js/freelancer.js',
			'index/js/jqBootstrapValidation.js'


			);
		
	}
	function Index(){
		 
		
		$this->view->title = 'Home' ;
		$this->view->render('header') ; 
		$this->view->render('index/index') ; 
		$this->view->render('footer') ; 

	}

	
}