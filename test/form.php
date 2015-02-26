<?php 

require '../config.php' ;
require '../libs/Form.php' ;
require '../libs/Database.php' ;
if (isset($_REQUEST['run'])){


$form = new Form();
	try{
$form   ->post('name')
		->val('minlength', 1)
		
		->post('age')
		->val('digit')
		->post('gender') ;



$form ->submit();

echo 'The form passed!';
$data = $form->fetch();

echo '<pre>';
print_r($data);
echo '<pre>';

$db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
$table = 'person' ;
$db->insert($table,$data);

} catch(Exception $e ){
	echo $e->getMessage();
}


}
?>


<form method="post" action="?run">
	Name<input type="text" name="name"  />
	Age<input type="text" name="age"  />
	Gender<select name="gender"  >
		<option value="m">Male</option>
		<option value="f">Female</option>
	</select>
	<input type="submit">
</form>
