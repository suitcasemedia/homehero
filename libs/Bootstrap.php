<?php

/**
 * 
 */
class Bootstrap {

	private $_url = null;
	private $_controller = null;
	private $_controllerPath = 'controllers/' ;
	private $_modelPath  = 'models/' ; //Always include the trailing slash
	private $_errorFile = 'error.php';
	private $_defaultFile = 'index.php';

	
	/**
	 * Starts the bootstrap
	 */

	public function init(){

		// Sets the protected $_url
		$this->_getUrl();
		
		// Load the default controller if no URL is set
		if (empty($this->_url[0])) 
		    {
				$this->_loadDefaultController();
				return false;
			}

		$this->_loadExistingController();
		$this->_callControllerMethod();
		

	}
	/**
	 * Oprional - set a custom path to controllers
	 * @param type string $path
	 */

	public function setControllerPath($path)
	{

		$this->_controllerPath = trim($path, '/') .'/';
	}


	/**
	 * Oprional - set a custom path to models
	 * @param type string $path - use the file name only of your controller eg: error.php
	 */

	public function setModelPath($path)
	{
		$this->_modelPath = trim($path, '/') .'/' ;

	}

	/**
	 * Oprional - set a custom path to error file
	 * @param type string $path
	 */

	public function setErrorFile($path)
	{


		$this->_errorFile = trim($path, '/') ;


	}

	/**
	 * @param string $path Use the file name of your controller , eg index.php
	 */
	public function setDefaultFile($path)
	{


		$this->_defaultFile = trim($path, '/') ;


	}

	/**
	 * Fetches the $_GET from the 'url'
	 */

	private function _getUrl (){
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = filter_var($url,FILTER_SANITIZE_URL);
		$this->_url = explode('/', $url);


	}

	/**
	 * This loads if there is no $_GET parameter passed
	 */
	private function _loadDefaultController(){



			require $this->_controllerPath . $this->_defaultFile ;
			$this->_controller = new Index();
			$this->_controller->index();
			
		


	}


	/**
	 * Loads an existing controller if there is a $_GET parameter passed 
	 * @return boolean|string
	 */
	
	private function _loadExistingController(){


		$file = $this->_controllerPath . $this->_url[0] . '.php';

		if (file_exists($file)) {
			require $file;
			$this->_controller = new $this->_url[0];
			$this->_controller->loadModel($this->_url[0], $this->_modelPath); 
		} else {
			$this->_error();
			return false;
		}

		
	}

	/**
	 * If a method is passed in the GET url parameter
	 */

	private function _callControllerMethod(){

		// http://localhost/controller/method/(param)/(param)/(param)
		// url[0] = Controller name
		// url[1] = Method
		// url[2] = Parameter
		// url[3] = Parameter

		$length = count($this->_url) ;


	//Make sure the method we are calling exists
		if($length > 1) {

			if (!method_exists($this->_controller, $this->_url[1])) {
				
					$this->_error();
				}
			
		}

 
	
		
	






		//Determine what to load




		switch ($length) {
			case 5:
				# Controller->Method(Param1, Param2, Param3)

				$this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4]);
				break;

			case 4:
				# code...
				$this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3]);
				break;


			case 3:
				# code...
				$this->_controller->{$this->_url[1]}($this->_url[2]);
				break;

			case 2:
				# code...
				$this->_controller->{$this->_url[1]}();
				break;

			default:
				//Uncomment this to debug:
				$this->_controller->index();
			
			
		}

		
		// calling methods
		
		 
	}	

	/**
	 * Display an error page if nothing exists
	 *
	 *@return booleans 
	 */
	
	private function _error() {
		require  $this->_controllerPath . $this->_errorFile ;
		$this->_controller = new Error();
		$this->_controller->index();
		exit;
	}

}