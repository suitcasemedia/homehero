<?php

/**
 *  - FIll out a form
 *		-Post to PHP
 *		-sanitize
 *		-validate
 *		-return data
 *		-write to database
 */

require  'Form/Val.php' ;
class Form
{
	/** @var array $_currentItem  The immediately posted item*/
	private $_currrentItem = null ;

	/**
	 * @var array $_postData stores all of the posted data
	 */

	private $_postData = array();
	
	/**
	 * @var  object $_val the validator object
	 */

	private $_val = array(); 

	/**
	 * @var  array $_error Holds the current form errors
	 */

	private $_error = array(); 

	/**
	 * The constructor
	 - instantiates the validator class
	 */

	public function __construct()

	 {
		$this->_val  = new Val();

	 }
/**
 * This is to run $_post
 * @param string field - The HTML fieldname to post.
 */

	public function post($field)
	{
		$this->_postData[$field] = $_POST[$field];
		$this->_currentItem = $field ;

		return $this;
	}
	/**
	 * fetch - Return the posted data
	 *  @paramo mixed  $fieldName
	 * return mixed string or array
	 */

	public function fetch($fieldName = false)
	{
		if ($fieldName)
		{
			if(isset($this->_postData[$fieldName]))
			return $this->_postData[$fieldName];
			else 
				return false;

		}else
		{

			return $this->_postData ;
		}
		return $this->_postData;
	}

/**
 * This is to validate
 *@param string $typeOfValidator A method from the Form/Val class
 * @param string $arg A property to validate against
 */
	public function val($typeOfValidator, $arg = null)
	{
		
		# code...i

			if ($arg == null){
				$error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem]  );
			}
			else{

				$error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem] , $arg );
			}
			
			

		
		
		if ($error)
			$this->_error[$this->_currentItem] = $error ;
		
		
		return $this;
	}
/**
 * submit - Handles the form, and throws an exception upon error.
* @return boolean
* @throws exception
 */

	public function submit(){

		if (empty($this->_error)){
			return true;


		}else{
			$str = '';
			foreach($this->_error as $key => $value)
			{
				$str .= $key . ' =>' . $value . "<br>" ;
			}

			throw new Exception($str);
		}
	}
	

}