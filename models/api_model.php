<?php

/**
* 
*/
class Api_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function xhrInsert(){

		$name =  $_POST['name'];
		 $date =  date('Y-m-d G:i:s');
		$phone =  $_POST['phone'];
		$email =  $_POST['email'];
		$address =  $_POST['address'];
		$summary =  $_POST['summary'];
		$postcode =  $_POST['postcode'];
		

		$this->db->insert('orders', array(
			'name' => $name,
			'orderdate' => $date,
			'phone' => $phone,
			'email' => $email,
			'address' => $address,
			'summary' => $summary,
			'postcode' => $postcode

			)) ;


		
		$data = array('name' => $name ,
					 'id' => $this->db->lastInsertId(),
					 'orderdate' => $date,
					'phone' => $phone,
					'email' => $email,
					'address' => $address,
					'summary' => $summary,
					'postcode' => $postcode,

					 ) ;
		echo json_encode($data);
	}

	function xhrGetListings(){
		$result = $this->db->select("SELECT * FROM orders order by id desc");
		
		echo json_encode($result);
	}

	
}