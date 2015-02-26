<?php

/**
* database class
*/
class Database extends PDO
{
	
	
		public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS)
		{

			parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);

			//parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIONS) ;
		}

/**
		 * insert
		 *@param string $sql An SQL string
		 *@param array $array Parameters to bind
		 *@param constant $fetchMode A PDO fetch mode
		 *@return mixed 
		 */

		public function select($sql , $array = array(), $fetchMode = PDO::FETCH_ASSOC)
		{

			$sth = $this->prepare($sql);

			foreach ($array as $key => $value){

				$sth->bindValue("$key", $value) ;    

		}
		$sth->execute();
		return $sth->fetchAll($fetchMode);

		}

		/**
		 * insert
		 *@param string $table  A name of table to insert to
		 *@param string $data  An associative array of data
		 */
		
	
	public function insert($table,$data){

			ksort($data);

			

		$fieldNames = implode('`,`',array_keys($data));
		$fieldValues = ':'.implode(', :',array_keys($data));
		
		
		$sth = $this->prepare("INSERT into $table (`$fieldNames`)  VALUES ($fieldValues) ");

		foreach ($data as $key => $value){

				$sth->bindValue(":$key", $value) ;    

		}

 


		
		$sth->execute();
		 

	}
	/**
	 * update
	 *@param string $table  A name of table to update to
		 *@param string $data  An associative array of data
		 *@param string $where  the where query part
	 */

	public function update($table,$data,$where)

	{

		ksort($data);
		$fieldDetails = NULL;
		foreach($data as $key=> $value)
		{

			$fieldDetails .= "`$key`=:$key,";
		} 

		$fieldDetails = rtrim($fieldDetails, ','); 
					

		
		$sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");

		foreach ($data as $key => $value)
		{

				$sth->bindValue(":$key", $value) ;    


		
	   }
	   $sth->execute();

	}



	/**
	 * delete
	 * @param string $table
	 * @param string where
	 * @param integer $limit
	 * @return integer Affected rows

	 */
	public function delete($table , $where, $limit = 1)

	{
		return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");

		
	}

}