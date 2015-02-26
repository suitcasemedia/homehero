 <?php 
/**
* 
*/
class User_Model extends Model{

	public function __construct(){
		parent::__construct();
		
		

	}


	

	public function userlist(){
		return $this->db->select('SELECT userid ,login , role FROM users');
		

		

}

public function userSingleList($userid){
	return $this->db->select('SELECT  userid ,login , role FROM users WHERE `userid` = :userid' , array(':userid' => $userid));

		
}
 
public function create($data){

	$this->db->insert('users',array(
		'login' => $data['login'],
		'password' => Hash::create('sha256',$_POST['password'], HASH_KEY_SITE_WIDE_PASSWORDS_KEY),
		'role' => $data['role']

		));
 
}


public function editSave($data){
	$postData= array(
		'login' => $data['login'],
		'password' => Hash::create('sha256',$_POST['password'], HASH_KEY_SITE_WIDE_PASSWORDS_KEY),
		'role' => $data['role']

		);
	$this->db->update('users', $postData , "`userid`  =  {$data['userid']}");

		
	
}


public function delete($userid){
	$result = $this->db->select('SELECT role FROM users WHERE userid = :userid', array(':userid' => $userid) );
	
	
	

	if ($result[0]['role'] == 'owner')
	return false ;

	$this->db->delete('users',"userid = '$userid'");
	
}

}