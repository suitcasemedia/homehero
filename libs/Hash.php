<?php 
	
/**
* 
*/
class Hash 
{	/**
 	* @param string $algo The algorithm (md5, sh1, whirlpool, etc)
 	* @param string $data The data to encode
 	* @param string $salt This should (this should be the same throughout the sytem probably)
 	* @param string The hashed/ salted data
	**/
 
	
	public static function  create($algo ,$data, $salt)
	{
		# code...
		$context = hash_init($algo , HASH_HMAC, $salt) ;
		hash_update($context, $data);

		return hash_final($context);
	}	
}