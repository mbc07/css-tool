<?php 
/** 
 * Class User.
 *
 * @author Gian Fonseca 
 * @author  
 * @author 
 * @version 1.0
 * @since css-tool 2017-1
 * @link 
 */

 Class User
 {
 	private $permission;
 	private $name;
 	private $email;
 	private $password;


 	function __construct($name, $email, $password)
 	{
 		$this->name = $name;
 		$this->email = $email;
 		$this->password = $password;
 	}
 }

?>