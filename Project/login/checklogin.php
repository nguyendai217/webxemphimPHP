<?php
function clearLoggedUser(){
	unset($_SESSION['user']);
	unset($_SESSION['role']);
	//session_destroy();
}
function getLoggedUser(){
	$user = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
	return $user;
}
function setLoggedUser($user){
	$_SESSION['user'] = $user;
}

function checkLoggedUser(){
	 $user = getLoggedUser();
	 if (!$user) {
	 	 echo "Ban phai dang nhap <a href=\"/Project/login/login.php\">Login</a>";
	 	exit();
	 }
	return $user;
}
?>