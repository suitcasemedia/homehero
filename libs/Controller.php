<?php

/**
* 
*/
class Controller 
{
	
	function __construct()
	{

		// echo 'Main Controller</br>';
		$this->view = new View();

		
	}

	/**
	 * @param string $name of the model
	 * @param string $path location of the models
	 */
	public function loadModel($name, $model_path = 'models/'){
		$path =   $model_path . $name.'_model.php';

		if (file_exists($path)){
			require $model_path .$name.'_model.php';
			$modelName = $name . '_Model';
			$this->model = new $modelName ;
		}
	}
}