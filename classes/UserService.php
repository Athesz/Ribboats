<?php

require_once 'SQL.php';

class UserService
{
	private $sql;

	function __construct(){
		$this->sql = new SQL();
	}

    public function login($manager, $password) {
        if($this->sql->loginDataCheck($manager, hash("sha1", $password))) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['userId'] = $this->sql->getUserId($manager);
            $_SESSION['managername'] = $this->sql->getPublicUserData($_SESSION['userId']);
        } else {
            throw new Exception(' <li>Hibás belépési adatok!</li> ');
        }
    }

    public function logout() {
        unset($_SESSION['loggedIn']);
        unset($_SESSION['userId']);
        unset($_SESSION['managername']);
    }


} 
?>