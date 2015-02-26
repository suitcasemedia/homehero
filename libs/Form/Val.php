<?php

class Val

{
	public function Construct()
	{
		# code...
	}

	public function minlength($data , $arg)

	{
		

		if (strlen($data) < $arg){
			return "Value needs to be $arg long minimum";
			

		}


	}

	public function maxlength($data , $arg)

	{
		if (strlen($data) > $arg){
			return "Value needs to be $arg long max";
		}

	}

	public function digit($data)

	{
		if (ctype_digit($data) == false){
			return "Value needs to be a digit";
		}

	}

	public function __call($name , $arguments)

	{

		throw new Exception("$name does not exist inside of:" . __CLASS__);
	}
}