<?php

/**
* 
*/
 class Login extends Controller{
	
	function __construct()

	{
		parent::__construct();
		
	}
	function Index(){
		 
			$this->view->title = 'Login' ;
		echo '<br>';
		echo Hash::create('md5','test', HASH_KEY_SITE_WIDE_PASSWORDS_KEY);
		
		$this->view->render('header') ; 
		$this->view->render('login/index') ; 
		$this->view->render('footer') ; 

	}

	function run(){

		$this->model->run();
	}
}