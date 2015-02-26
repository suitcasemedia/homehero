<?php 

/**
* 
*/
class View
{
	
	function __construct()
	{
		// echo 'this is the  base view<br>  ';
	}

	public function render($name , $noInclude = false){
		if ($noInclude == true){

			require 'views/' .$name. '.php' ;
		}
		else{
		
		require 'views/' .$name. '.php' ;
		
		}
	}
}