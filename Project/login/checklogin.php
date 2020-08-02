<?php
if(!function_exists("getLoggeduser")){
	function getLoggedUser(){
		$user = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
		return $user;
	}
}

if(!function_exists("setLoggedUser")){
	function setLoggedUser($user){
		$_SESSION['user'] = $user;
	}
	
}

if(!function_exists('checkLoggedUser')){
	function checkLoggedUser(){
		$user = getLoggedUser();
		if (!$user) {
			 echo "Ban phai dang nhap <a href=\"/Project/login/login.php\">Login</a>";
			exit();
		}
	   return $user;
   }
}
if(!function_exists('clearLoggedUser')){
	function clearLoggedUser(){
		unset($_SESSION['user']);
		unset($_SESSION['role']);
		session_destroy();
	}
}

?>