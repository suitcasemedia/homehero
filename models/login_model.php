<?php 
/**
* 
*/
class Login_Model extends Model{

	public function __construct(){
		parent::__construct();
		
		

	}



	public function run(){


		$st = $this->db->prepare("SELECT userid ,role
						 FROM users
						 WHERE login = :login
						 AND password = :password");

		$st->execute(array(
				':login' => $_POST['login'],
				':password' => Hash::create('sha256',$_POST['password'], HASH_KEY_SITE_WIDE_PASSWORDS_KEY) 
			));


		$data = $st->fetch();
		

		
		//$data = $st->fetchAll();
		$count =  $st->rowCount();

		if($count > 0){

			// login
			Session::init();
			Session::set('role', $data['role']);
			Session::set('loggedIn',true);
			Session::set('userid',$data['userid']);
			header('location:'.URL.'admin');
		}else{

			//show an error

			header('location: ../login');
		}
		
		//print_r($data);

	}

}